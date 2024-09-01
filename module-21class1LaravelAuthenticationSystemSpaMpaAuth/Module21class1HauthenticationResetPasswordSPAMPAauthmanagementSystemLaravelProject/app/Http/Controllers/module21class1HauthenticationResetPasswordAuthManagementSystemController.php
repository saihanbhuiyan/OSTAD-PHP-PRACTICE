<?php

namespace App\Http\Controllers;
// use Illuminate\Container\Attributes\Auth;
use Auth;

use Illuminate\Http\Request;
//AI PROJECT TI RUN KORAR JONNO : 1.npm run dev 2.php artisan serve kore nite
class module21class1HauthenticationResetPasswordAuthManagementSystemController extends Controller
{
    //what is authentication and authorisetion?
   //authentication mane e hocche kivabe amra user der login korabo
//****authorisetion make? authorisetion mane hocche user login er por ekti kaj korte parbekina
   //EXAMPLE : ekti office a card show kore dhukte parleo jekono jaigai jawajaina na 
   //-->permisstion chara jawajaina ai beparti e hocche authorisetion

//laravel documentation a security er under a Authentication name ekti puro dedicated
// documentation ache amra sekhane giye jekono ekti sterterkits install kore surukora
//(ja authentication korar sobtheke eusyest way JA AUTHENTICATION QUICKSTART ER MODDE PABO)
//laravel er sathe Breez ase jetstrem ase agulur thkeke jekono ekta diye surukora TAHOLE 
//LARAVEL AUTHENTICATION ER JONNO J UI TA DORKAR SETA AMI PEYE JABO
//KENO AMRA STARTKIT DIYE SURU KORBO?
// KARON : ekti autentication er sathe jaja involve loginForm registrationForm forgetPassordForm passwordReminderForm Default dashboard Default Profile page a sobkichu starterkit er sathe involve
//sobtheke sohoj startkit hocche breez er alpine AMRA BREEZ DIYE SURU KORBO

//************creat authentication********* */
//AJONNO
        //PROTHOME EKTI DEFAULT MIGRATE KORENILAM PHP ARTISAN MIGRATE

//INSTALL BREEZ 
        //1.Security er vitore authentication er vitor authentication quickshort er modde install 
        // starter kit a clik korle ekti page asbe jar modde sobar upore ekti link pabo INSTALL
        //  A LARAVEL AUTHENTICATION STARTER KIT ai link a click korle STARTER KITS NAMOK EKTI 
        //  PAGEBA VIEW PABO akhane sobar upore dekhtepabo BREEZE AND BLADE ATATE CLICK KORLE r
        //   ekti page a niye jabe sekhane upnpmore giye dekhbo COMPOSER REQUIRED 
        //LARAVEL/BREEZE --DEV(ja installation er niche thakbe) ai packe ti amader project a addkorenibo
        //(akhane --dev mane hocche shudu matro development invirment a ai packegti use hobe)
        //ata terminal a diyeche complete hole 
        //2. TAR NICHE : composer require laravel/breeze --dev er niche 
        // php artisan breeze:install AI COMMAND TI DIBO ja dile amader ask korbe 
        //--> Which Breeze stack would you like to install? BLADE WITH ALPINE DIBO (shudu blade type korlei hobe)
        //-->THEN AK KORBE :Would you like dark mode support? (no)
        //-->THEN ASK KORBE : Which testing framework do you prefer? PHPUnit
        //3.tar porer command dibo :php artisan migrate (nothing to migrate asbe)
        //4.THEN : npm install
        //5. THEN : npm run dev
        //AI 5TI COMANDS DILE AMADER BREEZ INSTALL HOYEJABE 
              //1. composer require laravel/breeze --dev
              //2. php artisan breeze:install
              //3. php artisan migrate
              //4. npm install
              //5. npm run dev
        //npm korle live reload hoi orthat kaj korar sathe sathe load hoi refresh korte hoina

//akhn jodi amra php artisan serve kore http://127.0.0.1:8000 akhane jai tahole dekhtepabo
       //laravel home page a LOGIN REGISTER chole asche 
       //akhn jodi amra register a jai taholoe dekhbo ekti register form choleasbe
       //-->form fillup kore register buttone click korle amader niyejabe DASHBOARD page a 
       //-->sekhane dekhte pabo right corner a profile logout ache amra profile gele dekhte pabo 
       //-->amader profile information o dekhabe

//AUTH FOLDER in app->http->controllers
     //akhn jodi amra folder a jai tahole dekhbo APP(ER VITORE)->Http(ER VITORE)->Controllers(ER VITORE)
     //->Auth mane notun ekti folder chole asche
     //SEKHANE AUTHENTICATION ER SOKOL CONTROLLER GULU CHOLE ASCHE (ja age chilona)
//DASHBOARD IN ROUTE 
     //route web.php te dekhte pabo dashboard name ekti route chole asche Abong kichu profile name 
     //-->Route creat hoyeache 

//AUTH+COMPONENTS+LAYOUT+PROFILE VIEW/BALDE IN VIEW
     //RESOURCES er modde VIEW er vitore dekhtepabo AUTH,COMPONENTS,LAYOUT,PROFILE name folder asche 
     //-->jar modde sokol view ba blade.php file gulu chole asche
     //**AUTH(confirmPassword,forgotPassword,login,register,resetPassword,verifyEmail)
     //**COMPONENTS(application,auth-session-status,danger-button,dropdown-link,input-error,input-label
     //-->,modal,nav-lik,primary-button,responsive-nav-link,secoundary-button,text-input).blade.php file
     //--> gulu ache
     //**LAYOUT(app,guest,navigation).blade.php file gulu ache
     //**PROFILE(EDIT(FOLDER ABR ASE==(delete-user-form,update-password-form,
     //-->update-profile-information-form)),dashboard,welcome).blade.php file gulu ache

//AUTH FOLDER IN ROUTE & DASHBOURD ROUTE IN WEB.PHP
     //ROUTE folder er vitor AUTH mane ektu route folder asche jar modde authentication related
     //--> sokol Route dewa ache
     //AUTH in route(register,login,forgetPassword,resetPassword,verifyEmail,
     //-->email/verification-notification,password,confirm-password,logout) asche
     //WEB.PHP(dashbourd,profile) asche

//MODEL FOLDER IN APP->HTTP->MODELS
     //MODEL FOLDER er vitore ektu model file asche==== User

//CONFIG FOLDER ER VITOR
       //(APP,AUTH,CACHE,DATABASE,FILESYSTEM,LOGGING,MAIL,QUWUW,SERVICES,SESSION).PHP file gulu asche


//PROJECT ER DATABASE TI ASCHE DATABASE ER VITORE database.sqlite name JAR MODDE USER O SOKOL TABLE ACHE
//*******AI DATABASE.SQLITE K DATABASE A IMPORT KORBO KMN KORE********* */beekeperuse korbo
     //1.AJONNO prothome migrate korenite hobe php artisan migrate 
     //2.THEN npm run dev kore php artisan serve jorte hobe
     //3.TRPR database a giye database.sqlite a click kore mouse er right click kore 
     //-->(reveal in file Exploral)A click korle amader database.sqlite er location a niyejabe 
     //-->SEKHAN THEKIE mouse er right click kore open with a click korle BEEKEEPER SQLITE show 
     //-->korbe etate click korle data baseti BEEKEPER A table soho dekhte pabo
//AKHN JODI AMRA user DEKHE TAHOLE DEKHTE PABO SEKHANE EKTI USER ASE JETA AMI RECENTLY
// REGISTRATION KORECHE SETA

//********KOYEKTA USER TOIRI KORBO dami user seed kore********* */
     //SEJONNO
     //1.DATABSE ER VHITORE seeders namok j folder ache setate jabo giye DatabaseSeeder.php te jabo
     //2.giye dekhbo  public function run(): void A //User::factory(10)->create(); comment akare ache
     //-->ja uncomment korbo
     //3.abong er niche j user::factory()->creat(){['name'=>'test user','email'=>'test@example.com']}
     //-->ache atake comment koredibo
     //4.AKHON JODI php artisan db:seed KORI TAHOLE DEKHBO J USER TABLE A 10TI DATA CREAT HOYECHE
     //-->KARON  User::factory(10)->create(); AKHANE 10TI DATA CREAT KORTE BOLECHE JA LARAVEL
     //-->AUTO DIYEREKHE AMRA JUST UNCOMMENT KORECHE R DEFAULT PASSWORD JENO PASSWORD NA HOI 
     //--.TAI USER::FACTORY()->CREATE()COMMENT KORE DIYECHE 
     
