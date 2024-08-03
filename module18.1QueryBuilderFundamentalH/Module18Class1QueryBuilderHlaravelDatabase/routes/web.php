<?php

use App\Http\Controllers\Module18Class1DBqueryBuilderDatabaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/m18.1",[Module18Class1DBqueryBuilderDatabaseController::class,'index']);

// ->get();************SELECT ALL DATA FROM BOOKS TABLE************
Route::get("/selectall",[Module18Class1DBqueryBuilderDatabaseController::class,'index1']);

//count() *****************COUNT OF BOOKS/AUTHORS*****************
Route::get("/count",[Module18Class1DBqueryBuilderDatabaseController::class,'index2']);

//limit(2)->get() ****************FIRST 2 COLUM/ARTICAL DEKHTE CAHILE****************
Route::get("/firstTwoColumn",[Module18Class1DBqueryBuilderDatabaseController::class,'index3']);

// limit(2)->offset(2)-get()****************FIRST ER PORER 2TA BA 2TA COLUM DEKHABE ****************
Route::get("/2columerporer2column",[Module18Class1DBqueryBuilderDatabaseController::class,'index4']);

// where('id',3)->get();*****************WHERE ID=1 COLUM DEKHTE CAHILE****************
Route::get("/whereid",[Module18Class1DBqueryBuilderDatabaseController::class,'index5']);

// *****************WHERE ID < 5 COLUM DEKHTE CAHILE****************
Route::get("/whereid<5",[Module18Class1DBqueryBuilderDatabaseController::class,'index6']);

// where('id',"<",5)*****************WHERE ID <=5 COLUM DEKHTE CAHILE****************
Route::get("/whereid<=3",[Module18Class1DBqueryBuilderDatabaseController::class,'index7']);

// **********MULTIPLE CONDITION WITH WHERE (where id <=5 and price<=14) COLUM DEKHTE CAHILE****************
// ->where('id',"=",5)->where('price', "<=",14)
Route::get("/whereid<=5andprice<=14",[Module18Class1DBqueryBuilderDatabaseController::class,'index8']);

//wherePrice(122)->get()*****WHERE ER SATHE COLUMN NAME DIYEO SERCH KORAJAI***********WHEREpRICE =12
Route::get("/wherepid(2)",[Module18Class1DBqueryBuilderDatabaseController::class,'index9']);

// whereIn ************ID 3 THEKE 7 PORJONTO DEKHTE CAHILE***********
//whereBetween('id',[3,7])
Route::get("/whereBetween",[Module18Class1DBqueryBuilderDatabaseController::class,'index10']);

// *******************where id == 3 OR id == 7 COLUM DEKHTE CAHILE****************
// ->whereIn('id',[3,7]) othoba where('id',3)->orwhere('id',7)
Route::get("/whereid==3orid==7",[Module18Class1DBqueryBuilderDatabaseController::class,'index11']);

// where created_at = null ***********whereNull COLUM DEKHTE CAHILE****************
//where('created_at',null)->get()
Route::get("/whereNull",[Module18Class1DBqueryBuilderDatabaseController::class,'index12']);

//max('field_name')->get();**************max price colum ber korte hole******
    // $maxprice = DB::table('table_books')->wherePrice($max)->get();
Route::get("/maxprice",[Module18Class1DBqueryBuilderDatabaseController::class,'index13']);

// order by (ascendig hole kichoi dite hobena and descendig hole DESC USE KORBO)************orderBy('field_name')->get();
    // $books = DB::table('table_books')->orderBy('title')->get();
    // $books = DB::table('table_books')->orderBy('title','desc')->get();
Route::get("/orderby",[Module18Class1DBqueryBuilderDatabaseController::class,'index14']);

// limit() in descending : *************descending a jodi limit use korte chai****************
    // $books = DB::table('table_books')->orderBy('title','desc')->limit(2)->get();
