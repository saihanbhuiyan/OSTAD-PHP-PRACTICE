<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;


// ***vs code a CTRL+P diye file search korajai like ctrl+p(web.php)

// ***LAYOUT :bolte ekti project er onekgulu page er head ba footer ba boy ect ect
//---> ekti LAYOUT.BLADE.PHP FILE a rekhe porobortite jekhane lagbe sekhane
//----> <x-layout></x-layout>er vito vosalei hobe
// **ekkothai guchiye rakhbo sonkhipto korbo LIKE ekti page er header footer protita page a thake 
//--->jodi kono CSS BAA JS add kori setaw proti page a add korte hobe KINTU layout wayte korle
//---> layout.blade.php file a ekbar add kore rakhle e hobe r add korte hobena amra just seta
//---> use korbo <x-layout> er maddome

// *****example er jonnno ekti blade view creat korbo(form o contact o login)
//*-->php artisan make:controller formController
//*-->php artisan make:view forms.login(akhane forms.login dewar mane hocche view er vitore
//----> forms name ekti folder er vitore login namok ekti blade file creat hobe)
//*-->php artisan make:view forms.contact
//*-->php artisan make:view forms.form

//*** ai blade gulu controller chara direct route diye o creat kora jabe variable pass korano
//----> jabe jodi kono logical operation na thake tahole JEMON
// ************web.php*****************
// Route::view("/loginform","forms.login");
// Route::view("/loginform","forms.form");
// Route::view("/loginform","forms.contact","title"=>"login");


class module14Class1Controller extends Controller
{
    // **********view er vitore COMPONENTS FOLDER creat kore layout.blade.php name ekti view creat korbo**
// --->akhn blade file gulu k jodi alada alada rakhi tahole sokol kaj protita file a alada 
// ---->alada korte hobe amn ki css js ba jai add korina kno protita file sobkichu e alada kore
// ---> bosate hobe
// KINTU : amra avabe na bosiye ekti blade file a sokol common thigs gulu rekhe like head 
//---->footer ect ect sokol kichu bosiye body te jekhane change aste asbe ba jekhane kaj 
//---->korbo sekhane {{$slot}} bole dite pari ete kore ai ai ekti file k amra onek gulu page 
//---->a use korte parbo <x-layout></x> use er maddome

//***SEJONNO : view er vitore components namok  ekti folder creat kore tar vitor layout.blade 
//----> file er vitore ekti blade file creat kore tar modde html file rekhe body te jekhan theke
//----> kaj suru hobe sekhane {{$slot}} koredibo akhn atake use kore baki page gulu te kaj korbo */
// ----> akhn j page nihye e kaj korina kno just <x-layout> bole er vitore kaj korle hobe</x-layout>
//*************EXAMPLE****** */
// LAYOUT.BLADE.PHP
// </html>
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
    // {{$slot}}
// </body>
// </html>

// forms/contact/login.blade.php
// <x-layout>
    // everything all context
// </x-layout>
  function login(){
      return view('forms.login');
  //akhn web .php te ekti Route creat kore ai login form k browser a run/show korbo

  }
// ******DINAMICALLY TITLE CHANGE
// uporere layout file a je title thakbe protita page er e same title thakbe karon layout.blade.php file tike amra use kortesi protita page a
// ----> so amra chaile ai title tike dinamically change korte pari protita page a JA 2TI WAY TE KORAJAI
// SEJONNO :1. layout.blade.php file a title a shudu ekti variable pass korbo***************** {{$title}} abong
//------>******************************** <x-layout> a <x-layout title="this is the title1"> </x-layout>
// ----> 2. **********<X-layout> er vitore <x-slot:title>likhe tar vitor joto icche information diye</x-slot:title>
// EXAMPLE :
// 1.**************** <x-layout title="this is the title1"> </x-layout>
// 2.**************** <x-layout> <x-slot:title> this is the title 2 </x-slot:title> </x-layout>


