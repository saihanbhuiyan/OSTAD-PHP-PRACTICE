<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//model aded in controller
use App\Models\task;
//ai controller er por creat hoyeche resourcefull controller
class Module19Class1EloquentORMControllerH extends Controller
{    //LARAVEL INSTALL KORE VS CODE INSTE HOLE PROJECT ER UPOR CURSOR REKHE right click
    //---->then open git bush here AND COMMAND   *****code .

     //ELOQUENT ORM FOR DATABASE QUERY IN LARAVEL(FUTURE A ATA NIYE E KAJ KORBO)
//READY PROJECT(JA JA KORECHE PROJECT READY KORTE)
    //1)SEJONNO PROTHOME EKTI PROJECT INSTALL KORENILAM
    //2)THEN .ENV  FILE A tasksx name ekti database O mysql korenilam
    //3)then run this database (PHP ARTISAN MIGRATE) phpmyadmin a ekti database creat hoye jabe
    //4)akhn amra tasks name ekti table creat korbo r amra jani migration a 
    //-->(php artisan make:migration create_tasks_table) use kore database a table toiri koram 

//-->***KINTU AMRA JEhETW MODEL NIYE KAJ KORBO TAI AGE AMRA MODEL TOIRI KORBO ABONG MODEL 
    //-->MODEL TOIRIR SOMOI  SATHE MIGRATION BA TABLE O CREAT KORENIBO
    //--->##table er name hobe always plural modeler name hobe always singular(tableName=tasks modelName=task)

//########CREAT MODEL : php artisan make:model task (location : app/Models/Task.php)
//###############Model toirir somoi kivabe migration/table toiri korajai########
    //migation ba table alada creat na kore amra eksatheo creat korle pari model toiri satha sathe
    //-->so ami task model ti delete kore model toirir sathe sathe migration table creat korbo akhn
    //##########1ekti model ekti database table er sathe kaj kore so amra model toiri somoi migration
    //--->table o creat kore felbo 

// ###################CREATE MODEL WITH MIGRATION TABLE################
    //---->php artisan make:model task --migration/-m(jekono ekta dile e hobe hoi --migration othobr -m)
    //--->SO app/models a task name ekti model creat hoyeche abong (database/migrations a tasks name 
    //---->ekti table creat hoye giye geche)

//TASK NAME MIGRATION table field bosiye ani(migration a task namok table a )
    //ja ja thakbe(id,title,description,due_date,created_at,updated_at)
    // $table->id();
    //         $table->string('title');
    //         $table->string('description')->nullable();
    //         $table->enum('status',['completed','pending'])->default('pending');
    //         $table->date('due_date')->nulleble();
    //         $table->timestamp('created_at')->useCurrent();
    //         $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
    //THEN RUN THIS TABLE : php artisan migrate

// ****controller creat kore model er basick kichu kaj dekhbo akhn********

    //1)amra controller creat kore niyeche Model19Class1EloquentORMController.php naeme
    //2) controller a model k use kore nibo LIKE (use App\Models\task;) ja akhane use kore niyeche
    //3)akhn ekti method/function creat korbo controller a jar modde model k use kore quey korbo