     //DATABSE ER VHITOR factories NAMOK J FOLDER ASCHE JODI TAR VHITOR JAI TAHOLE DEKHTE PABO     
    //-->SOBGULU USER ER DEFAULT PASSWORD HOCCHE password == 'password' => static::$password ??= Hash::make('password'),


//*******authentication DIYE EKTI route K KIVABE PROJECT KORAJAI******* */
    //****AMN EKTI rOUTE AMRA TOIRI KORBO J rOUTE TA LOGIN NA KORLE ACCESS KORAJABENA****
    //SETARJONO
    //1.ekti CONTROLLER toiri kori...=>module21class1HauthenticationResetPasswordAuthManagementSystemController.php
    //-->Hasin vayer appController amr module19Class1authentication ata
    //2.TRPR akahne 2ti function declar korbo publicMessage() O secretMessage() name
    //-->akhane pucblick message ta login na thakleo DEKHTEPABO BUT secretMessage shudu login
    //-->thaklei dekhte pabe
    function publicMessage(Request $request){
         return response('this is public message',200);
    }
    function secretMessage(Request $request){
     // if(!Auth::check()){
     // //     return response("You are not logged in",401);
     //   abort(403,"PLEASE LOGIN FIRST");
     // }
     
       return response("this is secret message only for logged in user",200);
          
     
    }
    //3.ERPOR web.php te giye 2ta Route creat korbo ai 2ta method er jonno
    //-->route creat kore dekhte pelam j recret route ti login obosthateo kaj korche LOGOUT
    //--> obosthateo kaj korche 
//*****KINTU amra atake protect korbo avabe j login chara ata kaj korbena but public kaj korbe******
    //SO secret route k protecter korar jonno 2-3ta way ase 
 //1.**KOTHIN WAY to protect secret route :
    //-->SEJONNO : module21.class1hController a giye PUBLIC o SECRET methode 2ti Request Object nibio
    //auth : LARAVELE authentication jabotio kaj korar jonno ekti FESURD ase JAR NAME HOCCHE auth
    //-->AKHN secretMessage() methode amra condition diye auth FESURD use kore check kortepari j user
    //-->login ase  naki nei jodi na thake tahole return kore dibe you are not logged in
    //-->CHECK CONDITION TI HOCCHE 2VABE KORAJAI:
         //1.if(!auth()->check()){
         //    return response("this is secret message only for logged in user",401);}
         //ababee korajai ABR 
         //2.if(!Auth::check()){
         //    return response("this is secret message only for logged in user",401);}
         //ABABEO KORAJAI
   //-->AKHN JODI AMRA logout OBSTHATE secret ROUTE K bROWSER A REFREASH KORI BA HIT KORI
   //-->TAHOLE BOLBE =====you are not logged in
   //abort(401); : RETURN MESSAGE K JODI R O VALOVABE DEKHATE CHAI TAHOLE AMRA 
   //-->laravel er abort() method use korte pari LIKE abort(403,'Please login first');
   //-->tahole displayte 403 : PLEASE LOGIN FIRST  MESSAGE TI SHOW KORBE(KORECHE LARAVEL JEVABE ERROR MSG DEI OIROKOM)

//SOHOJ WAY TO PROTECT SECRET ROUTE :
    //authentication check korar jonno ekti chomotkar middleware ase JAR NAME HOCCHE auth
    //-->ATA USE KORAHOI ROUTE ER PASE TOTHA J ROUTE TI AMRA PROTECT KORTE CACCHE TAR 
    //-->PASE LIKHBO ->middleware('auth'); TAHOLE E OI ROUTE TIKE PROTECT KORBE JEMONTA
    //-->METHODER VITORE Auth::check() use kore koreche 
    //methoder Auth::check() COMMENT KORE route er por MIDDLEWARE('AUTH') USE KORECHE 
  //***AKHON JODI AMRA LOGOUT KORE SECRET ROUTE A HIT KORI TAHOLE DEKHBO LARAVEL AMADER AUTOMETICALLY
  //LOGIN PAGE A NIYE ASBE akhn jodi login kori tahole route ti kaj korbe


//**************PROGRAMICALLY EKTI USER K KIVABE AUTO LOGIN KORANOJAI?************** */
     //AJONNO : PROTHOPME module21class1H a ekti method declar kortehobe login name ja hasin vai er appController
     //-->tar modde Request OBJECT niye Methoder vitore ekti BuildInVariable nibo $credentials
     //-->jar modde associative array akare email o password dibo abong ai $credentials er bahire
     //-->login methoder modde ekti condition apply kore bolbo If(Auth::attempt($credentials)) hoi ba pai
     //-->tahole return kono loged in else{abord(403,"UNOTHORISED");} 
     //ROUTE : ai login methoder jonno ekti Route creat korbo web.php te that;s all
  //AKHN JODI LOGOUT OBOSTHATE O AI USER AI(PROGRAMICALLYLOGIN) rOUTE A HIT KORE TAHOLE KAJ KORBE
  //-->TOTHA YOU ARE LOGIN CHOLE ASBE PAGE A DHUKABE LOGIN KORIYE
     function login(Request $request)
     {
          $credentials = [
               'email' => "me@saihan.com" ,
               'password' => "saihan1234"
          ];
          if(Auth::attempt($credentials)){
               // return response("you are logged in",200);
               return redirect()->route('dashboard');
          }else{
               abort(403,"UNOTHORISED");
          }
     }
     //AKHN JODI AI USER K REDIRECT KORE DASHBOARD A NIYE JETE CHAI TAHOLE JUST
     // return redirect()->route('dashboard'); kore dile e hobe
     //OUTPUT : dashbourd a pathiye diyeche

//**************PROGRAMICALLY EKTI USER K KIVABE AUTO LOGOUT KORANOJAI?************** */
     //AKHN JODI AI USER K PRAGRAMICALLY LOGOUT KORATE CHAI TAHOLE JUST 
     //-->Auth::Logout(); return response("logged out",200);
     //AMRA CHAILE LOGOUT METHOD K REDIRECT KORE LOGIN PAGE A FIYE NITE PARI
     //-->return redirect('login'); kore

