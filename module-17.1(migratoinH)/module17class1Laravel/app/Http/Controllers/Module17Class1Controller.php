<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// *********************summery OR MAIN THINGS************
// .env file in laravel project
// php artisan make:migrate create_dbName_table
// ************set table in database table*****
// php artisan migrate:run / phn artisan migrate
// artisan migrate :rollback
// 1)***************php artisan make:migration add_ItemName_to_databaseName*******
//2)***************php artisan make:migration add_ItemName_field = // -->schema::table('students',function(blueprint $table){}) agulu thakbena manually likhe
// ----------->$table->string/integer('fieldNameti bosate hobe');
// ***************************UP & DOWM METHOD*************************
// ******************php artisan migrate:reset*****************
//********change_preFilName_to_NewName_in_dbName_table********to change field name in database */=
  //--upA:$table->renameColum('oldName','newName'); & downA :$table->renameColum('newName','oldName');
// *******akhn ekti database relation toiri korbo tasks o users er modde***********
// $table->id()->index();
// *****************example&simple Ecomerce database er jonno table relation****


class Module17Class1Controller extends Controller
{
 
    //1.***************laravel heart**********
    // heart diye mysql database a dhuka ba handle korajai sejonno jemp lagena lagle pore dekhe nibo
    // othoba jemp use korbo

    // 2.***********mysql setting in .env file in laravel project*************

    // mysql use korle amra laravel project a .env file a jabo giye DB_CONNECTION=sqlite
    //--->a sqllight er poriborte mysql dibo abong nicher DB gulu k uncomment koredibo
    // --->akhane .envte laravel ta hocche database name DB

    // 3.*********migration to creat database************
    // migration name ekti folder e thake laravel project a ja database er modde migration
    // --> namok folder a ase jar modde database gulu ese joma hoi seta manually toiri
    // --> kori ba commad diye kori..
    // php myadmin a database create kore kivabe tatw amra jani akhn dekhbo command diye
    // --> kivabe database table toiri korajai

    // ***********creat database table by useing migate *******?
    // php artisan make:migrate create_dbName_table 
    // 2)terminale ba cmdte command likhbo**** php artisan make:migrate create_dbName_table korle
    // -->name Numee ekti database-tahole migration a creat hobe kintu mysql-database a 
    // -->jabena jotokkhn na run korbo

    // ************set table in database table*****
    // sejonno amra laravel project er vitor database namok folder a .env namok file a jabo
    // -->giye dekho ekti methode name namok ekti databas etoiri hoyeche jar modde
    //  $table->id(); o $table->timestamp(); auto thakbe sekhane amader proyojonio field set
    //-->korte hobe. Like id, name, email, password, created_at, updated_at er 
    // ***********jevabe table er field create korte hobe**********
    // $table->string('name');
    // $table->string('class');
    // $table->integer('roll');

    // *************php artsan migrate to add that table in phpmyadmin database*******shudu migrate dileo run korbe
// akhn amader amra ai database table take run kore mysql a add korbo phpmyadmin a 
// sejonno terminale ba cmdte command likhbo php artisan migrate:run (tahole e run hoyejabe )

// *******php artisan migrate: rollback instant j database ba field creat hoi ta firiyenite use hoi*******
// akhn jodi amra created database tabil k delete korte chai ba undo korte chai j tabil ta 
//-->matro toiri koreche take abr firiye ante chai tahole phpmyadmin theke ai command ti likhbo php

//  -->artisan migrate :rollback
         // ***akhn j database tabble ta amra creat koreche tate jodi ekti item ba field add korte 
        //-->chai tahole amra chaile manually add korte pari ba php artisan migrate:rollback diye undo 
       //-->kore item ti migration a create_name_table namok database table a dhuke proyojonio item 
       //-->ba field add kore php artisan migrate:run korle e database ti abr add hoye jabe phpmyadmin a 

//QUESTION : akhn database a table field gulute jodi data thake ba information thake tahole
//--> abong amra cacche r ekti field add korte tahole ki korbo?
    // Ans : database table field a jodi information thake tahole jodi database table k rollback
    //--> ba undo kore notun item kortechai tahole previous sokol field er data chole jabe
    
