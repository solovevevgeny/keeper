<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Operation;
use App\Account;


class OperationController extends Controller{
    public function index(){
        $operations = Operation::orderBy('created_at','desc')->get();

        return view("operations.index", [
            'operations' => $operations
        ]);
    }
    
    public function createForm(){

        $accounts = Account::all();

        return view("operations.createForm",[
            'accounts' => $accounts
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'from'=>'requred',
            'amount'=>'required|max:8'
        ]);
        
        // if OK
        $operation = new Operation();
        $operation->account_from = $request->account_from;
        $operation->account_to = $request->account_to;
        $operation->amount = $request->amount;
        $operation->comment = $request->comment;
        if ($operation->save()) {
            return redirect (route('operations.index'));
        }

        

    }

}