     function logout()
     {
          Auth::logout();
          return response("you are logout programically!");
     }
     //Route : akhn ai logout methoder jonno ekti Route creat kortehobe


//*******DASHBOURD A PROFILE INFOTE AMRA 2TA PAGE ADD KORBO facebook URL o github URL******* */
     //AJONNO :
     //1. database er user table a amra 2ta field add korbo jar modde facebook o github information 
     //->thakbe(batter hocche facebook o github er jonno alada tabkle creat kore ONE TO ONE connect)
     //-->kore kaj kora but akhane user table newhocche just bujhanor jonno
     //2. USER TABLE A FACEBOOK O GIT HUBER JONNO EKTI FIELD ADD KORBO
     //-->php artisan make:migration add_social_fields_to_users_table
     //3. AKHN USER TABLE A 2ta field add korbo function up(): void A 
     //-->Schema::table('users', er modde
             //$table->string('facebook_id')->nulleble(); 
             //$table->string('github_id')->nulleble();
          //AKHANE ->nulleble() USE NA KORLE EKTI ERROR DIBE KARON SOBAR J facebook ba git
          //-->THAKBE AMNTA TO NA SO AKHANE ->nulleble() DITE HOBE
          //-->JODI NULL NA DEI TAHOLE SQLSTATE(Hy00) : general error :1 CANNOT USE A NOT NULL
          //-->with default value NULL (ai error ti dibe )
     //ABONG public function down() : void schemate R 2ta deopColumn ADD KORBO
             //$table->dropColumn('facebook_id');
             //$table->dropColumn('github_id');
     //AKHN JODI MIGRATE KORI php artisan migrate (tahoe ai 2ta field user table a add hobe)
     //-->akhn jodi user tabe refresh kori tahole dekhte pabo 2ta column add hoyeche fb_id git_id
  //***ADD facebook AND github IN PROFILE INFORMATION************************
     //resources ER MODDE views ER MODDE profile ER VITOR update_profilr_information
     //-->_FORM.blade.php TE 
     //AKHANE JODI PROFILE INFORMATION X DEI TAHOLE PROFILE INFOTE GELE DEKHTE PABO WITH X
     //AKHANE profile information FORM A name o email ER POR AMRA 2TA FIELD add korbo
     //FACEBOOK_ID : name field k copy kore email <div> er por bosiye diye (for,id,name,
     //-->valueERmODDE $users,autocomplete,$errors->get)ai topic gulute just name
     //--> er poriborte facebook_id koredile e hoyejabe
     //GITHUB_ID : EKIVABE github_id er jonneo copye kore bosiye just same topic
     //--> gulute github_id kore dile e hobe
     //AKHN JODI fuild 2tate information diye save kori tahole save hobena 
     //-->KARON : form ta jekhane submit hocche sekhateo bole dite hobe jeno datati save kore +
     //-->modeler MODDE filleble ER MODDEO BOLEDITE HOBE TOTHA filleble ADD KORTE HOBE tanahole
     //-->model add hobena
     //SEJJON : AMRA profileController A JABO GIYE dekhbo 
     //-->public function update(ProfileUpdateRequest $request) function a validator 
     //-->rakhse ora THEN ctrl+clickoNProfileUpdateRequest(ctrl chepe dhore $request a 
     //-->click korbo)tahole ekti PAGE ASBE AKHANE JAR MODDE function rules(): array ER MODDE
     //-->name o email er moto faceboo_id o github_id er jonno associative array akare 
     //-->rules dibo(AKHANE SHUDU [STRING DIBO KARON ATA MANDATORY NA NULLEBLE])
                 //public function rules(): array
                 // {
                 //     return [
                 //         'name' => ['required', 'string', 'max:255'],
                 //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
                 //         'facebook_id' => ['string'],
                 //         'github_id' => ['string'],
                 //     ];
                 // }
                 //AMADER VALIDATION HOYEGESE
     //USER MODEL : abr USER modeler modde (user extend a) ai 2ta field name add koredite hobe
     //protected $fillable = ['name', 'email', 'facebook_id', 'github_id'];
   //***AKHN JODI facebook o huthub a information dei tahole add hoyejabe*********** */

//****************DASHBOARD MODIFY ******************************** */
//DASHBOURD PAGE A dashboard er jaigai welcome user(totha j login kore jabe tar name DEKHABE)***/
     //SEJONNO :
     //-->dashboear.blade.php te jabo giye dekhbo j doubleCurlyBa2nd breaket a dashboard ase 
     //-->ai dashboard er jaigai LIKHBO {{__('welcome')}} tar por abr 2ta doubleCurly
     //-->diye tar vitore user theke name niye asbo SETA NIYE ASBO Auth(namok j fesurd)
     //-->ase seta use kore AKHANE auth() USE KORLEO HOBE abr Auth:: use korleo hobe
     //{{ __('Welcome') }} {{Auth ::User()->name}} OTHOBA
     //{{ __('Welcome') }} {{auth()->User()->name}} 
     //TAHOLE E J LOGIN KORBE welcome +tarName chole asbe
  //BLADE ER MODDE J KONO PROPERTY K ACCESS KORTE CHAILE AMRA***Auth****use korbo MINDIT


//*******CREAT A TASK SYSTEM FOR AUTHENTICATED USERS**************** */
//JEKHANE LOGIN USER RA VHIBINNOROKOMER TASK TOIRI KORBE SHUDU EKTAI PROPERTY THAKBE NAME
//KINTU SE TASK ER SATHE CURRENT USER ER EKTI RELATION THAKBE
     //SEJONNO :
     //1.CREAT MODEL WITH MIGRATION : php artisan make:model -m (akhane -m dile ai name 
     //-->ekti migration table o toiri hoyejai) task modele task table create hoyegese
     //2. CREAT_TASKS_TABLE : A 1TI field ADD KORBO string('name'); r 1TI field add korbo
     //-->foreignId('user_id')->constrained()->onDelete('cascade'); ja use table er sate 
     //-->relation sthaponer jonno newa hoyeche 

