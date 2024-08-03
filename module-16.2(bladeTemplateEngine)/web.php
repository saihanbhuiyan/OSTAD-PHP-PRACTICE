<?php

use App\Http\Controllers\module14cls2RequestResponseController;
use App\Http\Controllers\Module16Class2BladeTempletEngineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




// ***********************MODULE16-CLASS2**************************************************

// 1.****************understanding blade templet engine********
Route::get("/1",[Module16Class2BladeTempletEngineController::class,'undestandingBladTempletEngine']);

// 2.*************controller theke blade a variable(value) pass******
Route::get("/2",[Module16Class2BladeTempletEngineController::class,'valuePassControllerToBlade']);

// 3.**********if else in blade.templet engine********
Route::get("/3",[Module16Class2BladeTempletEngineController::class,'ifElseInBladeTempletEngine']);

// ******************7. master layout er @yield('content')***************
Route::get("/4",[Module16Class2BladeTempletEngineController::class,'home']);
Route::get("/5",[Module16Class2BladeTempletEngineController::class,'home2']);