    function index(){
        //web.php te Route/url kore Nibo ai method/function tike Route::get('/task', [Molude19Class1EloquentORMControllerH::class, 'doSomthing']);
       
    //table a jodi record entri korte chai tahole ba data insert korte chai tahole
        task::create([
            'title'=>'sample task',
            'description'=>'this is a sample task description',
            'status'=>'pending',
            'due_date'=>'2022-12-31'
             //akhane task hocche table jar modde amra data insert kortesi
        ]);
        //return "done";

        //******AKHN JODI RUN KORI TAHOLE EKTI ERROS ASBE :
        //--->Add [title] to fillable property to allow mass assignment on [App\Models\task].
        //--->jar mane tmi j title field ta insert korteso ata modele boledainai j tmi insert korteso
        //-->***KARON : jotokkhn na amra modele boledibo totokkhn amra data insert korte parbo na 
        //---> normally field serch kora ect ect kora jabe but notun data insert ba data entry korte parbona
        //***SO : MODELE BOLEDITE HOBE (protected $fillable = ['title','description','status','due_date'];)
        //-->abong tar modde ki ki data entry korbo taw boledite hobe

        //MODELE boledisi(ja modele ase) SO : akhn jodi run kori tahole done show korbe mane data entry hoyegese
        //***OUTPUT : done(akhn check kori task table a)
        //---->table task a data entry hoyeche : 
        //1
        // sample task
        // this is a sample task description
        // pending
        // 2022-12-31
        // 2024-07-16 02:06:08
        // 2024-07-16 02:06:08
        // akhn jotobar refreah korbo tototi data entry hobe task field a 

//**********************JA KORECHE : sarnormo******************************************
      //-->AMRA MODEL+TABLE CREAT KORECHE THEN CONTROLLER A MODEL K USE KORE EKTI model just task::creat[]er 
      //-->vitore arrau akare information gulu diyeche r modele protected $fillable =(bole er modde column name gulu 
      //-->diye disi j column gulute amra data diyeche controller a method er vitore creat a);

    }

//FAKE() LIBRERY FUNCTION FOR FACK DATA
    function fake(){
    //phpte FAKE name ekti libreri function ase jar ,maaddome amra table field gulute fack information dite
        //-->pari jotobar refresh korbo totobar different different fack information add hobe table a
        
        task::create([
        //****akhane amra fake()->erpor ki cacche ta boledite hobe(like sentence date ect ect)
        //**** er modde amra length o boledite pari kototi character cacchelik 10,20,ect
            'title'=>fake()->sentence(5),
            'description'=>fake()->sentence(20),
            'due_date'=>now()->addDays(rand(1,7))
            //due_date direct(7) na diye jodi ek theke 7er modde jekono ekti use korte chai tahole
            //--->addDays(er vitore rand(1,7) rand use kore koto theke koto diner modde dekhte cahile ta bole dile)
            //--->protibar different different day asbe due_date
            //##database a protibar different different date asche(checked)

        ]);
        // return "done";

//DATA SEEDER : php artisan db:seed
        //migration jemon table toiri hoi SEEDER diye amra oi table a dami data entry korerakhte pari
        //-->porobortite ese jodi amra (php artisan db:seed) (ai command ti dei tahole oi record gulu database a dhuke jabe)

    //CREATE SEEDER : php artisan make:seeder taskSeeder
        //controller a amader index mathod k ba modeler create method k use kore ekti seeder create korbo
        //TO CREATE SEEDER : php artisan make:seeder taskSeeder (location : database/seeders/taskSeeder.php)

//TASKSEEDER A AMRA KI KORBO?
        //1)use app\Models\task; TASK SEEDER A AMRA PROTHOMOTO task namok model k add korbo,
        //2)trpr controller a ja creat ba jai korbo ta taskSeeder a run er vitore bosiye dibo
        //--->(jemon amra akhane creat koreche so task::create([])) areata bosiye diyeche
        //3)then ai taskSeeder k databaseSeeder.php te call korte hobe must
        // ---> $this->call(taskSeeder::class);

//DATABASESEEDER.PHP TE KI KORBO?
        //1)use app\Models\task; DATABASESEEDER A AMRA PROTHOMOTO tasksEEDER namok moder K USE KORBO
        //2)THEN run() void namok methode taskSeeder k call koredibo...$this->call(taskSeeder::class);
        //THEN php artisan db:seed kore run korbo 


//php artisan db:seed 
        //akhn jodi php artisan db:seed kori tahole database a 10ti data entry hobe j 10ti data
        //-->amader amra taskSeeder.php te loop er modde diyeche 

       //####akhane amra task table er sokol data drop kore then abr terminal php artisan
       //----> db:seed command diyeche abong database a 10ti data entry hoye gese 

//TASK::TRUNCATE() FOR EMPTY DATABASE AND ENTRY ONLY 10DATA in ( taskseeder)
       //*** AMRA JOTOBAR php artisan db:seed commant ti dibo terminale totobar e 10ti kore
       //----> data add hobe kintu amra cacche amader database a only 10 ti data/Row e thakbe
       //----> tahole amra taskSeeder a run() voide{} methoder vitor task:create er age use korbo 
       //---->task::truncate() tahole amra jotobar e db:seed korina kno protibar database 
       //---->aEMPTY hoye only 10ta data e entry hobe
       //###akhn jotobar e seed korina kno protibar database empty kore 10ti data entry hobe database a


    }

//**************task::all() FOR SHOW ALL DATA IN DATABASE*************
      
