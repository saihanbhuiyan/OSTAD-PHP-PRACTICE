<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\dashBoardController;
use App\Http\Controllers\articalController;
use App\Http\Controllers\formController;
use App\Http\Controllers\module14Class1Controller;
use App\Http\Controllers\Module16Class1Controller;
use App\Http\Middleware\secrateMiddlewareM16Cls1;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/profile/{id}', [profileController::class,'inbox']);

// creating a url with return value by use anonymous function

Route::get("/World",function(){
    return "Hello World";
});

// creat route by controller
Route::get('/welcome',[welcomeController::class, 'welcome']);

// creat route/url by new controller dashboard controller 
Route::get("/dashboard",[dashBoardController::class,'dashboard']);

//creat a view php artisan make:view dashboard by return view('viewpadde name like dashboard);
Route::get("/view",[dashBoardController::class,'view']);

// creat forl folder wide view to view blade.file
Route::get("/Folder",[dashBoardController::class,'Folder']);

// creat folder inside folder like dashboard folder er vitore side bar er jonno
Route::get("/sidebar",[dashBoardController::class,'sidebar']);

// passing fata from controller to blade.php 
Route::get("/passDataFromController&CatchItInView",[dashBoardController::class,'passDataFromControllerToView']);

// compact is a another way to pass data in view blade file without array
Route::get("/passDataByCompact",[dashBoardController::class,'compactToPassData']);

// router ba url kivabe paramiter accept kore ba data ba dinamic value accept kore
// artical controller a peramiter akare dollar id niyeche tai akhane {id} hoyeche
Route::get("/artical/{id}",[articalController::class,'artical']);
// akhn page number dekhbo url a dinamically 
// sejonno artical controller a pagenumber($pageNumber)name ekti method niyeche akhane ta dinamic korbo
Route::get("/artical/page/{pageNumber}/type/{type}",[articalController::class,'pageNumberInROute']);

// query string
//Route::get("/artical/pagernumber/{pageNumber}/perpage/{perpage}/sort/{sort}",[articalController::class,'showArtical']);

// shudu artical likhle id pagenumber likhle page number abr type likhlei type chole asbe dinamically
Route::get("/artical1/{id?}",[articalController::class,'autoDinamicValueInUrl']);





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

// **************************Redirect handle form************************
Route::post("/3handle",[module14Class1Controller::class,'redirectHandleForm'])->name("contact.post");

// *************************FILEhANDLE************************
Route::post("/filehandle",[module14Class1Controller::class,'fileHandle'])->name("form.post");

//***************************PATH OF THE IMAGE ********************************
//Route::post("/path",[module14Class1Controller::class,'ToshowFilePath'])->name("form.post");


// ****************MODULE16CLASS1******FORM VALIDATION**********************

Route::post("/validation",[Module16Class1Controller::class,'checkValidation'])->name("contact.post");



// ***********************************MIDDLEWARE******************************
// MIDDLE WEARE : LARAVEL 11 ER AUTO MIDDLE WEARE SET HOTO BUT 11 A MIDDLE WARE REQUIRED TOTHA JEKHANE 
//-->JEKHANE LAGBE SKHANE MIDDLE WWARE USE KORTE HOBE

// *********************auth & CREAT A MIDDLE WEARE FILE********************
Route::get("/secret",function(){
    return "this is secret page";
    // Akhane jehetu amader login procedute nei so amra ekti middleware file creat korbo personal middleware creat korar jonno
    // HOW TO CREAT MIDDLE WARE?
    // ans : terminal command php artisan make:middleware fileName(tahole http er vitore MIDDLEWARE name ekti
    // --> folder creat hobe jar vitore middle ware file thakbe) middle ware file er vitore ekti class thakbe
    //  class er vitore ekti created method thakbe jar modde amra amader condition likhbo
    // ***WEB.PHP : te ese auth jehetu use korbona middleware use korbo tai auth er poriborte 
    // -->likhbo)->middleware(secretMiddleware::class); abong upore middleware use korte hobe
})->middleware(secrateMiddlewareM16Cls1::class);

// middle ware er maddome amra ki ki korte pari?
// 1)url a password diye secrare msf diye e shudu ai page tite login korte parbe ba access korte parbe
// 2)page tite proti specific minute a kotobar login korte parbe ta se korte parbo
// 3)page tite user protiminite kotobar file upload korte parbe ta bole dite pari 

// *************access 2 time tin a minute by MIDDLEWARE*****
Route::get("/secret2",function(){
    return "this is secret page2";
})->middleware(['throttle:2,1']);
// avabe amra minite wise page kotober access korbe ta boledite pari: 
// route er por errow sign diye bolbo ->middleware then(['er vitore  throttle:then kotobar access korbo
//---> then,coma then koto minite korbo']);

// ***AI MIDDLE WARE GULU PABO BAICS ER VITORE MIDDLEWARE ER VITORE (alice o middle ware a throttle 
// --->o vhivinno middle ware er use case pabo)
//Route::get("/hello",[module16Class1Controller::class,'hello']);
//Route::get("/hello2",[module16Class1Controller::class,'hello2']);

// ******************Group WISE MIDDLE WARE USE PROCESS**************
Route::middleware(['throttle:2,1'])->group(function(){
    Route::get("/hello",[module16Class1Controller::class,'hello']);
    Route::get("/hello2",[module16Class1Controller::class,'hello2']);
});
// akhane 2ta route k middle ware diye time access koreche like 1min a 2bar access korajabe 2tatei
// --->jehetw ekti trottle diye 2take group koreche sehetw ektate 2bar access kore felle 1min wait korte
//----->hobe porer route access korte hole