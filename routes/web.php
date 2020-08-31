<?php

use Illuminate\Support\Facades\Route;



route::get("/operations", "OperationController@index")->name("operations.index");

route::get("/accounts", "AccountController@index")->name("accounts.index");


Route::get('/', function () {
    return view('welcome');
});
