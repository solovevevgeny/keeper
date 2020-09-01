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

    public function store(Request $request) {

        $validatedData = $request->validate([
            'from'=>'requred',
            'amount'=>'required|max:8'
        ]);
        

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
                    return redirect (route('operations.index'));
                }
    }





}