       function gatAllDataFromDatabase(){
         //akhn jodi database er sokol data dekhate chai tahole ekti methode just task::all()
         //-->use korle e sokol data chole asbe(DBqueryBuilder a ja DB::table('task')->get(); 
         //-->use kore kortehoto)
    return task::all();
        //OUTPUT: 10ta row e chole asche
    }

//***********task::limit(2)->get(); FOR SHOW FIRST 2 DATA FROM DATABASE************
      function getFirst2DataFromDatabase(){
        //DBqueryBuilder a ja DB::table('task')limit(2)->get(); chilo
        return task::limit(2)->get();
        //OUTPUT: 2ta row e chole asche
      }

//task::where('status','completed')->get(); SOKOL COMPLETED STATUS ROW GULU K NIYE ASBE
       function getCompletedDataFromDatabase(){
        //where use kore j sokol field er status completed tader k shudu niye asbe
        return task::where('status','completed')->get();
        //OUTPUT: 2ta cpmpleted status chilo 2ta row e chole asche
       }

//magicMethod whereStatus('completed') 
       //totha where er sathe colum name diye serch korleo ase jemonta amra DBqueryte dekheche
        
        function whereStatusMagicMethod(){
            return task::whereStatus('pending')->get();
            //OUTPUT: pending er sokol data chole asche
        }

//count()  FOR COUNT HOWMANY ROW HAVE THERE 
        function count(){
              return task::whereStatus('pending')->count();
              //OUTPUT: 8
        }

//find(idNumber) FOR FIND DATA FROM DATABASE by primary key(id)
        function findDataFromDatabase(){
            // find use kore amra just id diye e serch korte pari only 
            return task::find(9);
            //OUTPUT: 1ta row e chole asche 9number id er row
        }

//findOrFail(idNumber) DATA THAKLE DEKHABE NA THAILE DATA:NOTFOUND DEKHABE
        function findOrFailDataFromDatabase(){
            //return task::findOrFail(5);
            //OUTPUT: 5number id er row chole asche 

        //akhn jodi id 50 koredei
            return task::findOrFail(50);
            //OUTPUT: 404:NOTFOUND DEKHABE
        }


//orderBy() 1)assending(use kortehoina 1-10 a-z) 2)desending(desc)use korte hoi 10-1 z-a
         function orderBy(){
            //assending
            // return task::orderBy('id')->get();
            //OUTPUT: 1-10ta row e chole asche

            //return task::orderBy('id','desc')->get();
            //OUTPUT: 10-1ta row e chole asche
         }

//------------>SELECT CRITO ROW THEKE SPECIFIC COLUMN BATDITE CHAILE<-----------        
//table row ba data gululur modde jodi specific kono colum dekhte na chai tahole ki korbo?

      // ***tahole task namok modeler vitore giye $hidden namok special attribute er vitore 
      //---->array akare bole dibo j j colum gulu k dekhte chaina oi column gulur name
      //--->jemonta insert korao jonno $fillable special attribute use korechilam
     //OUTPUT :  {
     //     "id": 10,
     //     "title": "Nobis quod minima corrupti vel voluptate tempore.",
     //     "description": "Facilis unde eius ex est velit qui modi est consectetur dicta consequatur eveniet eos voluptatem numquam vero aut ea et perferendis dolorem.",
     //     "status": "pending",
     //     "due_date": "2024-07-21"
     //   }, AVABE SOKOL ROW THEKE CREATED_AT UPDATED_AT COLUMN CHOLEGESE


//------------>UPDATE KORTE CHAILE K<----------------
    //****Pothome oi row tike select korbo dind ba select ba where we maddome
    //-->then ->update[er vitore associative array akare update crito datagulu likhbo]
    //jemon  task::find(6)->update(['status'=>'completed']);

   