    // Solution: tahole amra 2ta way te new field ba item add korte parbo
   // 1)***************php artisan make:migration add_ItemName_to_databaseName*******
   // --->avabe jodi add kori tahole completely item ti add hoye jabe r previous data o thakbe
   // ---> kono problem hobena r kichu korteo hobena
   
   //2)***************php artisan make:migration add_ItemName_field 
   // -->avabe dileo item add hobe kintu ete manually kichu kaj korte hobe like 
   // -->schema::table('students',function(blueprint $table){}) agulu thakbena manually likhe
   //--> nite hobe migration a notun item migration a dhuke
   // But add_ItemName_to_databaseName avabe dile laravel bujhe nibe j ami ai database table 
   //-->newitemta add kortecacche so sesobadd koredibe shudu scema ervitore up methode tar vitor 
   // ----------->$table->string/integer('fieldNameti bosate hobe');

// ***************************UP & DOWM METHOD*************************
    // AKHANE EKTI IMPORTANT ISSUE ASE: php arsisan add_itemName_to_databaseName diye joi 
    //-->migrate:rollback kori tahole fieldname ti undo hobena abor porobortite jodi abr migrate 
    //-->kori ai fieldName ti diye tahole add o hobena *tokhn oi item tike phpmyadmine databasetable
    //-->dhuke manually delete kore abr abr jodi migrate:run kori tahole add hobe KRON KI????????????
    // KARON : amra jokhn notun ekti field add korbo database a tokhn 2ti method add hoi migration a 
    //oi fielde
    // ---->1)up method jar modde amra field er name likhe dibo $table->string('name');
    // --->2)tar niche down name r ekti method ase jar modde up a ja korbo down a tar biporit 
    //---->kaj korte hobe up a jodi add kori totha $table->string('name') mane add korlam tahole
    //--->doen a o boledite hobe $table->dropcolum('name); totha up method a ja korbp down method 
    //---->a tar biporit ta kore takhbo tahole rollback kori r jai korina kno ta kaj korbe kono 
    //--->problem hobena

// ******************php artisan migrate:reset*****************
    // ata korle tabiler sokol field k undo korabe then abr add korabe ata korle previous sokol data cholejabe
    // --->ata sudu tokhn e korbo jokhn amn kono lock issue hobe like kono error khaise kono field 
    // --->add koreche down a tar biporit ta korinai akhn kono karone lock khaise tokhn...


/********change_preFilName_to_NewName_in_dbName_table********to change field name in database */
//--upA:$table->renameColum('oldName','newName'); & downA :$table->renameColum('newName','oldName');

   // data base er kono field name jodi change korte chai tahole ai formate a change korbo
   // --->tahole migration a se ai commad er jonno 2ta method dibe up & down up a ja korbo
   //-->akhaneo down a tar boporit kaj tai korbo akhn jodi up method a likhi 
   //--upA:$table->renameColum('oldName','newName'); & downA :$table->renameColum('newName','oldName');
   //--> akhane ulto kaj tai kortehobe age new trpr old


// *******akhn ekti database relation toiri korbo tasks o users er modde***********
   // users table agei creat thake
   // tasks : php artisan make:migrate creat_tasks_table
   // -->then table field gulu add korbo migration table a giye
   // ***mone rakhte hobe database name plural hobe Like( students users) but field
   // --> er name hobe sigular (student user)
   // -->$table->id();
   // -->$table->string('task');
   // -->$table->text('description');
   // -->$table->date('due_date');
   // -->$table->enum('status',['pending','doing','done'])->default('pending');
                // ------->enum(use hoi jokhn kono default thake enum use korle default diye dibo)
   // -->$table->foreignId('user_id')->constrained();
                  // -->foreignId use kore user_id er sathe somporko sthapon koreche sejonno constrained use korte
   // --->hobe ja shudu foreignId hole e use korte hoi
   // -->$table->timestamps();

// $table->id()->index();
    // *****jesokol table ba field k amader  where diye khoja lagte pare like select all from 
    //-->where (id,due_date,name,ect)sesokol field a index() bosate hobe like $table->id()->index(); 
    //-->avabe tobe foreignId te use korte hobena karon er modde auto index() thake karon somporko
    //-->sthapon korbe relation korbe TOBE ATA DATABASE A TABLE MIGRATE KORAR AGE KORTE HOBE TOTHA 
    //-->DATABASE A TABLETI RUN KORARA AGE KORA LAGBE..rollback kore field gulute ->index(); bosaleo hobe but field er data gulu chole jabe so hoi age koro othoba pore ekti index er jonno migration kore tar modde data gulu bosiye daw

// JODI TABLE TI RUN KORE FELI TAHOLE JA KORTE HOBE :ata 2 ti wayte korajai 

