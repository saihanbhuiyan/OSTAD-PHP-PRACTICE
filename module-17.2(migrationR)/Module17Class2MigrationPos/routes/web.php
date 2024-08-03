<?php

use App\Http\Controllers\Module17Class2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/m17.2',[Module17Class2Controller::class,'index']);