     //-->akhn jodi php artisan migrate kori tahole table ti database a add hoyejabe
     //-->migrate kore jodi dekhe table database a jainai tahole database ti punorai
     //--> ante hobe(mane database.sqlite reopen korte hobe BEEN a)

     //CONNECTION VIA MODEL BETWEEN USER & TASK : akhn amra user table er sathe task tabl er
     //-->ba modeler sathe modeler relation sthapon korbo hasMany & belongsTo
     //USER MODEL :ekti user er onekgulu task thakte pare hasMany ONETOMANY relationship
     //--> RELATION IS : function tasks(){ return $this->hasMany(task::class); }
     //TASK MODEL : user ache task er modde(ekti task ekti user a thakte pare)manyToone
     //-->function user(){return $this->belongsTo(User::classs);}

     //Creat tasks folder & task.blade.php : AKHN resources er vitore Voew er modde 
     //-->profil folder er moto kore ekti folder open korbo abong tar modde ekti 
     //-->tasks.blade.php name ekti blade file creat korbo ETA MANUALLY O KORTEPARI
     //-->ABR php artisan make:view tasks.task AI command diye o kortepari
     //all-task.blade.php name r ekti blade toiri korbo tasks folder a 
          //-->php artisan make:view tasks.all-task
     //add-task-form.blade.php name r ekti blade toiri korbo tasks folder a
          //php artisan make:view tasks.add-task-form.blade.php
     //tasksController : AI BLADE GULU CONTROLL KORAR JONNO EKTI CONTROLLER CREAT KORTEHOBE
     //-->php artisan make:controller tasksController
     //-->ai tasks controller a ekti index name method creat korbo jarmaddome amra task.blade
     //-->.php namok view k controll korbo,abong index(Request $request) A Request class nibo
     //-->akhn task.blade.php k return view koredei return view('tasks.task');
     //-->route : task.blade.php er jonno ekti route toiri korbo 
          //Route::get('/tasks',[tasksController::class,'index'])->name('tasks.task');
     //-->AKHN JODI BROWESER A /TASKS HIT KORI TAHOLE All tasks CHOLE ASBE(karon tasks.blade a amra all tasks likhe rakhsi)
     //-->KINTU : amra cacche dashboard er moto kore task thakbe sekhane task related form 
     //-->kect ect thakbe
     // SEJONNO :
     //1.resources->view->profile->edit.blade.php file theke <x-app-layout> theke <x-slot>
     //-->PORJONTO COPY KORE task.blade.php TE PAST KORE profile er jaigai tasks dile e 
     //-->dashboard er view chole asbe tsask er jonno
           //      <x-app-layout>
           //      <x-slot name="header">
           //          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           //              {{ __('Tasks') }}
           //          </h2>
           //      </x-slot>
           //  </x-app-layout>
     //ADD NAVIGATION MENU IN TASKS VIEW :
     //AKHANE J VIEW TA CREAT KORECHE ATAR UPORE EKTI NAVIGATION MENU TOIRI KORBO
     //-->ja ase resources->view->layouts->navigation.blade.php file 
     //-->AKHANE <!-- Navigation Links --> ER NITHE dashboard component <div> copy kore tar niche past korte routOroutIS a task route
     //--> name bosabo tasks.task 
           //      <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
           //      <x-nav-link :href="route('tasks.task')" :active="request()->routeIs('tasks.task')">
           //          {{ __('Tasks') }}
           //      </x-nav-link>
           //  </div>
     //akhon jodi amra dashboaerd ba task route a jai tahole dekhte pabo upore navigation
     //--> er jaigai DASHBOARD ER PASE TASKS NAME R EKTI navigation button chole asche
     //--> (dashboard a click korle dashboard a niye jabe tasks a click korle tasks route
     //--> a niye jabe)
     