        function updateData(){
           task::find(6)->update(['status'=>'completed']);
           //return 'done';
            //output: done(update hoyegese)
        }

//**********MULTIPLE DATA/ ROW INSERT BY MULDITIPLE ASSOCIATIVE ARRAY ********/
    //1.MULTIPLE data insert korte chaile methoder/functioner name dite hobe INSERT
    //--->creat name function diye korle error dibe (Call to undefined method App\Models\task::creat())
    //2.AKHETRE juse array er vitore array hobe coma diye avabe joto item icche 
    //--->insert korte parbo
    
    function multipledatainsert(){
        task::insert([[
           'title'=>'new task',
           'description'=>'new description',
           'status'=>'pending',
           'due_date'=>'2024-07-21'
        ],
        [
            'title'=>'new task',
            'description'=>'new description',
            'status'=>'completed',
            'due_date'=>'2024-07-21'
        ]
    ]);
    //return 'done';
    }

//**********ROUTE/URL A ID DIYE DATA BASE THEKE OI ROW TAKE NIYE ESE DEKHABE********** */
    //1.AJONNO function er vitore Request class o tar object nite hobe abong
    //---->ID diye khujte chaile id dibo ba onno kono column name diye khujte 
    //--->chaile ta dibo akhane id diye kaj kortesi
    //2.THEN return kore task::theke find kore dibo find($id)
    //3.sing ber korte hole show use korte hobe
    function show(Request $request,$id){
        return task::find($id);
    }


//*********LARAVEL ROUTE MODEL BINDING******** */
//UPORE ahow function a amra id use kore data eneche ja laravel k diye verifye koriye ante
//-->pari tokhn laravel bujhe nibe j ami kon modeler id ta cacche 
//--->akhane route/url a task/idNumber dile se oi table er data k khuje ene show korbe
    //AJONNO id er poriborte Task $task use korbo

