<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//model aded in controller
use App\Models\task;

class Module19Class1EloquentORMControllerH extends Controller
{
     //ELOQUENT ORM FOR DATABASE QUERY IN LARAVEL(FUTURE A ATA NIYE E KAJ KORBO)

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

//TASK NAMEM MIGRATION table field bosiye eni
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
        //web.php te Route kore Nibo ai method tike Route::get('/task', [Molude19Class1EloquentORMControllerH::class, 'doSomthing']);
       
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
        //--->jar mane tmi j title field ta insert korteo ata modele boledainai j tmi insert korteso
        //-->***KARON : jotokkhn na amra database a boledibo totokkhn amra data insert korte parbo na 
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

//JA KORECHE : sarnormo
      //-->AMRA MODEL+TABLE CREAT KORECHE THEN CONTROLLER A MODEL K USE KORE EKTI MEHODE just task::creat[]er 
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
        //1)use app\Models\task; TASK SEEDER A AMRA PROTHOMOTO task namok moder k add korbo,
        //2)trpr controller a ja creat ba jai korbo ta taskSeeder a run er vitore bosiye dibo
        //--->(jemon amra akhane creat koreche so task::create([])) areata bosiye diyeche
        //3)then ai taskSeeder k databaseSeeder.php te call korte hobe must

//DATABASESEEDER.PHP TE KI KORBO?
        //1)use app\Models\task; DATABASESEEDER A AMRA PROTHOMOTO tasksEEDER namok moder K USE KORBO
        //2)THEN run() void namok methode taskSeeder k call koredibo...$this->call(taskSeeder::class);
        //THEN php artisan db:seed kore run korbo 


//php artisan db:seed 
        //akhn jodi php artisan db:seed kori tahole database a 10ti data entry hobe j 10ti data
        //-->amader amra taskSeeder.php te loop er modde diyeche 

       //####akhane amra task table er sokol data drop kore then abr terminal php artisan
       //----> db:seed command diyeche abong database a 10ti data entry hoye gese 

//TASK::TRUNCATE() FOR EMPTY DATABASE AND ENTRY ONLY 10DATA
       //*** AMRA JOTOBAR php artisan db:seed commant ti dibo terminale totobar e 10ti kore
       //----> data add hobe kintu amra cacche amader database a only 10 ti data/Row e thakbe
       //----> tahole amra taskSeeder a run() voide{} methode task:create er age use korbo 
       //---->task::truncate() tahole amra jotobar e db:seed korina kno protibar database 
       //---->aEMPTY hoye only 10ta data e entry hobe
       //###akhn jotobar e seed korina kno protibar database empty kore 10ti data entry hobe database a


    }

    //task::all() FOR SHOW ALL DATA IN DATABASE
      
       function gatAllDataFromDatabase(){
         //akhn jodi database er sokol data dekhate chai tahole ekti methode just task::all()
         //-->use korle e sokol data chole asbe(DBqueryBuilder a ja DB::table('task')->get(); 
         //-->use kore kortehoto)
    return task::all();
        //OUTPUT: 10ta row e chole asche
    }

//task::limit(2)->get(); FOR SHOW FIRST 2 DATA FROM DATABASE
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

            return task::orderBy('id','desc')->get();
            //OUTPUT: 10-1ta row e chole asche
         }

//created_at and updated_at column gulu k shudu astechai ba dekhte chai


}
