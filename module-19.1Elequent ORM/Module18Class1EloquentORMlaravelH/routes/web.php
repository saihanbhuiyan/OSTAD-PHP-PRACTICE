<?php

use App\Http\Controllers\Module19Class1EloquentORMControllerH;
use App\Http\Controllers\module19class1RESOURSEFULLcontrollerELOQUENTorm;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/task',[Module19Class1EloquentORMControllerH::class,'index']);

////FACK() LIBRERY FUNCTION FOR FACK DATA
Route::get('/fackdata',[Module19Class1EloquentORMControllerH::class,'fake']);

//**************task::all() FOR SHOW ALL DATA IN DATABASE */
Route::get('/getAllData',[Module19Class1EloquentORMControllerH::class,'gatAllDataFromDatabase']);

//**************task::limit(2)->get(); FOR SHOW FIRST 2 DATA FROM DATABASE
Route::get('/getFirst2Data',[Module19Class1EloquentORMControllerH::class,'getFirst2DataFromDatabase']);

//*********task::where('status','completed')->get(); SOKOL COMPLETED STATUS ROW GULU K NIYE ASBE
Route::get('/getCompletedData',[Module19Class1EloquentORMControllerH::class,'getCompletedDataFromDatabase']);

//magicMethod whereStatus('completed') 
       //totha where er sathe colum name diye serch korleo ase jemonta amra DBqueryte dekheche
Route::get('/whereStatus',[Module19Class1EloquentORMControllerH::class,'whereStatusMagicMethod']);

//count()  FOR COUNT HOWMANY ROW HAVE THERE 
Route::get('/count',[Module19Class1EloquentORMControllerH::class,'count']);

//find(idNumber) FOR FIND DATA FROM DATABASE by primary key(id)
Route::get('/find',[Module19Class1EloquentORMControllerH::class,'findDataFromDatabase']);

//findOrFail(idNumber) DATA THAKLE DEKHABE NA THAILE DATA:NOTFOUND DEKHABE
Route::get('/findOrFail',[Module19Class1EloquentORMControllerH::class,'findOrFailDataFromDatabase']);

//orderBy() 1)assending(use kortehoina 1-10 a-z) 2)desending(desc)use korte hoi 10-1 z-a
Route::get('/orderby',[Module19Class1EloquentORMControllerH::class,'orderBy']);

//--------------->UODATE DATA IN DATABASE<--------------------
Route::get('/update',[Module19Class1EloquentORMControllerH::class,'updateData']);

//---------------->multiple data insert in database---------------
Route::get('/multipleInsert',[Module19Class1EloquentORMControllerH::class,'multipledatainsert']);

//---------------->url a id diye oi id er row ber kore anbe--------------
Route::get('/show/{id}',[Module19Class1EloquentORMControllerH::class,'show']);

//*********LARAVEL ROUTE MODER BINDING******** */
Route::get('/tasks/{task}',[Module19Class1EloquentORMControllerH::class,'showtask']);


//********RESOURSEFULL CONTROLLER KAJ HOBE AKHAN THEKE*****************
   //BAKI Route er moto resoursefull Route creat hoina 
   //akhane get er poriborte hobe resource ja sokol function er jonno kaj korbe
   //Route::resource('task',Module19Class1EloquentORMControllerH::class);

   Route::resource('/task',module19class1RESOURSEFULLcontrollerELOQUENTorm::class);