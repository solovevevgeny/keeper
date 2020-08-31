<?php

use Illuminate\Support\Facades\Route;



route::get("/operations", "OperationController@index")->name("operations.index");


Route::get('/', function () {
    return view('welcome');
});
