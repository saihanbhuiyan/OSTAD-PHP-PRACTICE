<?php

use App\Http\Controllers\Module18Class2DBQueryBuilderUnionsOrderingGroupingPaginationController;
use App\Http\Controllers\Module18class2PDFqueryBuilderPrerecordVideoALlQuerysController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[Module18Class2DBQueryBuilderUnionsOrderingGroupingPaginationController::class,'index']);

//#########PDF QUERY BUILDER PRERECORD VIDEO ALL QUERYS############
Route::get('pdf/',[Module18class2PDFqueryBuilderPrerecordVideoALlQuerysController::class,'index']);