    // 1)migration run korar age ->index() bosiye jekhane jekhane proyojon

    // 2)add_index_to_tasks_table : ekti index file creat korte hobe data base a  
    // -->php artisan make:migration add_index_to_tasks_table (tahole migration a ekti table 
    // -->file creat hobe jar moddde amra je field gulute where lagbe se file gulute index bosabo
    // --->Like : piblic method up () er modde 
    
    // -->$table->index('name');
    // -->$table->index('due_date'); (AKHANE NAME ER AGE INDEX DITE HOBE)
    // -->$table->index('status');
    
    // ***jodi 2ta field k eksathe index kortechai setaw parbo( $table->index(['name','due_date']));
    // ---->avabe array akare dite parbo
    // *********DOWN METHOD A TAR BIPORIT TA BOSIYE NITE HOBE:
    // PUBLIC DOWN() : 
    // $table->dropIndex(['name']);  index drop kortegele fieldName arrayer modde ditehobe
    // -->$table->dropIndex(['due_date']); avabe sobgulu drop index korbo karon up method a
    // --->ja shudu index koreche tai akhane drop index

// trpr run korbo : php artisan migrate

// <-----------RELATIONAL WORK BETWEEN USERS AND POSTS AND COMMENTS----------->
// *******r ekti database creat kore relation korbo users,posts,o comments table er modde**********
    // so db2ta creat korefeli cz users table agei creat korea ache
    // ***php artisan make:migrate create_posts_table && php artisan make:migrate create_comments_table

// poths up methode a field guli add korbo..
//$table->id(); $table->string('title')->index(); $table->text('description')->fulltext(); 
//$table->enum('status',['pending','doing','done'])->default('pending')->index;
// $table->date('published_at')->index(); $table->foreignId('user_id')->constrained();
// 

// comments table er modde up methode tar field guli bosabo
// $table->id(); $table->string('name')->index();; $table->string('email')->index(); $table->text('comment')->fulltext();
// $table->ipaddress()->index();chaile avabe rakhteo pari abr vitore ip_address diteo pari $table->ipaddress('ip_address')->index( );
// $table->foreignId('post_id')->constrained(); posts table er sathe somporko sthapon koreche
// sobgulu index kore niyeche j gulu where diye serch koralagtepere proyojone


// *****************example&simple Ecomerce database er jonno table relation****
    // tabil gulu holo (users (ja kora ase age),products(id,name,price,stock) orders(id,user_id,total_amount,status),order_item(id,
    // order_id,product_id,quantity,price) er modde

// so table 3ti creat kore feli
   // php artisan make:migration ceate_products_table
   // php artisan make:migration create_orders_table 
   // php artisan make:migration create_order_items_table

// ***akhn tabble gulute ield add korbo :
// PRODUCTS TABLE : up method() : $table->id(); $table->string('name'); $table->decimal('price',8,2); $table->integer('stock');

// ORDER table er jonno : up method() : $table->id(); $table->decimal('total_amount',8,2);
    // decimal er khetre amader dosomiker por koighor jabe ta boleditehobe (8,2)akhane 8 means =total colum ba ghor hobe 8ti abong dosomiker por ghor hobe 2ti
    // $table->enum('status',['pending','processing','completed','cancelled','returned','shipped'])->default('pending');
    // $table->foreignId('user_id')->constrained();

// ORDERS_ITEM table er jonno : up method() : $table->id(); $table->foreignId('order_id')->constrained()->onDelete('cascade');
// $table->foreignId('product_id')->constrained()->onDelete('cascade'); $table->integer('quantity'); $table->decimal('price',8,2);


// specific kono table run korte chaile : php artisan migrate --path=database/migrations/table name.php
}
