<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\profile;
use App\Models\tag;
use App\Models\user;
use Illuminate\Http\Request;


class module19class2EloquentORMwithModelR extends Controller
//controller , model,web ,use hoyeche ,rabbil vai er blog import hoyeche ,modele relation
{
    // SUMMERY OF MEET ELOGUENT  ORM BY RABBIL VAI
    // 1.MEET ELOQUENT ORM = MODEL ER MADDOME AMRA QUERY KORBO INSERT UPDATE ECT ECT
    // 2.naming convention = model toirir kichu nemaing convntin ase ja mantain kore amader model toiri korte hobe AI NAMING FEATURE GULU AMRA JODI NA JANI TAHOLE BUILD IN LARA VEL ER FETURE GULU KAJ KORBENA 
    // 3.MODEL DIYE JA JA KORTE PARI 
    //     *DATA BASE A DATA INSERT KORTE PARI MODEL DIYE 
    //     *UPDATE KORTE PARI MODEL DIYE 
    //     *FILLEBLE KORTE PARI MODEL USE KORE 
    //     *UPSERT KORTE PARI MODEL USE KORE(UPDATE OR CREAT)
    //     *DELEATE USING MODEL
    //     *INCREMENT OR DECREMENT BY MODEL
    //     *RETRIVING ALL ROWS
    //     *RETEIVING SINGLE ROWS
    //     * RITRIVING LIST OF COLUMNS VALUE
    //     *AGGREGATION 
    //     *SELECT CLAUSE 
    //     *BASICK WHERE CLAUSE
    //     *ADVANSE WHARE CLAUSE 
    //     *ORDERING GROUPING LIMIT
    //     *pagination 
    //     *understanding eloquenent orm relationship
    //           *one to one invers relationship
    //           *one to many & inversrelation relationship
    //           *many top many & invers relationship
    //           *has one of many
    //           *



//*****AJONNO JA JA KORTE HOBE****** */
     //1.EKTI DATABASE CREAT KORTE HOBE
    //2.databse a rabbil vai der dewa database ti insert korte hobe 
    //3.databse ja ja ase(users tabil,posts table,comments table,profile table,tag table)

//*****demo databse erd diagam bujhe nite hobe******* */
    //blog application creat korbo akhane 
    //1.user tabile(name o email address diye login korbe )
    //2.then login korle asbe profile jar modde(user_id , bio data thakbe)user er sathe profile table er somporko one to onr relationship
    //3.posttable thakbe (user_id,title,content) user er sathe posts tabliler somporkko one to many
    //4.comments table(user_is ,post_is , content)post er modde onno jekono user ese comment 
    //-->korte parbe son comment er sathe user er one to many somporko abong poster satheo 
    //-->comments table er one to many somporko
    //5.post_tag tabile (post_id,tag_id) thakbe jekhane j post kortese tar id o jake tag kortese tar id thakbe ja post er sathe one to many relationship a thakbe
    //6.tag tabile thakbe kake tag korahocche tar name (id,name)ja post_tag er sathe one to many relatione thakbe


//BLOG NAME EKTI DATABASE CRREAT KORECHE 
//MYBLOG NAME EKTII DATABSE TABLE IMPORT KORECHE 
//.ENV FILE A mysql KORECHE ABONG DATABASE NAME DIYCHE blog19class2eloquentORM
//php artisan serve koreniyeche

//VIP******8table to model and table vs model (totha table theke model toiri kore kivabe )****
    //table er name hoi always plural like users,posts,profiles,tags ect
    //******ek ekta table er jonno ek ekta model toiri korte hobe*********
    //**************TAHOLE MODEL KI R TABLE KI******************
    //1.query builder a amader layer chilo 3ta(DATABASE TABLE->QUERY-BUILDER->JSON)
    //-->JA DATABASE A DIRECT HIT KORTO LIKE DB::table('users')->get(); AKHANE DIRECT
    //-->USERS TABLE K HIT KORECHE
    //2.KINTU modele layer hoi 4ta(DATABASE TABLE->MODEL->QUERY-BUILDER->JSON)
    //-->SO akhane query direct database a hit korbena hit korbe modele model take dibe 
    //-->ja se queryte cacche AKHANE MODEL HOCCHE DATABASE ER CHAYA 
    //-->AKHON QUEY ER J METHODS GULU ACHE SEGULU DIRECT DATABASE TABLE A HIT KORBENA MODEL 
    //-->LAYER PASS KORE JABE ja table gulu k represent korbe information diye
    //-->SO WHAT IS MODEL? JODI BOLAHOI(TAHOLE TA TABLE ER EKTI REPRESENTATIVE JA CREAT NA KORLE
    //-->ELOQUENT ORM KAJ KORBENA)
    //BIDRO:akhane (->ai sign mane hocche theke mane database theke model model theke query)

//Q:*****AKHN PROSNO HOCCHE Q.BUILDER ER 3LAYER NA KORE AMRA ORM ER 4LAYER KNO USE KORBO*** */
    //Ans:
    //1.ai modeler vitor diye jokhn amra query chalabo tokhn ai layer er moddo diye amra 
    //validation korte parbo,ai modeler modde amra data relationship gulu manage korte parbo
    //,ai modeler moddo diye chalale onek default properti set kore rakhte pari
    //ORTHAT EK EKTI MODEL EKEKTI SECOUNDARY TABLE ER MOTO KORE KAJ KORBE


//*****PROTITA TABLE ER JONNO EK EKTI MODEL CREAT KORTE HOBE********* */
    //AI MODEL GULU TOIRIR SATHE SATHE TABLE ER SATHE CONNECTION NIYE NIYE BA COMUNICATE
    // SURU KOREDIBE (tobe laravel naming convension follow kore korte hobe)
    //migration naming convention follow na korle laravel take chinbena
    //table hobe plural sei name tir singular name hobe moddel name
//TO CREAT MODEL COMMAND php artisan make:model modelName
    //1.comments table er jonno = php artisan make:model comment
    //2.posts table er jonno = php artisan make:model post
    //3.users table er jonno = php artisan make:model user
    //4.profiles table er jonno = php artisan make:model profile
    //5.tags table er jonno = php artisan make:model tag
    //6.post_tags table er jonno = php artisan make:model post_tag
    //MODEL GULU BA TABLE SHADOW BA 2ND TABLE CREAT KORE NILAM

//KAJ KORAR JONNO EKTI CONTROLLER CREAT KORE NIYECHE module19class2EloquentORMwithModelR
    
// 4.EXECUTE YOUR FIRST QUERY VIA MODEL
    //1.
    function demo1()
    {
       $result = post::all();
        //return $result;
        //AKHANE QUERY BUILDER ER JOTO QUERY ASE SOB APPLY KORAJABE
    }

//UNDERSTTANDING FLOW OF MODEL & DATABASE , QUERY AMD ORM
     //NIJER MOTO KORE LIKHE NAW
     //-->prothome url hit korbe route k ,Route hit korbe function k, Function hit korbe
     //-->model k. Model tabler ekti layer so model table a hit kore data enedibe,
     //-->then ta amra dekhte pabo screen a 

//********UNDERSTANDING RELATIONSHIP BETWEEN MODEL***********
    //UNDERSTING THE MEANING OF belongs AND has
    //**belong = mane amr peter modde ase ja ami dharon kori  like i belong kidny ect
    //**has = has mane amr ase but amr modde nai bahire ase ba onnokothawe ase */
    //  AI 2TA WORD ER MEANIG BUJLE RELATION BUJHA JABE AI 2TA DIYE E RELATION TOIRI HOBE
    
    //**a profile table belongs user_id  in profile table*/
    //**a user table has user_id in profile table  */

//THERE HAVE TWO KIND OF RELATIONAL STEP(direct & inverse)
//DIRECT RELATIONSHIP AND REVERSE BA INVERS RELATIONSHIP 
     //1.DIREST RELATIONSHIP =: BAPER THEKE CHELER DIKE JAWA BA PURBOPURUSH THEKE POROBORTI
     //-->purush er dike jawa je age eseche se baba r j pore asche se chele
     //-->akhane users table age asche so user baba profile table pore asche so profile chele
     //-->akhn jodi direct relation kori tahole bolbo
     //**users has one/many son othoba users has one son that is profile
     //2.REVERSE/INVERSE RELATIONSHIP =: cheler dik theke jodi babar dik bibechona korahoi 
     //-->tahole ulto kore boltepari 
     //**profile belongs users table 
     //3.POST TABLE : direct = users has post , invers = post belongs user
     //4.COMMENTS TABLE : direct = post has comment , invers = comment belongs post AND users
     //5.POST_TAG TABLE : direct = post has post_tag , invers = post_tag belongs post AND tag
     //6.TAG TABLE : direct = tag has post-tag , INVERSE = post_tag belongs tag AND post
     // EGULU JUST TABLE ER RELATIONAL READING  MODELER DIK THEKE DIAGRAM DEKHE

//*******ESTABLISH/CONNECTION  RELATIONSHIP BETWEEN MODEL belongs AND has***********
    //relation toiri korar jonno j modeler relation toiri korbo se modele giye ekti 
    //-->function ba method declar korte hobe AKHANE chide name k function name hisebe 
    //-->use korbo j child er sathe amra relation toiri korbo
    //-->ABR = chile modele giye i parant modeler name function declar kore inverse
    //-->ba belongs relation toiri ko0rbe 
    //JEMON : user o profile tabiler modde jodi relation kori 
    //USER->TAHOLE : USER tasbile profile() name ekti method declar korbo
              // function profile()
              // {
              //     return $this->hasOne(profile::class);
              // } ja user table ase  direct relation 
              //-->totha this(mane users table ase)->hasOne(mane ekti prile karonn 
              //-->ek ekti userws er ekti profile e thake profile name ta ki hobe)
              //-->(profile::class);
              //USER TABLE ER SATHE CONNECTION ASE POST ER ,COMMENT ER, JADER 
              //RELATION USER MODELE KORECHE ABR COMMENT ,POST TABILEO REVERSE KORECHE
    
    //PROFILE : ek e vabe profile table a parant user er sathe reverse/inverse relation
    //-->korbe se jonno user name function creat kore belongs korbe
               //function user()
               // {
               //       return $this->belongsTo(user::class);
               // }ja profile methode ase
               //JAR MANE AI PROFILE USER TABILER MODDE ASE BELONGS
    //POST + USER : Akhn user parant er sathe post child er relation korbo
               //user :  function post()
                        // {
                        //     return $this->hasMany(post::class);
                        // }
                //POST : 
                         // function user()
                         // {
                         //     return $this->belongsTo(user::class);
                         // }
    //AVABE SOKOL MODELER RELATION E KORA HOYECHE DIAGRAM DEKHE RUBBIL VAI ER VIDEOTE 19.2

//******AI RELATIONGULU KOKHN LIKHBO R KOKHN LIKHBONA****** */
    //**KOKHON KORBO : AMADER jokhn kono database table er onno kono database table er kono information
    //-->lagbe tokhn amra modele ai relation toiri korbo
    //**KOKHON KORBONA : jokhn amader kono table er kaj korte giye onno kono table er 
    //-->information  er proyojon hobena tohon amra ai relation korbona 

//*****RELATION TW KORECHE ABR RELATIONAL TABLE GULU NIYE KAJ KORBO KMN KORE** */
    //return user::with('profile')->get();
    //with use kore amra kono ekti tabiler sathe onno tabiler kono specific field ba 
    //-->puro table e nite pari 
    //JEMON 
    function demo2(){
        $newResult = tag::with('post_tag')->get();
        return $newResult;
    }
    //OUTPUT : { tag er er por post_tag er data alada ekti objeck akare diyeche 
     //     "id": 1,
     //     "name": "Technology",
     //     "created_at": "2023-07-02T21:16:14.000000Z",
     //     "updated_at": "2023-07-02T21:16:14.000000Z",
     //     "post_tag": [
     //       {
     //         "post_id": 1,
     //         "tag_id": 1,
     //         "created_at": "2023-07-02T21:31:46.000000Z",
     //         "updated_at": "2023-07-02T21:31:46.000000Z"
     //       },
     //       {
     //         "post_id": 10,
     //         "tag_id": 1,
     //         "created_at": "2023-07-02T21:31:46.000000Z",
     //         "updated_at": "2023-07-02T21:31:46.000000Z"
     //       }
     //     ]
     //   }
//***********what is normalize data model & embeded data model************8 */
//embeded data model :
     //akhane amra dekhte pacche output a tag er ekti data post_tag er ekti data
     //-->avabe ekadhik data niye jokhn ekti data toiri hoi tokhn amra take boli
     //-->embeded data model
     //TOTHA : avabe multiple table mile jokhn ekti shape ghoton hocche 
     //-->tokhn ai shape k bole multiple json shape(jemon akhane tag o post_tag mile
     //-->ekti data hoyeche avabe r o table ante pari amra array use kore)
     //-->tag::with(['post_tag','profile','comment'])->get(); avabe relational joto
     //-->table er data niye e ekta shape er data toiri hobe tokhn amra ai shape k
     //-->boli MULTIPLE JSON SHAPE

//normalize data shape ;
    //jokhn amra kono data table k ambed na kore shudu ekti table er data gulu niye
    //-->asi jekhane r kono table er data ba boject thakena tokhn amra take boli 
    //--NORMALIZE DATA SHAPE

//json SEMI-STRICTURE DATA : json normalise data o provite kore abr embeded data o depend kore ami kmn kore
     //-->cacche tai json k bole SEMI-STRICTURE DATA 
    
    










}