     //*********AKHON AMRA TSKS ROUTE A 2TA SECTION OPEN KORBO******
     //SEJONNO :
     //RESOURCES->VIEWS->PROFILE->PARTIAL->UPDATE-PASSWORD-FORM.BLADE.PHP TE JABO
     //-->GIYE upore <section>er modde <header></header> areatuku copy kore
     //--> resources->view->tasks folder a (all-task.blade.php)TE past kore <h2> o <p>
     //-->er modde (All Tasks) bosabvo
            //      <section>
            //      <header>
            //          <h2 class="text-lg font-medium text-gray-900">
            //              {{ __('All Tasks') }}
            //          </h2>
             
            //          <p class="mt-1 text-sm text-gray-600">
            //              {{ __('All Tasks') }}
            //          </p>
            //      </header>
            //  </section>
     //EK E VABE AI SECTION AREATA tasks folder a add-task-form.blade.php TE BOSABO
          //      <section>
          //      <header>
          //          <h2 class="text-lg font-medium text-gray-900">
          //              {{ __('Add Task') }}
          //          </h2>
           
          //          <p class="mt-1 text-sm text-gray-600">
          //              {{ __('Creat A New Task') }}
          //          </p>
          //      </header>
          //  </section>
     //akhon jodi broweser a dekhe tahole dekhbo browser a ai component 2ta jaini
     //-->karon amra include korini SEJONNO :
     //RESOURCES->VIEWS->PROFILE->EDIT.BLAE.PHP theke <s-slot> er niche @include
     //-->er <div>take copye kore ene task.blade.php te [ast kore 2ta component er
     //--><div> rekhe baki div gulu delete kore @include(areate blade gulur name dite hobe)
     //-->@include('tasks.all-task') r ektate @include('tasks.add-task-form')
     //-->BOSALE E DEKHTE PABO TASKS ROUTE A 2TA COMPONENT BA SECTION ADD HOYEGESE
     //-->1TA all-tasks R EKTA add-task

