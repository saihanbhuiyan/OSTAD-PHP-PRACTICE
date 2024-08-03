<?php

use App\Http\Controllers\Module17Class1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/index",[Module17Class1Controller::class,'index']);