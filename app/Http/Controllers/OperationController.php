<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;


class OperationController extends Controller{
    public function index(){
        $operations = Operation::all();

        return view("operations.index", [
            'operations' => $operations
        ]);
    }

    
}
