<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Module16Class2BladeTempletEngineController extends Controller
{
    // Rabbil vai er class akhane 1 ,2 ,3 agulu topic serial
    //1*****************************VIEW BA TEMPLET ENGINE******************************

    // ***********understanding blad templet engine*********8
    // 1. laravel full-stack project a sokol file folder e backend niye kaj kore shudu matro view 
    // --->folder e front end ba clint site k represent kore
    // 2.sejonno ekti web.php file ekti controller o ekti blade ready kore niyeche
    // 3. akhn ekti method declar korbo controller a jar maddome blade.php ba tempet k retun kore display korbo
     function undestandingBladTempletEngine(){
        return view("Module16Class2");
     }

    // 2 *************controller theke blade a variable(value) pass******
    // *.ajonno controller ekti theke j view("bladeFile")return korbo tar sathe 
    // --->[array er modde amra associative array er maddome Variable pass korte pari]
    // --->LIKE["property/key"=>$value/variable]
    // **.controller theke j property er modde Variable rekhe pathacche ta blade.file a giye $propert
    //---> Ba {{$propert }}Variable hisebe assin hobe ba likhbo value k catch korar jonno

    function valuePassControllerToBlade(){
        $number = 10;
        $number1 = 20;
        $total = $number + $number1;
        return view("Module16Class2",["Result"=>$total]);//->with(["Result"=>$total]);
    // avabe with koreo pass korajabe
    }

    // 3.**********if else in blade.templet engine********
    function ifElseInBladeTempletEngine(){
        $math = 40;
        $che = 20;
        $totalMark = $math + $che;
        return view("Module16Class2",["mark"=>$totalMark]);
    }

    //4.************asset binding***********{{asset()}}****
    // *.page a sadharonoto amra img audio video add kore thaki as usual <img src="" alt=" audio video 
    //--->tag use kore but laravel project a avabe kaj korle normally asbe kaj korbe but jokhn lively kaj korte
    //-->jabo live project a ai bepar gulu r kaj korbena oi file fulu blank hoye thakbe totha blank file show korbe
    // **.sejonno blade.php file a img ba audio video er file gulu rakhbo {{asset('')}} er vitore
    // -->asset('') ti rakhbo double curley er vitore like:
    //***----> */ <img src="{{asset("")}}" alt=""> avabe

    // 5.**********switch case in blade**********
    // Module16Class2.blade.php file a sokol kichu koreche ifElseInBladeTempletEngine medhod ba
    // ---> er $mark use kore abong web.php er /3 Rout k use kore


    //6 ******************including blade templet engine ba blade subView**************

    // @include('folderName.blade.php') avabe amra ekadik blade file a amader page tike vag kore rekhe
    // -->ekti page a proyojonio blade gulu k ene ekti purnamgo rup dite pari atake bole componenet
    // @include('folderName.subfolderName.blade.php') use korahoi front-end er code gulu k ekjaigai rekhe
    // --> reuse korar jonno jeno ek e code bar bar likhte nahoi
    // ****ajonno view er vitoe ekti folder creat kori component name jar modde tinti blade file nibo 
    // -->1.index 2body 3footer abong ai blade file gulu k module16class2.blade.php file a bosiye jukto korbo


// *************************7. master layout er @yield('content')**************************
// 1***.master layout kivabe kaj kore?
// 2master layout kivabe creat korbo ba use korbo?
//3 @yeild('content'),@extends('folderName.blade.php'),@section('content'),$endsection kivabe kaj kore?

// 1*master layout kivabe kaj kore? 
// 3*@yeild('content'),@extends('folderName.blade.php'),@section('content'),$endsection kivabe kaj kore?
// Ans : master layout hocche ekti parant blade file jar moddde ekti html
//-->file er ba ekti fronter sokol upadhan thake like html,meta tags,head,title nesecery css files ect.jar 
//-->boyete amra @yeild('contents') namok ai property use korbo jar mane hocche ai parant bladtike amra sokol
//-->child templets gulu te @extends('folderName.blade.php') er maddome bosabo totha uttoradhikari korbo abong
//-->oi child page er jabotio sokol content bosabo @section('contents') er vitore abong ja ses korbo 
//-->@endsection er maddome. 
// @@@---->ekti page er konol kichoi ek ekti contents tai @yeild('contents') use koreche onno kichu use
// korleo hobe anything ja monchai tobe @yeild('')er vitor ja use korbo @section('') er vitor o tai use
// korbo tanahole kaj korbena jehetu @extends('')er maddome master ba parant layout ba blade k niye 
// bosaitesi tai @entends('')er vitore master/parant layoutBa blade er FolderName doth name boledite
// hobe@entends('folderName.blade.name') abong sokol kaj ses hole @ section('') k @endkore ditedibe
// @endsection er maddome

// 2 master layout kivabe creat korbo ba use korbo?
// Ans : akhane view folder a ekti folder creat koreche jar name masterLayout tar vitore ekti 
// -->blad file creat koreche app.blade.php abong view er vitore r o 2ta template ba blade creat 
// -->koreche home.blade & home2.blade.php.app.blade.php er modde html ba page er sokol upokoron rekheche
// -->abong bodyte boleche @yeild('content') abong home.blade.php kono formate na likhe just ekti table
// -->creat koreche tar modde <ol>diye kichu list creat kore rekheche shudu abong home2.blade.php teo
// -->ekti table e creat koreche without any formate css ect.trpr module16class2Controller a 2ti method
// -->declar koreche home.blade o home2.blade file er jonno abong route ai 2ti method er jonno 2ti Route
// -->creat koreche home(erjonno"4") abong home2(erjonno"5") trpr home.blade.php file a giye app.blade.php
// -->file k entends koreche foldername dot app boldiye@entends('masterlayout.app) abong trpr table er upore
// -->totha entends er niche table er upore section start koreche yeild er contents diye karon akhane tai 
// -->use korbo ja yeild a use koreche trpr close table er niche section k end koreche @endsection diye trpr
// -->brouser a giyeche 121.0.0.0:8000/4 diye abong enxtends kore dekheche j home.blade.php file a page er 
// -->sokol formate add hoyeche ja amra app.blade.php file a creat korechilam so avabe kaj kore amra ekti 
// -->master page k hundreds of page a add kore kaj korte parbo ete kore proti page a r html formate use 
// -->korte hobena

function home(){
    return view("home");
}
function home2(){
    return view("home2");
}





}