  // ********************FORM HANDLE************************
// *--->laravele jokhn form toiri korbo tokhn********************** @csrf ai special variable tike use korbo 
// --->jar full meanig(cross site request forgun)
// -------------------------
// ***jaja lagbe
// --->ai form tir jonno ekti route lagbe ja post er maddome data submit korbo tai ekti 
// --->route creat korte hobe abong logical operation er jonnno ekti controller toiri korte hobe
// *****************formController.php : er modde ekti function creat kore tar modde Request class rekhe abong 
// --->ekti $request peramiter rekhe dd er vitor bole dibo j form ja ja pass koreche ai sokol 
// ---> request k route a pathaw
// *****EXAMPLE ********************CONTROLLER.PHP
// function handleForm(Request $request){
//  ******************************   dd($request->all());
//     //akhane Request ekti laravel object ata use korar age upore use illuminate\http\Request bole nite hobe
//     // ABONG dd means dump and die ja somosto kichu dekhabe dekhaye end koredibe
//     // request-all()mane amr kase ja ja submit hoyeche
// }

// **route->web.php : ai route a giye prothome controller k use kore nite hobe upore..trpr ekti
//____> Route::post creat korte hobe LIKE
// **route->web.php : Route::post('/handleForm',[formController::class,'handleForm']);
// ***form handle korar jonno form er sathe ekti method="" o action="" add korte hobe
// DINAMIC aaction=""BA route*****KINTU : akhane ekti problem ache jodi amra route a url name ba 
// --->***********Route::post("/handleForm")change kori tahole action a o change korte hobe tai
// ----> route er ekti name dibo abong action k dinamic korbo ba route er sathe connect korbo route a
// ----->ja dibo action a o jeno tai hoi sejonno action a action="{{route('handleForm')}}" use
// ----->korbo abong route er vitore j name dibo akhane action er vitoreo eki name dibolikhe
// *****EXAMPLE
//web.php :************** Route::post('/handleForm',[formController::class,'handleForm'])->name("form.php");
// form.blade.php :**************** <x-form action="{{route('form.php')}}" method="post">

function ddhandleform(Request $request){
    dd($request->all());
    return "success";
    // OUTPUT : WILL BE LIKE THIS
//     array:4 [▼ // app\Http\Controllers\module14Class1Controller.php:74
//   "_token" => "EOcpvhoY27yP7lxMDSpmQ573W8eDOjK0Xb2qqcKY"
//   "name" => "saihan"
//   "email" => "raihan@gmail.com"
//   "submit" => null
//]
}

// ****akhn jodi ekti ekti kore submit file dekhtechai tahole controller a giye all() 
// ---->na diye bolbo************** return $request->input("name")
function oneByoneHandleForm(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    //return $email; //output : saihanbhuiyan@gmail.com
    return [
        "name"=>$name,
        "email"=>$email
    ];

}
// form submission er por sob data gulu jodi dekhte chai dd er moto tahole  redirect kore ta dekhte pari
// ***JEVABE CREAT KOERCHE :
// --->1.CONTACT.blade.php : akhane prothome amra contact.blade.php file layout.blade file add koreche
//----> <x-layout>er maddome abong tar niche form a action niyeche {{route(contact.post)}}akhane action 
//----->a post niyeche karon form theke data pathabo ba send korbo abong method o post trpr @csrf token niye form 
//------>creat koreche

//---->2.WEB.PHP : web a contact route ername->("contact.get") niyeche totha get method niyeche karon contact form a amra sda send kore abr redirect korbo ba niye asbo r jekhane e asnar kotha asbe sekhane e get 
// **--->abar controller method er jonno j route creat koreche jekhane amra array akare data pathacche
// ------> success name o email tar name->("contact.post") diyeche karon ai method diye amra data pathabo

// *** MODULE14CLS1CONTROLLER.PHP : akhane ekti method declas koreche jekhane send crito data alada
//-----> alada niye asbo contact.blad file a form er niche tai resun redirect kore contact.blade.php 
//----->file k web theke j route diye show koreche contact.blade file k se route name diyeche redirect
//-----> er modde jemon ***redirect(route('contact.get')) karon get korbe abong boleche j er sathe jabe
//---> totha->with(["success"->"msf","name"=>$name ect ja ja amra abr contact.blade file a return
//----> korbo ba redirect korbo])

function redirectHandleForm(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    return redirect(route('contact.get'))->with(["success"=>"successfully submited","name"=>$name,"email"=>$email]);
}

// **************************************FILE HANDLE*****************************************
//***1. FORM.BLADE.PHP : te ekti form niyeche jekhane file upload er 
//---> jonno ******* action er age enctype="multipart/formdata" boleditehobe abong action niyeche
// ---> post akare cz file pathabo baki sob same as usual inpute file er type hobe file name ja icche
//----> tobe name ja dibo controller a o se name tai use korte hobe file catch korar jonno tanahole file pabena

//***2.WEB.PHP : web.php te **from.blad.php Route creat koreche direct View er maddome jar 
//--->Route name->diyeche('form.get') Karon amra jeno check korte pari file submit hoyeceh kina dirext
//---> kore seta name success ba email ba imag k ene ba get koreo dekhte pari tai Route er 
//---->name name->('form.get') diyeche abong method er rout er name name->('form.post') post diyeche 
//---->karon ai route er maddome upload korbo pathabo..abong purber moto redirect kore check koreche 
//---->with([array er moddome jekhane success name o email rekheche])jeno amra bujte pari submit hoyeche
//---> abong setar msg pai ba notification pai

// ***3.CONTROLLER.PHP : CONTROLLER A amra prothome input file gulu k Variable a rekheche $request
//---> theke $name=$request->input("name"); akhane j "name" ta use koreche ata input file er name="name"
//----> abong pore if condition er maddome check koreche jodi $request->has('profile-picture')totha request 
//---->a profile picture thake tahole $file = $request->file("profile-picture")profile picture tike
// ----> $file namok variable a store koro(akhane profile picture o input file er name="profile-picture")  
//----->trpr file->store("upload","public"); file tike *****storage folder er vitore public namok folder er 
//---->vitore upload namok folder a rakho(upload folder ti creat kore ditehobe) jodi submit hoi tahole 
//---->redirect koro page k form.get er modde redirect(route('form.get'))-with['s','n','e'] 

//***4.form.blade.php : te giye session a succes ba file ba name ba email ba chaile sob e rakhte hobe for check and msg j submit hoyeche
function fileHandle(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    if($request->has("profile-picture")){
        $file = $request->file("profile-picture");
        $name1 = $file->getClientOriginalName();
       //$file->store("upload", "public");    //avabeo image upload korajai kintu avabe image upload korle image 
    //--->name ta #Character a ase original name asena tai ekti Variable newahoyeche $name1 name jar modde
    //---> boledewa hoyeche $file->er modde j clientOriginalName ase seta soho upload koro abong storeAs
    //--> korte hobe sathe store theke kore $name1 k store a bosalei hoyejabe

        $file->storeAs("upload",$name1,"public");
    }

    return redirect(route('form.get'))->with(["success"=>"submiter"]);
}

// *****************************path of the file ba file ti kothai store hoyeche ta dekhte chaile***********************
// *********************************korahoinai korate hobe*******
// function ToshowFilePath(Request $request){
//     $name = $request->input('name');
//     $email = $request->input('email');
//     $path = "";
//     if($request->has("profile-picture")){
//         $file = $request->file("profile-picture");
//         $name1 = $file->getClientOriginalName();

//         $file->storeAs("upload",$name1,"public");
//         $path = Storage::url('profile-picture');
        
//     }

//     return redirect(route('form.get'))->with(["success"=>"submiter","path"=>$path]);
// }

}




 


// formController.php :

// class module14Class1Controller extends Controller
// {
//     //
// }






