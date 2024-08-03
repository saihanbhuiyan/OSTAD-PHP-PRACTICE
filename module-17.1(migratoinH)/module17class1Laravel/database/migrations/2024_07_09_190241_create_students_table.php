<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // ***mone rakhte hobe database name plural hobe Like( students users) but field
   // --> er name hobe sigular (student user)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
          // .env file in laravel project
// 2.***********mysql setting in .env file in laravel project*************

    // mysql use korle amra laravel project a .env file a jabo giye DB_CONNECTION=sqlite
    //--->a sqllight er poriborte mysql dibo abong nicher DB gulu k uncomment koredibo

// ***********creat database table by useing migate *******?
    // php artisan make:migrate create_dbName_table 
    // 2)terminale ba cmdte command likhbo**** php artisan make:migrate create_dbName_table korle
    // -->name Numee ekti database-tahole migration a creat hobe kintu mysql-database a 
    // -->jabena jotokkhn na run korbo

// ************set table in database table*****
// ****php artsan migrate
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->integer('roll');
//php artisan migrate:rollback ********ADD ONE NEW COLUMN IN THE TABLE***********tabile notun field add korte chaile  
            $table->string('city');
//table colume date insert er por roll back kore item add korche(sokol information chole gese notun item add hoyeche)
            $table->integer('phone');
//PROBLEM :FIELD A DATA THAKA OBOSTHATE JODI NOTUN ITEM ROLLBACK KORE ADD KORTE CHAILE TAHOLE SIKOL TABLE O COLUMN
// ER DATA CHOLE JABE TAHOLE AKHN NEW ITEM ADD KORBO KMN KORE
            // 1)php artisan make:migration add_newColumnName/fieldName_to_databaseName(details module17class1 controller a)
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
// *******php artisan migrate: rollback (sogbulu table fire asche students soho)
//php artisan migrate:rollback ********ADD ONE NEW COLUMN IN THE TABLE***********tabile notun field add korte chaile
     // ***akhn j database tabble ta amra creat koreche tate jodi ekti item ba field add korte 
     //-->chai tahole amra chaile manually add korte pari ba php artisan migrate:rollback diye undo 
     //-->kore item ti migration a create_name_table namok database table a dhuke proyojonio item 
     //-->ba field add kore php artisan migrate:run korle e database ti abr add hoye jabe phpmyadmin a

//PROBLEM :FIELD A DATA THAKA OBOSTHATE JODI NOTUN ITEM ROLLBACK KORE ADD KORTE CHAILE TAHOLE SIKOL TABLE O COLUMN
// ER DATA CHOLE JABE TAHOLE AKHN NEW ITEM ADD KORBO KMN KORE 
    //  SOLUTION : akhn 2 ta wayte data add korte pari ete date o jabena notun item o add hobe
    // 1)php artisan make:migration add_ItemName_to_tableName(details module17class1 controller a)
    // 2)php artisan make:migrate add_ItemName_field(akhane up down issue ase details module17class1 controller a)
    // ***************************UP & DOWM METHOD*************************

// ******************php artisan migrate:reset*****************
    //korle sokol table drop hoye abr reset hobe ete sokol data chole jabe eta shudu tokhn
    // e korbo jokhn database lock kheye jabe

//********php artisan make:migration change_preFilName_to_NewName_in_TableName_table********to change field name in database */
    //--upA:    $table->renameColum('oldName','newName'); & 
    //downA :   $table->renameColum('newName','oldName');

// *******akhn ekti database relation toiri korbo tasks o users er modde***********
    // 1)php artisan make:migration create_tasks_table
    //baki kotha tasks tabile hobe
    

    


    }
  


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
