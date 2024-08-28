<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;


class module19class1RESOURSEFULLcontrollerELOQUENTorm extends Controller
{
//Class1EloquentORM controller er po creat hoyeche ai resourcefull controller
//EKDOM NICHE MODULE 19CLASS1EloquentORM theke kichu pask kora ache abong akhane
//JAJA KORBO SOBI Module19CLASS1ELEQUENT ORM a details likhtesi with problem o solution
//jemon bun install talwind install process rund dev ect ect and eoors o solution
    /**
     * Display a listing of the resource.
     */
//TO SEE CURRENT ACTIVE ROUTE
    //php artisan route:list

//1.index() = index er maddome sokol data k return korbo return Task::all(); er maddome

//2.show() = show er modde task model er maddome id diye specific data niye anbo data-
//-->base theke show(Task $task) showMethode er vitore task model k connect korbo 
//-->abong return $task kore dibo (SHOW METHOD THEKE string $id bat diyedibo)


    public function index(Request $request){
//1.index() = index er maddome sokol data k return korbo return Task::all(); er maddome
//-->prothome ata koreche trpr nicherta     return Task::all();

//Route a ba urla a jokhn filtering korbo tokhn queryString ? diye kaj koebo
//-->like task?status=completed avabe korbo querystgring diye
//-->task/status=completed/ect/ect  avabena ata had habit
        $status = $request->get('status');
        if(!$status){
        $task =  Task::all();
//akhane amra check koreche jodi status na thake tahole sokol firld niye aso return koro
//-->urls ahobe /task
    }
    else if($status == 'completed'){
        $task = Task::where('status','completed')->get();
//akhane check koreche jodi status completed thake tahole shudu completed er sokol field
//--->niye aso URL HOBE /task?status=completed
    }else{
        $task = Task::where('status','pending')->get();
//akhane check koreche jodi status pending thake tahole shudu pending er sokol field
//--->niye aso URL HOBE /task?status=pending
    }
    //return $task;

//****************DO IT SHORTLY BY USING MODEL*******************
//amra jehetu MODEL niye kaj kortesi so er theke o sohoj way te amra uporer kaj ti korte pari
//--->totha ckeck korte pari
    //  $tasks = Task::when($request->status,function($query,$status){
    //     $query->where('status',$status);
    //  }->get();
    //return $tasks;
//akhane boleche jokhn request er vitore status thakbe o function 2ti peramiter delcar koreche
//-->ekti query korar jonno onnoti ststus k newar jonno THEN $query er modde where diye 
//-->status o tar value k catch kore get kore diyeche abong return korediyeche variabletike
//-->jar modde puro process ta rekheche
//------->akhn url a task ba task?status=completed ?status=pending jai deina kno se result 
//------->niye asbe shudu task dile sob field task?status=completed dile shudu completed er
//------->pending dile pending er gulu niye asbe
        // return view('task.index', compact('task')); 
        //-->/task thakle shudu all stask show korbe eta korte change hoyeche
        return view('task.index',['task'=>$task,'showToolbar'=>true]);

       

    }



    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        // return $task; theke
        // akhane task view er maddome ekti task ke show korbo tai
        //  return view koreche abong ['task'=>[$task]]; koreche 
        // karon akhane array akare data ti pass koreche jeno amra 
        // proyojon mafic data call kore number diye singe data niye 
        // aste pari
        return view('task.index', ['task'=>[$task],'showToolbar'=>false]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->All());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
//*****************AKHN AMRA LARAVEL ER VIEW CREAT KORBO******** */
     //A khetre amra telwind use korbo
     //telwind use korar sokol process https://tailwindcss.com/docs/guides/laravel akhane dewa
     //--->ase 
     //SEKHETRE AMADER VIT USE KORTE HOBE 
     //--->karon amra jani laravele jodi javascript bundle ba ect use korte chai tahole
     //-->vit use korte hobe ba bundle kore nite hobe
     //*********1.SEJONNO PROTHOME MASCHINE NODE JS INSTALL THAKTE HOBE
     //*********2.THEN MASCHINE bun ba npm inastall korenite hobe
     //*********3.SEJONNO COMMAD DITE HOBE *********npm install -g bun
     //*********4.npm theke bun fat kaj kore tai amra bun use korbo
     //*********5.THEN COMMAND DIBO bun install / npm install
     //*********6.bun install hole bun run dev / npm run dev korbo tar age  
     //*********7.telwind install kore nite telwind documentation theke sekhane 
     //--------->.sokol procedure ase link : https://tailwindcss.com/docs/guides/laravel
     
//AJONNO PROTHOME BUN INSTALL KORENITE HOBE    
    //**********npm install -g bun
    //**********npm install

//**************TELWIND INSTALLATION PROCESS BEFOR bun/npm run dev****************
    //*********1.commend in teminal ***npm install -D tailwindcss postcss autoprefixer 
    //--------->.(ULLEKKHO BUN USE KORLE **bun install -D tailwindcss postcss autoprefixer)
    //*********2.THEN npx tailwindcss init -p (ULLEKHO BUN USE KORLE **bunx init -p)
    //*********3.talwind.config.js er vitore content er jaigai talwind theke new content bosbe
    //--------->.ja project er left side er ekebare niche ase
    // content: [
    //     "./resources/**/*.blade.php",
    //     "./resources/**/*.js",
    //     "./resources/**/*.vue",
    //   ],
    //*********4.THEN project a RESOURCE er vitore CSS er vitore APP.CSS aer modde 
    //--------->.talwind documentation theke ana 4number instruction er code past korbo
    //--------->.akhane warning aste pare but dont worry
    //*********5.THEN project er modde RESOURCE er vitore VIEW er modde COMPONENT name ekti
    //--------->.folder o TAR MODDE EKTI LAYOUT.BLADE.PHP CREAT KORBO manually ba commad diye
    //--------->.COMMAD IN TEMINAL php artisan make:component layout tahole folder o blade 
    //--------->.file creat hoye jabe THEN tar vitore html:5 creat kore title er niche 
    //--------->.6NUMER TAWIND RULES THEKE SHUDU  @vite('resources/css/app.css') ATA ENE BOSABO
    //--------->.THEN VIEW ER MODDE r o ekti folder open korbo task name tar vitore ekti
    //--------->.BLADE NIBO index name COMMAND  php artisan make:task index
    //--------->.task er vitore INDEX.BLADE ER VITORE <x-layout> all task </x-layout>
    //--------->.ABONG laybout.blade er vitore body er modde niche {{$slot}} use koredibo
    //--------->.THOLE HELLOW WORD O NIBE SATHE route run korle
    //*********6.THEN module19RESOURSEFULL controller a index a return comment kore 
    //--------->.controller diye ROUTE CREAT KORECHE return view(task.index);
    //--------->.akhn jodi goole a likhi task tahole hello world o all task chole asbe
    //*********7.THEN COMMAND *********npm run dev (ULLEKHO BUN USE KORLE **bun run dev)
    //*********>.akhn jodi goole a likhi task tahole hello world o all task chole asbe

//******************JA JA ERROR KHEYECHE BUN BA NPM INSTALL KORTE O TALWIND INSTALL KORTE*****
    //1.npm intall -g bun (totha maschine npm ba bun install korinai tai cmdlet wrong path error asche)
    //2.node js install na kore koreche tai ERROR : script not found "dev" asche 
    //3.TAI NODE JS must lagbe o maschine must age bun ba npm install korenite hobe first
    //4.1st step : npm install -g bun
    //5.2nd step : npm install
    //6.3rd step : bun run dev (tar age talwind install)
    