     //ADD-TASK-FORM : areate amra ekti form add korbo
     //SEJONNO :
     //-->resources->view->profile->update-password-form.blade.php theke form copy kore 
     //-->add-task-form.blade.php te SECTION er vitore HEADER er niche past korbo
     //-->past kore ai form take eit korbo
           //1.sobar niche primary button rekhe vitorer @if area bat diye dibo
           //2.form er method hobe post @method("post)
           //3.form route hobe task.store ja akhn nei ektu por toiri korbo
           //-->  <form method="post" action="{{ route('task.store') }}" class="mt-6 space-y-6">
           //4.amader field lagbe 2ta so 2ta rekhe sokol field er <div> delete kore dibo
           //5.akhane amra 2ta field add korbo ekta DONE er jonno onnoti PENDING er jonno
           //6.TAI TASKS TABLE A AMRA STATRUS A Ekta FIELD ADD KORBO status(done/pending)
           //-->tai task table k rollback korbo php artisan migrate:rollback
           //7.MIGRATION a tasks table a ekti field add korbo
           //--> $table->enum('status',['done','pending'])->default('pending);
           //8.akhn abr migration ti chalabo PHP ARTISAN MIGRATE
           //9.AKHN add-task-form A GIYE FORM 2TI BOSABO 1TI title ditioti status er jonno
           //-->update-password-form.blade.php theke ana form field 2ti k edit kore 
           //--> bosabo AKHANE FIRST name FORM A(FOR, ID,NAME,OUTcOMPLETE,ERROR-MSG)hobe name
           //-->abong DITIO FORM A(FOR,ID,NAME,ERROR-MSG, & SELECT(ID,NAME,))hobe status
                 //--><div>
                 //        <x-input-label for="name" :value="__('title')" />
                 //        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                 //         autocomplete="name" />
                 //        <x-input-error class="mt-2":messages="$errors->get('name')"  />
                 //    </div>
                 //    <div>
                 //        <x-input-label for="status" :value="__('status')" />
                 //        <select id="status" name="status" class="mt-1 block w-full" aria-required="">
                 //            <option Value="pending">Pending</option>
                 //            <option Value="done">Done</option>
                 //        <select>
                 //        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                 //    </div>
          //AI PURO KAJ TI E KORTESI update-password-form.blade.php k follow kore 

