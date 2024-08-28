<?php

use App\Http\Controllers\module19class2EloquentORMwithModelR;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/demo1',[module19class2EloquentORMwithModelR::class,'demo1']);

//***********MODELE TO MODEL RELATION KORE KAJ KORBO JEVABE******** */
Route::get('/demo2',[module19class2EloquentORMwithModelR::class,'demo2']);
