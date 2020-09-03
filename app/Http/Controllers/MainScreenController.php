<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Operation;

class MainScreenController extends Controller{

    // accounts
    // operations

    public function index(){
        $accounts = Account::with('currency')->get();
        $operations = Operation::with('accountFrom','accountTo','category')->orderBy('created_at','desc')->limit(5)->get();

        return view("mainscreen.index", [
            'accounts'=>$accounts,
            'operations' => $operations
        ]);
    }
    
}