     //AKHN AI FIELD ER INFORMATION GULU SUBMIT HOBE KOTHAI?
     //-->AMRA FORM A ROUTE DIYECHE ("TASK.STORE") SO AKHN TASK.STORE CREAT KORBO.
          //SEJONNO :
          //1.tawskController a storte name ekti method toiri korbo
          //2.VALIDATE : THEN first kaj hocche name o status k validate korenibo
          //--> $request->validate['name'=> 'required','status'=>'required'];
          //3.Task Object CREAT : TARPORER KAJ HOCCHE Task modeler object creat kore 
          //->tar moddo theke value field/column er value ba information catch kora
          //-->LIKE $task = new Task(); OBJECT KCREAT HOYEGESE akhn $task theke data nibo
          //-->$task->name = $request->name; $task->status = $request->status;
          //-->$task->user_id = current_user; $task->save();(AKHANE USER ID HOCCHE CURRENT USER ER) 
          //-->AKHN ai current_user er id ta ber kore niye aste hobe ja amra 3vabe korte pari
               //1.$current_user = Auth::user()->id;
               //2.$current_user = auth()->user()->id;
               //3.$current_user = $request->user()->id; ai request a o id thake ja amra use kore field er data niye aste pari auth er moto kore
          //So akhn task user_id ta amra peyegesi 
               // function store(Request $request){
                 //$current_user = $request->user()->id;
                    // $request->validate[
                      //  'name'=>"required",
                      //  'status'=>"required"
                    // ];
                    //$task = new Task();
                    //$task->name = $request->name;
                    //$task->status = $request->status;
                    //$task->user_id =$current_user;
                   // $task->save();
                   //return redirect()->route('tasks.index');

