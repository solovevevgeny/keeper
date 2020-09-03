<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Operation;
use App\Account;
use App\Category;

class OperationController extends Controller{
    public function index(){
        $operations = Operation::with('accountFrom','accountTo','category')->orderBy('created_at','desc')->get();

        return view("operations.index", [
            'operations' => $operations,
        ]);
    }
    public function createForm(){
        $accounts = Account::all();
        $categories = Category::all();

        return view("operations.createForm",[
            'accounts' => $accounts,
            'categories' => $categories
        ]);
    }
    private function add($accountTo, $amount, $category, $comment){
        $result = Account::where('id', $accountTo )
                  ->increment("amount", $amount);
        if ($result) {
            $this->addOperation("sum", null, $accountTo, $category, $amount, $comment);
        }
    }
    private function sup($accountFrom, $amount, $category, $comment){
        $result = Account::where('id', $accountFrom )
                  ->decrement("amount", $amount);
        if ($result) {
            $this->addOperation("sup", $accountFrom, null, $category, $amount, $comment);
        }
    }


    private function move($accountFrom, $accountTo, $amount, $comment = null){

       // dd($accountFrom, $accountTo, $amount, $comment);

        DB::beginTransaction();
         
            $resFrom = Account::where('id',$accountFrom)
                ->decrement('amount',$amount);

            $resTo = Account::where('id',$accountTo)
                ->increment('amount',$amount);

            if ((!$resFrom) || (!$resTo)) {
                DB::rollback();
            }
            else {
                DB::commit();
            }
            $this->addOperation("move", $accountFrom, $accountTo, null, $amount, $comment);

    }
    
    private function addOperation($type,$accountFrom = null , $accountTo = null, $category =null, $amount, $comment = null){
        $operation = new Operation();
        $operation->type = $type;
        $operation->account_from = $accountFrom;
        $operation->account_to = $accountTo;
        $operation->amount = $amount;
        $operation->comment = $comment;
        $operation->category_id = $category;
        $operation->save();
    }


    public function store(Request $request) {
        $operationType = $request->type;

        $accountFrom = $request->accountfrom;
        $accountTo   = $request->accountto;
        $amount      = $request ->amount;
        $comment     = $request->comment;
        $category    = $request->category_id;

        switch($operationType){
            case "sup":
                $validatedData = $request->validate([
                    'accountfrom'=>'required',
                    'amount'=>'required|max:8'
                ]);

                $this->sup($accountFrom, $amount, $category, $comment);
                return redirect()->route('mainscreen.index');
                break;

            case "move":
                $validatedData = $request->validate([
                    'accountfrom'=>'required',
                    'accountto'=>'required',
                    'amount'=>'required'
                ]);

                $this->move($accountFrom, $accountTo, $amount, $comment);
                return redirect()->route('mainscreen.index');

                break;

            case "add":
                $validatedData = $request->validate([
                    'accountto'=>'required',
                    'amount'=>'required'
                ]);

                $this->add($accountTo, $amount, $category, $comment);
                return redirect()->route('mainscreen.index');
                break;
        }




  
        


/*
        // moving transaction
        if (($request->account_from !==null) & ($request->account_to !== null)) {

            $amount = $request ->amount;
            $from = $request->account_from;
            $to = $request->account_to;

            DB::beginTransaction();
           
                $resFrom = Account::where('id',$from)
                ->decrement('amount',$amount);

                $resTo = Account::where('id',$to)
                ->increment('amount',$amount);

                if ((!$resFrom) || (!$resTo)) {
                    DB::rollback();
                }
                else {
                    DB::commit();
                }
        }elseif (($request->account_from !== null) & ($request->account_to == null)) {
            $operationDescrement = Account::where('id', $request->account_from)
                                  ->decrement('amount', $request->amount);

        //    dd($request->amount);

        }

        // if OK
                $operation = new Operation();
                $operation->account_from = $request->account_from;
                $operation->account_to = $request->account_to;
                $operation->amount = $request->amount;
                $operation->comment = $request->comment;
                $operation->category_id = $request->category_id;
                if ($operation->save()) {
                    return redirect (route('mainscreen.index'));
                }
*/


    }





}