    function showtask(Request $request, Task $task){
        return $task;
    //1.**AKHANE task hocche model name ja route er sathe connect hoyeche
    //-->akhn jodi route/url a idNumber dewahoi url task/3 er por tahole
    //-->model databse table theke find kore oi id ba number er information
    //-->gulu niye asbe karon se jane kon table theke id niye aste hobe  
    //2.ABONG task k route a bosiye diyeche id er poriborte akhn bakita 
    //-->model e korbe find & show
    }

//********RESOURSEFULL CONTROLLER CREAT*************
    //RESOURSEFULL CONTROLLER mane amn ekti controller jar modde sokol resourse thakbe
    //************RESOURSE MANE?****************
    //RESOURSE mane index,show,create,store,edit,update,destroy sokol functions thakbe
    //--->just ai function er vitore kaj korte hobe
     
//HOW TO CREAT RESOURSEFULL CONTROLLER?
    //PHP ARTISAN MAKE:CONTROLLER NameOfController -r

//AKHN EKTI RESOURSEFULL CONTROLLER CREAT KORBO 
    //php artisan make:controller module19class1RESOURSEFULLcontrollerELOQUENTorm -r  AI NAEM

//TO SEE CURRENT ACTIVE ROUTE
    //php artisan route:list
    //tahole akhn joto route active ba use hoyeche sokol route name chole asbe
    //abong akhane url ki hobe ta o bole dibe 
    

//***********resource controller a jaja koreche */
//1.index a sokol data eneche
//2.show er maddome specific data show koreche id diye queryString diye
//3.index a condition diye status k check kore data show koreche ba niye asche 
//--->!$status diye $status==completed diye $status==pending diye 
//4.then ai puro kaj take ekti single 2line er code er maddome koreche model use kore

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
    //7.package.json A 
         // "scripts": {
         //     "dev": "vite",
         //     "build": "vite build"
         // },
         //ata add hoini tai hasin vai er project theke eta ene amr project er 
         //packge.jon file er 4number line bosiyeche trpr SCRIPT NOT FUND ERROR CHOLE GESE
         //JODI amn error ase next tahole ai script bosate hobe
    //**** MOST IMPORTANT VHUL direct project folder na open kore puro folder open koreche
    //***> tai sokol install kora bun npm talwind sokol kichu modiul19.1 a chole gese 
    //***> project a na giye tai marata beshe khaisi r tai boltesilo path thik nai FUCK


//********AKHN TASK ER SOKOL DATA TASK ROUTE TOTHA VIEW ER MODDE NIYE ASBO LOOP CHALIYE*****
    //**index er modde j task namok view ta creat koreche tar modde data base theke 
    //-->sokol data niye asbo foreach loop chaliye
    //SEJONNO
    //--->index.blade.php te ekri foreach loop use korbo tar modde $task namok variable theke
    //--->as diye tasks namok variable a dibo 
    //--->ABONG {{$tasks->er maddome title dute date o statur }}er value gulu niye asbo
    //---> database theke
    //***ai task ti hocche model name ja tasks namok table theke data gulu niye ese bosabe
    //-->akhane just boledite hobe ki data ti cacche tasks table er column name dile e chole
    //-->asbe
//OUTPUT : sokol data chole asche title description due_date o status comun er


//************DUE_DATE K HUMAN REA KORAR MOTO KORBO***********
    //AJONNO
    //--->due dae er jaigai curly breket er jaigao likbo
    //--->{{\carbon\carbon::parse($tasks->due_date)->diffForHumans()}} ja laravel er build in function
    //--->akhane diffForHumans ekti method ja due date k human readable kore
    //--->TARPOR atake order by kore o ana jai se jonno index er modde j shor 2liner code
    //--->model k use kore tar modde use korbo ->orderBy('due_date')->get();

//**********INDEX.BLADE.PHP theke title description due_date o status agulu view er vitore
//--->components er modde task name ekti blade file open kore
//-->(php artisan make:component task --view) tar modde past kore 
//-->INDEX.BLADE.PHP te @foreach @endforeach er vitore task k <x-task :tasks="$tasks"/>
//-->likhe use kore diyeche ete task-Route/url view er code ta short & sweet hoyeche
//<x-task :tasks="$tasks"/>(akhane task hocche blade name tasks hocche Variable ba paramiter
//--->ja Foreach theke niyeche abong jar maddome database theke value ba data eneche)
//-->ata task.blade.php er $tasks variable gulur sathe connect kortese ba kaj kortese

//<x-task :tasks="$tasks"/>ATAKE SHORT KORE <x-task :$tasks/> likhleo kaj korbe
//-->akhane $task 2tar e kaj kortese peramiter o variable

//***********er por display anar jonno kichu talwind css aplly koreche  *****************/
//***********ABONG tar nitha TOTAL TASK NIYE ASCHE totoal task {{count($task)}}***********
//--->tasks tabile jotogulu task ba row ase ta count koreche just**************
//***akhn jodi amra url a likhi /task?status=completed tahole completed status row gulu asbe
//--->abong total task show korbe ba count korbe completed status er jonno
//OUTPUT : total task 5

//STATUS ER JONNO EKTI OPTIONAL BAR CREAT KORECHE JA URL ER SATHE CONDITION DIYE CONNECT
//KORECHE URL A TASK?STATUS=COMPLETED DILE AKHANE COMPLETED SELECT HOYEJABE
    //-->AJONNO
    //1.-->component a ekti task-status.blade create koreche(make:component task-status --view)
    //---->ja shudu view er jonno create koreche
    //2.TARPOR tar vitore div niye <select> er vitore option niye all completed pending
    //-->creat koreche with css style
    //--->tar por atake index.blade.php er modde use koreche <x-task-status/>

//CONNECT WITH URL A TASK?STATUS=COMPLETED DILE AKHANE COMPLETED SELECT HOYEJABE
    //AJONNNO
    //1.-->INDEX.BLADE a j x-task-status diyeche tar modde likhbo 
    //--><x-task-status:status="{{request()->get('status')}}"/>
    //2.TASK.BLADE protita optione condition diye bolte hobe jodi all pai tahole select koro
    //-->jodi completes pai ?status=completed tahole completed select koro
    //-->@if ($status=='all/completed/pending') selected @endif avabe protita optione
    
//AKHN AMADER KAJ HOCCHE BAR A ALL/COMPLETE/PENDING SELECT KORLE JENO URL TAW CHANGE HOYEJAI
//LIKE completed select korle jeno url a task?status=completed chole ase
    //-->AJONNO
    //1.-->TASK.BLADE a <select er vitore dibo onChange='filterStatus()'>
    //2.-->THEN <select> er niche condition diye javascript kichu code likhte hobe
    //3.-->Sejonno ekti <script>nibo tar moddefunction filterStatus(){ nibo JA ONCHANGE A 
    //4.-->NIYECHE tar vitore likhbo LET STATUS = DOCUMENT.GETELEMENTBYID('status').VALUE; status bare 
    //--> jeta select hobe setar value k get korbe
    //5.-->THEN EKTI KONDITION APPLY KORBO if($tastus=='all)hoi tahole{location.href="/task"}koro
    //-->else{onnothao location.href="/task?status"+status} totha /task?status er por ja asbe
    //--->setake add kore nibe pending hole pending completed hole completed

//index.BLADE.php te <!-- <x-task :tasks="$tasks"/>  ATAKE SHORT KORE LIKHA JAI <x-task :$tasks/>

//TASK/1 TOTHA ROUTE A SING DATA ANAR JONNO module19classResoursefullController a show te
// ekti chotto change ante hobe
      //AJONNO
       // return $task; theke
        // akhane task view er maddome ekti task ke show korbo tai
        //  return view koreche abong ['task'=>[$task]]; koreche 
        // karon akhane array akare data ti pass koreche jeno amra 
        // proyojon mafic data call kore number diye singe data niye 
        // aste pari
        // return view('task.index', ['task'=>[$task]]);

//******TASK VIEW ER MODDE STATUS K EKTI BUTTON DIYE UPDATE KORBO*****
    //PENDING THAKLE buttone asbe MARK AS COMPLETED abong eke click korle STATUS UPDATE HOYE
    //-->completed hoyejabe
    //SO akhane ekti button nibo j buttone click korle pending theke completed hobe ABONG
    //--->completed theke pending hobe
    //****SEJONNO
    //1.-->TASK.BLADE.PHP te ekti div nibo ABONG tar vitore akti form nibo
    //-->jar modde action hobe "route('task.update',$tasks)" karon amra $tasks peramiter 
    //-->use koreche ABONG METHOD HOBE POST
    //2.-->KINTU php artisan route:list jodi dekhe tahole task.update router method put/patch
    //-->dekhabe tai er por @method('PATCH') BOLEDITE HOBE
    //3.-->THEN @csrf token use koreche
    //4.-->THEN ekti input niyeche jar type hidden abong name='status' jar VALUE TE 
    //-->bolediyeche j {{$tasks->status == 'completed' ? 'pending' : 'completed'}}
    //-->ORTHAT $tasks er modde j status ase eta jodi completed hoi tahole completed
    //--> theke pending hobe
    //5.-->THEN ejti butoon niyeche jar modde bole diyeche 
    //-->Mark As {{ $tasks->status == 'completed' ? 'Pending' : 'Completed' }}
    //mark as $tasks er modde j status ase eta jodi completed hoi tahole pending hobe
    //-->buttone click korle
    //6.-->ABONG module19ResoursefullController a bolediyeche 
    // $task->update($request->All()); akhane $task ti hocche peramiter update er 
    //     return redirect()->back();
    //-->$task er modde $request->all(); ase take update koro
    //-->ABONG update kore redirect()->back() koro totha purber page a fire aso j page a 
    //-->chila oi page a fire aso
    //AKHANE ONEK CSS ASE TALWIND ER dekhe naw


//***********TASK.BLADE ER MODDE TASK TITLE ER PASE ID DEKHABO*********
    //SEJONNO
    //TASK.BLADE.PHP TE title er pase {{$tasks->id}} bole dile e id chole asbe
    //---> {{$tasks->id}} : {{ $tasks->title }}

//*******JOKHN ROUTE A /task thakbe TOKHN E SHUDU All task SHOW KORBE****
    //SEJONNO
    //module19ResoursefullController a j view ta creat koreche tar modde COMPACT
    //-->ER PORIBORTE likhbo ['TASK'=>$TASK, 'showToolbar'=>true]
    //-->return view('task.index',['task'=>$task,'showToolbar'=>true]);
    //AKHN showToolbar diye check korbo INDEX.BLADE.PHP TE 
    //-->CONDITION DIYE jekhane request()->get('status ase ) o cound ase taske 
    //-->@if condition er vitore rekhe 
    //@if($showToolbar)
    //      <p>
    //      totol task {{count($task)}}
    //  </p>
    //   <x-task-status : status="{{request()->get('status')}}"/>
    //  </div>
    // @endif   
    //-->jodi $showToolbar thake tahole e shudu request()->get('status') korbe 
    //-->o dekhabe
    //KINTU route a /task/1 dile error astese j (ERROR:Undefined variable $showToolbar)
    //-->KARON showToolbar variable ti amra pass korini ja khn korbo
    //-->AJONNO module19resoursefullCOntroller a show er modde giye j RETURN VIEW(TASK.INDEX ASE)
    //-->SEKHANE ['task'=>[$task]]) ER MODDE $task er por coma diye 'showToolbar'=>false kore 
    //-->dibo return view('task.index', ['task'=>[$task],'showToolbar'=>false]);
    //AKHN SINGLE DATA O SHOW HOBE BA ASBE

//AKHN SINGLE DATA ANAR KHTRE AKHANE BAR BA KONO OPTION THAKENA JEKHANE AMRA EKTI
//HOME BA ALL TASK NIYE ASTE PARI JATE CLICK KORE AMRA ALL TASK A CHOLE JETE PARI
    //SEJONNO
    //-->#IF ER VITORE AMRA EKTI @else use korbo jar modde anchor diye all task.index k 
    //-->link koriye dibo
    // @else
    // <a href="{{route('task.index')}}"
    //             class="my-5 inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2">
    //             All task
    // </a>

//**AKHN JODI AMRA LINK KORIYE DITE CHAI TOTHA MANUALLY JENO AMRA SEKHANE JETE PARI**** */
    //-->link koriye dibo bolte jekono item a click korle jeno se item er single 
    //-->route a chole jete pari link /TASK/9 AROKOM 
    //SEJONNO
    //-->task.blade.php te title er area take totha <h3> area take ekti anchor<a> er modee
    //-->rakhbo jar modde href diye task.show k link kore dibo abong $tasks peramiter 
    //-->pass kore dibo
    // <a href="{{ route('task.show', $tasks) }}">
    //                 <h3 class="text-lg font-medium" data-id="11">
    //                   {{$tasks->id}} : {{ $tasks->title }}
    //                 </h3>
    //</a>
    //akhane task.show dhara task view er sathe modle19resoursefull er show method er 
    //-->sathe connect koreche




//SOKOL KAJ SES HOYE GELE npm run build KORE DILE SOKOL KAJ SES TOKHN R NPM RUN DEV KORTE HOBENA
//-->TOKHN CSS BUILD KORE LINK KOREDIBE TAR AG PORJONTO NPM RUN DEV KORE KAJ KORTE HOBE

//NPM/BUN INSTALL KORTE HOBE PROTHOBE THEN NPM/BUN RUN DEV KORTE HOBE TALWIND INSTALL KORE
}
