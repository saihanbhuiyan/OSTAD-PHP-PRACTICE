<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/demo1"[controller::class,'demo1']);
Route::post("/demo1"[controller::class,'demo1']);
Route::put("/demo1"[controller::class,'demo1']);

// akhane shudu get er response pabo karon route ba url shudu get k pass kore post ba put na
// --->se jonno  crf token off korte hobe off korle post put thekeo response pabo
//--> ata shudu matro practice er khatire

// HOW TO OFF csrf PROTECTOIN?
// Ans : goto laravel.com->Document->search->csrf(then click on csrf protection)->find 
//-->(Excluding url from csrf protection)akhane likha ase kon foldere csrf
//--> token pabo->bootstrap/app.php file (copy cods)& goto laravel
//---> projet bootstrap/app.php->find(withMiddleWare).pastCode in this area.ai code
//----> theke sobkisu bat diye shudu '*' rakhbo jar mane sobkichu theke csrf token tule nilam
// --->akhane excep means kon kon jaigai csrf protection thakbe


// controller theke json return example Route part
Route :: get("/demo4",[controller::class,'demo4']);
