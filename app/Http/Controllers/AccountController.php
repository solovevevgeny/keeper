<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller{
    public function index(){
        $accounts = Account::all();

        return view("accounts.index",[
            'accounts'=> $accounts
        ]);
    }

}
