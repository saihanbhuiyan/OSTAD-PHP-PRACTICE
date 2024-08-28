<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
//INDEX FUNCTION ER 
    //******AKHN JODI RUN KORI TAHOLE EKTI ERROS ASBE :
        //--->Add [title] to fillable property to allow mass assignment on [App\Models\task].
        //--->jar mane tmi j title field ta insert korteo ata modele boledainai j tmi insert korteso
        //-->***KARON : jotokkhn na amra database a boledibo totokkhn amra data insert korte parbo na 
        //---> normally field serch kora ect ect kora jabe but notun data insert ba data entry korte parbona
        //***SO : MODELE BOLEDITE HOBE (protected $fillable = ['title','description','status','due_date'];)
        //-->abong tar modde ki ki data entry korbo taw boledite hobe

    protected $fillable = [ //akhane $fillable hocche modeler ekti special property
        'title',
        'description',
        'status',
        'due_date'

    ];
    // akhn jodi run kori tahole done show korbe mane data entry hoyegese

//TASKSEEDER A AMRA KI KORBO?
        //1)use app\Models\task; TASK SEEDER A AMRA PROTHOMOTO task namok moder k add korbo,
        //2)trpr controller a ja creat ba jai korbo ta taskSeeder a run er vitore bosiye dibo
        //--->(jemon amra akhane creat koreche so task::create([])) areata bosiye diyeche
        //3)then ai taskSeeder k databaseSeeder.php te call korte hobe must
    
//DATABASESEEDER.PHP TE KI KORBO?
        //1)use app\Models\task; DATABASESEEDER A AMRA PROTHOMOTO tasksEEDER namok moder K USE KORBO
        //2)THEN run() void namok methode taskSeeder k call koredibo...$this->call(taskSeeder::class);
        //THEN php artisan db:seed kore run korbo 



//------------>SELECT CRITO ROW THEKE SPECIFIC COLUMN BATDITE CHAILE<-----------
      //***insert a korar jonno jemon $filleble special attribute use koreche temoni
      //***specific column bat diye row anar jonno $hidden namok special attribute use korte hobe
      //*** jemon $hidden =['created_at','updated_at'] array er vitore column name gulu hobe
      protected $hidden =[
        'created_at',
        'updated_at'
      ];
      //OUTPUT :  {
//     "id": 10,
//     "title": "Nobis quod minima corrupti vel voluptate tempore.",
//     "description": "Facilis unde eius ex est velit qui modi est consectetur dicta consequatur eveniet eos voluptatem numquam vero aut ea et perferendis dolorem.",
//     "status": "pending",
//     "due_date": "2024-07-21"
//   }, AVABE SOKOL ROW THEKE CREATED_AT UPDATED_AT COLUMN CHOLEGESE


}
