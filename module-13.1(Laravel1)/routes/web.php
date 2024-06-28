<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\dashBoardController;
use App\Http\Controllers\articalController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/profile/{id}', [profileController::class,'inbox']);

// creating a url with return value by use anonymous function

// Route::get("/World",function(){
//     return "Hello World";
// });

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



