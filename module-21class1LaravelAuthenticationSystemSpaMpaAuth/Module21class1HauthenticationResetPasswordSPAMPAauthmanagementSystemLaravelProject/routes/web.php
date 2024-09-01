<?php

use App\Http\Controllers\module21class1HauthenticationResetPasswordAuthManagementSystemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//*******authentication DIYE EKTI route K KIVABE PROJECT KORAJAI******* */
Route::get('/public',[module21class1HauthenticationResetPasswordAuthManagementSystemController::class,'publicMessage'])->name('publicMessage');
Route::get('/secret',[module21class1HauthenticationResetPasswordAuthManagementSystemController::class,'secretMessage'])->name('secretMessage',)->middleware('auth');

//**************PROGRAMICALLY EKTI USER K KIVABE AUTO LOGIN KORANOJAI?************** */
Route::get('/programicallyLogin',[module21class1HauthenticationResetPasswordAuthManagementSystemController::class,'login']);

//**************PROGRAMICALLY EKTI USER K KIVABE AUTO LOGOUT KORANOJAI?************** */
Route::get('/programicallyLogout',[module21class1HauthenticationResetPasswordAuthManagementSystemController::class,'logout']);

//*****task in taskCOntroller for add task in dashboard****/
Route::get('/tasks',[tasksController::class,'index'])->name('tasks.task')->middleware('auth');

//********all-task-form er route**** */
Route::post('/tasks',[tasksController::class,'store'])->name('tasks.store')->middleware('auth');

//***********destroy task BA Delete task ************ */
Route::delete('/tasks/{task}',[tasksController::class,'destroy'])->name('tasks.destroy')->middleware('auth');


require __DIR__.'/auth.php';
