<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class dashBoardController extends Controller
{
     function dashboard(){ 
        //from route web.php
          return "this is a deshboard page"; 
     }
    function view(){
                 //to show view  blade.php
       //creat a view php artisan make:view dashboard by return view('viewpadde name like dashboard);
       return view('view');
    }
       
function Folder(){
    // ***3rd: arokom onek view/blade.php file amader lagbe so amra categori wise folder creat kore tar vitore
    // relatred blade file gulu rakhte pari
    // ***--->kintu kotha hocche access korbo kmn kore ?
     // ---->se jonno view('er vitor prothome FOLDERNAME then DOT then FILENAME')dot na diye slesh/ dileo hobe
     // tobe laravele good practice dot
    return view('dashboardFolder.dashboard');
    
}

function sidebar(){
     // akhn jodi deshboard folder er vitor side bar er jonno aro ekti folder thake side bar tahole sidebar
     //---> folder er vitorer dile access korbo kmn kore?

    return view('dashboardFolder.sideBard.sidebar');
}

// how to pass data from controlller to blade .php and how to catch this data in blade.php
function passDataFromControllerToView(){
// controller theke view a data pass korbo kmn kore?
// Ans : controller a j method ti declar korbo SE method a VARIABLE a data Rakhbo abong ta return a
//----> view(sadhboardFolder.blade.php',[array akare boledibo ba pass kore dibo 
//------>LIKE 'name'=>$name, 'email'=>$email]);avabe 
// *-----> Controller theke array er vitoe passcrito data view er vito ba blade.php file er vitor Doublecurly 
//-->breaker er vitr LIKE <p>name = {{$name}}</p><p>email = {{$email}}</p>DOUBLECURLY BREAKET ER VITORER
//-----> NAME ABONG EMAILTI TAI HOBE variable akare $sign diye JA ARRAY ER VITORE VARIABLE K ASSAIGN KORE 
//----->korar jonno use hoyechilo LIKE 'NAME' 'EMAIL' akhane ja hobe view a o tai hobe
//--> AKHANE JA DIBO BLADE.PHP FILEO TAI DITE HOBE CATCH KORARA JONNO
 
$name = 'saihan';
$email = 'saihan123@gmail.com';

return view('dashboardFolder.dashboard',['nameX'=>$name, 'emailX'=>$email]);
}
//compact() for pass data ti view without array
// controller theke data pass korar aro ekti way ba upai ase ja hocche compact() function use kore jar
//--> vitore key gulu diye dile e hoyejabe like compact('name','email')

function compactToPassData(){
    $email = 'saihan123@gmail.com';
    $password = 'password';
    return view('dashboardFolder.sideBard.sidebar',compact('emali','password'));
    
}

}