Route::get("/limitInorderBy",[Module18Class1DBqueryBuilderDatabaseController::class,'index15']); 

// first()***first use koreo amra desc er shudu prothom colum e ante pari ete kore limit()->get() lagbena r
    // $books = DB::table('table_books')->orderBy('title','desc')->first();
Route::get("/firstInOrderBy",[Module18Class1DBqueryBuilderDatabaseController::class,'index16']);

// *************JOIN WITH AUTHOR AND DISPLAY AUTHOR NAME***************
    // $books = DB::table('table_books')->join('table_authors','table_books.author_id','table_authors.id')->get();
Route::get("/joinWithAuthor",[Module18Class1DBqueryBuilderDatabaseController::class,'index17']);
           
// author id & books id soho dekhte chaile(totha books.title authors.name books.id o authors.id ) eksathe aste chaile
// $books = DB::table('table_books')->join('table_authors','table_books.author_id','table_authors.id')->get();
// জয়েন সূত্র ঃ join->কোথাকার মেয়ে('authors')+কোন মেয়ের সাথে কোথাকার ছেলের সম্পর্ক('books.author_id')+ কোন মেয়েটা মেয়ের নাম ('authors.id')
// ->সিলেক্টকর ছেলে পক্ষ থেকে কাকে কাকে আনবে আর মেয়ে পক্ষ থেকে কাকে কাকে আনবে বিয়েতে select('ছেলের নানা books.title','মেয়ের নানি')->নিয়ে আশ get();

Route::get("/joinWithAuthorAndBookWithID",[Module18Class1DBqueryBuilderDatabaseController::class,'index18']);

// ********author id jar 1 shudu matro se asbe*********where('author_id',1)
Route::get("/joinWithAuthorAndBookWithIDWhereAuthorID1",[Module18Class1DBqueryBuilderDatabaseController::class,'index19']);

// ****jekono quiryBuilder query k amra sql query te transfer korte pari*******->toSql()
Route::get("/toSql",[Module18Class1DBqueryBuilderDatabaseController::class,'index20']);

//***whereNotIn (totha sokol book dekhbo jader author id 3number na)************
// ->whereNotIn('author_id',[1])  [1] musbe array akare bosate hobe tanahole error dibei
Route::get("/whereNotIn",[Module18Class1DBqueryBuilderDatabaseController::class,'index21']);

// find max price books and books where price between 120 and 300
// ->wherePrice($max1)
// ->orwhereBetween('price',[120,300])
Route::get("/find",[Module18Class1DBqueryBuilderDatabaseController::class,'index22']);

// inner join
// MANE  Ai table j record gulu ase oi table a j record gulu ase segulu k amra
//  eksathe kore dekhte pari
Route::get("/innerjoin",[Module18Class1DBqueryBuilderDatabaseController::class,'index23']);

// left join
// prothome j table tar kotha age bola hobe se table ta prity pabe 
Route::get("/leftjoin",[Module18Class1DBqueryBuilderDatabaseController::class,'index24']);

// // right join o ek e vabe kaj kore just 
Route::get("/rightjoin",[Module18Class1DBqueryBuilderDatabaseController::class,'index25']);

// ######################INSERT DATA INTO AUTHORS TABLE#######################
Route::get("/insert",[Module18Class1DBqueryBuilderDatabaseController::class,'insert']);

// ####################EK e sathe author o books tabile data insert ####################
Route::get("/insertBothTableInOneTime",[Module18Class1DBqueryBuilderDatabaseController::class,'addauthorAndBooks']);

// ###################UPDATE BOOKS TABLE PRICE 1000 WHEREID = 10################
Route::get("/update",[Module18Class1DBqueryBuilderDatabaseController::class,'update']);

// #######################DELETE BOOKS TABLE WHEREID = 10 ######################
Route::get("/delete",[Module18Class1DBqueryBuilderDatabaseController::class,'delete']);