                 // }
          //2.ai method er jonno ekti Route creat korbo...ABONG SETA ->MIDDLEWARE('AUTH');DIYE 
          //-->PROTECT KORBO SATHE tasks route k o protect korbo WEB.PHP TE
          //@method('post') ata comment koreche karon method post ase put thakle ata dite hoto
     //AKHN JODI /TASKS ROUTE A JAI ABONG FORM A NAME O STATUS DIYE SAVE DEI TAHOLE DATA
     //-->TASKS TABLE A DATABASE A CHOLEJABE

//**********ALL TASKS AREATE SOKOL TASK GULU K DEKHABO EKTI LOOP CHALIYE************* */
     //SEJONNO :
     //task gulu k ALL TASK er index methode return korte hobe taskCOntroller theke
     //-->JA 2TI WAYTE KORAJAI 
     //1.task gulu k return korar jonno PROTHOME currebt_user k niye nite hobe
     //-->return $user = $request->user(); ER MADDOME AMRA CURRENT LOGIN USER K PACCHE
     //AKHN ER MODDE JODI SOMOSTO USER K BA TASK GULU K DEKHTE CHAI TAHOLE TA 2TI UPAYE KORAJAI 
           //1. $task = task::where('user_id',$user->id)->get();
           //-->sbong return view er modde array akare tasks a dibo('tasks.task',['tasks' => $task]);
     //AKHN JODI ALL-TASKS.BLADE.PHP TE GIYE header er niche <div> a {{$task}}BOLI 
     //-->TAHOLE DEKHBO SOKOL DATA CHOLE ASCHE (TASKS TABLE A EKTI ROW CHILO CHOLE ASCHE)

           //2.DITIO WAY HOCCHE : user modele amra ekti method use korechilam relation staponer jonno setake use kore amra sohojei sokol data niye aste pari
          // BA TASKCONTROLLER A AMRA EKTI OBJECT CREAT KORECHILAM SEI TASKVARIABLE K USE KORE
          // AMRA TASK TABLE ER SOKOL DATA NIYE ASTE PARI 
          // JEMON : $user = $request->user();
                    //$task = $user->tasks;
          //AVABE KORLEO kaj korena 1st way te e kore rekheche 2nd wway comment kore rekheche

//**********DESTROY TASK BA KONO TASK K JENO DELETE KORTE PARI SETA TOIRI KORBO******* */
     //SEJONNO :
     //1.taskController a ekti method toiri korbo destroyName 
     //2.ABONG tar jonno ekti Route toiri korbo  web.php te
          //     function destroy(Request $request , Task $task)
          //     {

          //     }
     //TAR AGE ALL-TASKS.BLADE.PHP TE foreach loop chaliye sokol field gulu k bosabao
     //-->SATHE ekti DELETE button dibo JENO TASKS GULU K DELETE KORTE PARI
     //SEJONNO :
     //1.taskController.php te EKTI method Declar korbo destroy(){} THEN
     //2.ALL-TASKS.BLADE.PHP : te sectiuon er vitore header er niche ekti dive er modde 
     //-->ekti UL niyeche ABONG TAR MODDE @foreach loop er modde <li> er vitor <div> 
     //-->niye ekti H3(jar modde name )ekti<p>(jar modde status) ABONG AI </DIV>er bahire 
     //--> r ekti <div> nibo jar modde ekti form nibo jar modde route('tasks.destroy')HOBE
     //-->JAR METHOD HOBE @METHOD post abong ai form er modde BUTTON NIBO
     //3.@EMPTY : FOREACH LOOP ER MODDE EKTI @EMPTY nibo jar hobbe <p> er vitore dibo
     //-->{{__('no task found')}} jodi kono data na pai tokhn eta use hobe
     //all-tasks.blade.php te ase ata../taks view te jodi akhn dekhe tahole dekhte pabo 
     //-->tasks table theke data gulu one bye one chole asche protitar sathe ekti kore
     //--> delete button o ase

     //CODE IN TASKCONTROLLER.PHP : DESTROY METHOD :
     //1.current user k catch korbo..$user = request->user();
     //2.AKHN ekti condition diye check korbo j id ta peyeche ta current user_id kina
     //-->id($task->user_id == $user->id){
          //$task->delete();
          //return redirect('tasks.index');

     //   }
     // else{
     //      return response(403,"you are not allow to delete this task");
     // }
     //-->jodi match kore tahole $task->delete() korbe abong return korbe /tasks route a
     //R jodi match na kore tahole else diye bolbo 403,you r not allow to delete this task
     //delete hoyegese ALL DONE

     








}
