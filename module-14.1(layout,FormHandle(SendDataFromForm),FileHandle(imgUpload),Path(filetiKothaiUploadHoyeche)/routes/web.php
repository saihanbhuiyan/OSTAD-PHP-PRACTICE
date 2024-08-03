<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\dashBoardController;
use App\Http\Controllers\articalController;
use App\Http\Controllers\formController;
use App\Http\Controllers\module14Class1Controller;

Route::get('/', function () {
    return view('welcome');
});


// ***************************************MODULE-14-CLASS-1**********************************
//*** ai blade gulu controller chara direct route diye o creat kora jabe variable pass korano
//----> jabe jodi kono logical operation na thake tahole JEMON
// ************web.php*****************
 Route::view("/loginform","forms.login");
 Route::view("/fileform","forms.form")->name('form.get');
 Route::view("/contact","forms.contact",["title"=>"login"])->name("contact.get");

//  LAYOUT
// ********layout.blade.php->login.blade.php->controller->web.php
Route::get("/loginform",[module14Class1Controller::class,'login']);

// **********FORMHANDLE WITH DD TO SHOW SUBMITED DATA BY DUMO & DIE****************
Route::post("/handleform",[module14Class1Controller::class,'ddhandleform'])->name('login.php');


// **********FORMHANDLE WITH one by one TO SHOW SUBMITED DATA BY ****************
Route::post("2handle",[module14Class1Controller::class,'oneByoneHandleForm'])->name('login.php');

// 
Route::post("/3handle",[module14Class1Controller::class,'redirectHandleForm'])->name("contact.post");

// *************************FILEhANDLE************************
Route::post("/filehandle",[module14Class1Controller::class,'fileHandle'])->name("form.post");

//***************************PATH OF THE IMAGE ********************************
//Route::post("/path",[module14Class1Controller::class,'ToshowFilePath'])->name("form.post");



