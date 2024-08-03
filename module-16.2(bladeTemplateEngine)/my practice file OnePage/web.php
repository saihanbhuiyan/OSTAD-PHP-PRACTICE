<?php

use App\Http\Controllers\module14cls2RequestResponseController;
use App\Http\Controllers\Module16Class2BladeTempletEngineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnePageTempletMasteringPracticeController;

Route::get('/', function () {
    return view('welcome');
});
// *******************************MODULE14-CLASS-2**********************************
// ************REQUEST TYPE STRING demo1*************
Route::get("/demo1",[module14cls2RequestResponseController::class,'demo1']);

// ************REQUEST TYPE INT demo2*************
Route::get("/demo2",[module14cls2RequestResponseController::class,'demo2']);

// ************REQUEST TYPE NULL demo3*************
Route::get("/demo3",[module14cls2RequestResponseController::class,'demo3']);

// ************REQUEST TYPE BOOLEAN demo4*************
Route::get("/demo4",[module14cls2RequestResponseController::class,'demo4']);

// ************REQUEST TYPE ARRAY demo5*************
Route::get("/demo5",[module14cls2RequestResponseController::class,'demo5']);

// ************REQUEST TYPE ASSOCIATIVE ARRAY demo6*************
Route::get("/demo6",[module14cls2RequestResponseController::class,'demo6']);

// ************REQUEST TYPE JSON demo7*************
Route::get("/demo7",[module14cls2RequestResponseController::class,'demo7']);

// ************REST API How TO WRITE REST API*************
Route::get("/demo8",[module14cls2RequestResponseController::class,'demo8']);

// ************RREDIRECT ROUTE*************
Route::get("/demo9",[module14cls2RequestResponseController::class,'demo9']);

// ******************BINARY FILE RESPONSE BA FILE STREEM(image take korbe & show***********
Route::get("/demo10",[module14cls2RequestResponseController::class,'demo10']);


//  ************DOWNLOAD FILE RESPONSE************
Route::get("/demo11",[module14cls2RequestResponseController::class,'demo11']);

// ********************RESPONSE TYPE COOKIE********************
Route::get("/demo12",[module14cls2RequestResponseController::class,'demo12']);

// ******************ATTATCHING response header************
Route::get("/demo13",[module14cls2RequestResponseController::class,'demo13']);

// ******************RESPONSE TYPE VIEW********************
Route::get("/demo14",[module14cls2RequestResponseController::class,'demo14']);


// *************************AKHAN THEKE REQUEST SURU HOBE************************

// *************************REQUEST URL PARAMETER******************
Route::get("/demo15/{id}",[module14cls2RequestResponseController::class,'demo15']);

//****************REQUEST BODY :Clint PC theke Kivabe Request Pathabo abong Catch Korbo***************
Route::post("/demo16",[module14cls2RequestResponseController::class,'demo16']);

// ******************REQUEST HEADER*************************
    // *******KONO EKTI HEADER SET KORECHE POST MAN A AKHN TA CATCH KORBO
Route::get("/demo17",[module14cls2RequestResponseController::class,'demo17']);

// ******************REQUEST COOKIE CATCH*************************
Route::get("/demo18",[module14cls2RequestResponseController::class,'demo18']);




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


// ****************OnePageTempletMasteringPracticeController********
Route::get("/OnepageHome",[OnePageTempletMasteringPracticeController::class,'onePageTempletMasteringPractice']);
