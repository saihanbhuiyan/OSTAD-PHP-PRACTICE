<?php

namespace App\Http\Controllers;
// *****************Module 13.2 er sokol kichu e pdf a ache***********************

// ***hOW TO CREAT LARAVEL PROJECT IN FOLDER?
// Ans : Document theke aravel creat project commadte copy kore kono ekti folder a dhuke upore file
//---> name ba path er jaigai cmd likhe enter korle cmdte niyejabe then copy kora
//---> laravelCreatProject command ti cmd te past kore new project er jaigai just project name 
//---> bosiye amra laravel project creat korte pari

// ***HOW TO RUN PROJECT?
// Ans : php artisan serve (terminale ai command ti dile laravel amader ekti url dibe 121.0.0.1:8000
//---> arokom ja laraver project er home page link trpr amader url ba route name bosiye amader kaj 
//---> amra korbo)

// ***CLINT-SITE, SERVER-SITE
//** LARAVEL PROJECT A PUBLIC O RESOURCES BETITO baki sob SERVER-SITE, shudu matro public o
//----> resourse clint site hisebe kaj kore.
// *resources directory te jodi kono clint site file rakhi tahole ta build hoye public 
//--->directoryte jabe (that two are responsible for frond-end clint)


// ***REQUEST-RESPONSE MODEl
// front-end ba clint side theke amra ekti request pathabo abong server side theke processing 
//--->hoye akti response ba feedback asbe 

// ****REQUEST RESPONSE ROUTING & CONTROLLER
// front end theke kivabe request jai abong kothai kivabe process hoye response a ase tai dekhbo akhane 
//--->Route hocche url ja request sendkore 
//--->controller hocche function/class/code ja request k processing kore response dei
//---> controller request abong response er modde ekti breez hisebe kaj kore
// *controller ja return kore tai response
// EXAMPLE

abstract class Controller
{
    function demo1(){

        return "this is get";
    }
    function demo2(){

        return "this is post";
    }
    function demo3(){

        return "this is put";
    }

}
// akhane controller o request complete hoyeche ai method gulu theke j route ba url pathabe sei
//--> method return korbe ja prapto response
// *akhn request er jonno route toiri korte hobe web.php in route (er porer part web.php te likheche)

// ****MIDDLEWARE
// PICHONE AMRA DEKHECHE J csrf token ba protection off korar ag porjonto response korchilona abr
//---> off korar por korchilo tar mane akhane csrf controller er age kaj korchilo csrf pass kore 
//--->controller a atehoto SO akhane csrf token hocche middleware

// ***Use case of middle ware 
// 1)implement apni , user against restriction, csrf xsrf sceurity. APNI authentication
// 2)login incoming http request
// 3)sceruty perpus..


// *******JSON(javascript object nation):
// front-end json chine abong backend json chine FRONT-END O BACK-END COMMUNICATION JSON DIYE E HOI

// ****CONTROLLER THEKE JSON RETURN:
//CONTROLLER THEKE json a return korar jonno controller a function creat koer return a response() er por->errow diye json likhbo abong tar vitore associattive array dibo associative array e return korle json hoi 
// EXAMPLE

function demo4(){
    return response()->json([
        "name"=>"saihan",
        "age"=>22]);
}
// akhn er route creat korbo web.php te

// ****REQUEST & RESPONSE ER SIGMENT KI?/REQUEST ER VITOE KI KI THAKTE PARE?
// aNS 1: REQUEST PARAMITER:-> BA QUERY string postman a request creat kore sekhane params a giye key value dile dekhte pabo url a ta paramiter ba query string er moto add hobe like : demo4 theke demo4?bame=Ostad
// aNs 2: Authorised :-> ba authentication thakte pare, normally email password diye jevabe amra login kori atake bole normal authentication
//--->*bearer authentication *awt authentication //* NTLM

// ****RESPONSE
// -->RESPONSE ER BODY THAKE JA AMRA SCREEN A ADEKHTE PAI
// --->RESPONSE A ABR ONEKGULU MODE THAKE LIKE ->PREETR MODE ->RAW ->PREVIEW ->VISUALIZED

// ***GET USE KORBO NA POST USE KORBO???
// Post : j action gulute database er data poriborto hoi sekhane amra post mathod use korbo
// GET  : j action a database er data sadharonoto poriborton hoina sekhane amra get use kori

// **** Request thortling 
// --->kono user prti minite ba secound a kotobar request pathate parbe ba request button a
//---> hit korte parbe ta set koredewajai ja request throtting name porichito

// *COOKIE : 
//-->COOKIE Hocche user er browser a user ar personalization authentication songjukto data store
//--> er jonno cookie korar way
// --> cookie khubi incripted way te browser a store kore rakhe(personalization perpus a security perpus a)

// COOKIE KNO BEBOHAR KORI?
// ***1. session management er jonno
// ***2. authentication er jonno
// ***3. personalization er jonno
// ***4. traking er jonno 
  

//***** json web token ba jwt token ki??
//--->json web token ba jwt token hocche world wide most popular akti way for authentication authorization