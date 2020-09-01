<?php

use Illuminate\Support\Facades\Route;


route::get("/operations", "OperationController@index")->name("operations.index");
route::get("/operations/create","OperationController@createForm")->name("operations.createForm");
route::post("/operations/create","OperationController@store")->name("operations.store");


route::get("/accounts", "AccountController@index")->name("accounts.index");


Route::get('/', "MainScreenController@index")->name("mainscreen.index");
