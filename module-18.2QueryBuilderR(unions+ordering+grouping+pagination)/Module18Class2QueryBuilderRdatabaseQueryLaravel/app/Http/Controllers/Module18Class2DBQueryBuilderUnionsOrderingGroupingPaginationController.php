<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Module18Class2DBQueryBuilderUnionsOrderingGroupingPaginationController extends Controller
{
        //JOIN
//DB::table('মেয়ে books')
//->join('ছেলে author' + 'মেয়ের বারির মেয়ে books.author_id' ,+ 'ছেলের বারির ছেলে author.id')


// WHAT IS QUERY BUILDER?
    // Ans : query builder is a class that allows us to build up complex queries by using
    // ----> methods that return the builder object itself.(codeium suggest id)
    // ANS : query builder hocche laravel er kichu inBuild method structure jekhane raw 
    //----> sql query likhar proyojon hoina sei kaj gulu korar jonno se nijei amader kichu method
    // ----> provid kore ba function provide kore



    function index(){
           // SELECTING ALL ROW
    //  DB : hocche facad er ekti build in class
    // *prothome DB er vitore j table takree select korbo tar name boledite hobe then ->get();
       $selectAll= DB::table('users')->get();
        //return response()->json($selectAll);

//SELECT FIRST ROW
        $firstRow = DB::table('books')->first(); 
         //return response()->json($firstRow);
//SELECT LAST ROW
        $lastRow = DB::table('books')->latest()->first(); 
         //return response()->json($lastRow);   

//SELECT ID BY FIND()
          //akhane primary key id ja find method a set ache jokhn e find use kore tar modde id 
          //-->dibe tokhn se where id=6 diye select kore niye asbe but PRIMARY KEY jodi id 
          //-->dewa na hoto tahole petona khuje cz akhane set ache where id =? diye 
          //-->so table er primery key must id rakhte hobe
          $findID = DB::table('books')->find(6);
          //return response()->json($findID);
        //   OUTPUT : {"id":6,"title":"A Storm of Swords","author_id":2,"price":18,"created_at":null,"updated_at":null}

//->pulck() METHOD FOR SELECTING SPECIFIC COLUMN  IN A ROW OF A TABLE like(id/title/price ect ect)
        $specificColumn = DB::table('books')->pluck('title');
         //return response()->json($specificColumn);
        //  OUTPUT : ["Harry Potter and the Chamber of Secrets","Harry Potter and the Prisoner of Azkaban","A Game of Thrones","A Clash of Kings","A Storm of Swords","The Shining","It","The Girl with the Dragon Tattoo"]
    
// count() METHOD FOR COUNTING THE NUMBER OF ROWS IN A TABLE(totha ekti table a kotogulu row ase ta count kore dibe)
    
        $countRows = DB::table('books')->count();
       // return response()->json($countRows);
        // OUTPUT : 8

// MAX(),MIN(),AVG(),SUM()
//MAX() METHOD FOR FINDING THE MAXIMUM VALUE OF A COLUMN IN A TABLE(oi column er maximum valu asbe)
        $maxValue = DB::table('books')->max('price');
        //return response()->json($maxValue);
        // OUTPUT : 18
//MIN() METHOD FOR FINDING THE MINIMUM VALUE IN A COLUMN IN A TABLE(oi table er minimum valu asbe)
        $minValue = DB::table('books')->min('price');
        // return response()->json($minValue);
//         // OUTPUT : 12
//AVG() METHOD FOR FINDING THE AVERAGE VALUE IN A COLUMN IN A TABLE(oi column er avarage valu asbe)
           $avgValue = DB::table('books')->avg('price');
           //return response()->json($avgValue);
//         // OUTPUT : "14.6250"
//SUM() METHOD FOR FINDING THE SUM OF ALL VALUES IN A COLUMN IN A TABLE(oi column er jogfol valu asbe)
         $sumValue = DB::table('books')->sum('price');
         //return response()->json($sumValue);
        // OUTPUT : "117"
    
// SELECT CLAUSE
        // SELECT CLAUSE use kore specific column ekba ekadhik column select korajai 
        // select()er vitore just column name gulu bole dile chole asbe
        $selectClause = DB::table('books')->select('title')->get();
        //return response()->json($selectClause);
        // OUTPUT : [{"title":"Harry Potter and the Chamber of Secrets"},{"title":"Harry Potter and the Prisoner of Azkaban"},{"title":"A Game of Thrones"},{"title":"A Clash of Kings"},{"title":"A Storm of Swords"},{"title":"The Shining"},{"title":"It"},{"title":"The Girl with the Dragon Tattoo"}]
    
// DISTINCT() USE FOR SELECT UNIQUE DATA/VALUES IN A TABLE COLUMN
        //LIKE : amader books table a unige j title/email/ect ase amra sei data gulu k shudu
        // -->niye asbo tahole sekhetre distinct() method use korbo
        
        $distinct = DB::table('books')->distinct('title')->get();
        //return response()->json($distinct);
    // OUTPUT : {"id":2,"title":"Harry Potter and the Chamber of Secrets","author_id":1,"price":12,"created_at":null,"updated_at":null},{"id":3,"title":"Harry Potter and the Prisoner of Azkaban","author_id":1,"price":14,"created_at":null,"updated_at":null},{"id":4,"title":"A Game of Thrones","author_id":2,"price":15,"created_at":null,"updated_at":null},{"id":5,"title":"A Clash of Kings","author_id":2,"price":16,"created_at":null,"updated_at":null},{"id":6,"title":"A Storm of Swords","author_id":2,"price":18,"created_at":null,"updated_at":null},{"id":7,"title":"The Shining","author_id":3,"price":12,"created_at":null,"updated_at":null},{"id":8,"title":"It","author_id":3,"price":14,"created_at":null,"updated_at":null},{"id":9,"title":"The Girl with the Dragon Tattoo","author_id":4,"price":16,"created_at":null,"updated_at":null}]
    // unfortunately akhane sokol title e unique hoito title a unique e boledise tai different kortehoyeche sob
    
// **data json()formate a na pathaleo output json akare e asbe karon akhn sokol kaj e json akare hoi
// tai laravel ata koreche j return jevabe e dik na kno output json akare e asbe 
// SO : json na kore direct return $result; dileo json akarei asbe


//JOIN
//DB::table('মেয়ে books')
//->join('ছেলে author' + 'মেয়ের বারির মেয়ে books.author_id' ,+ 'ছেলের বারির ছেলে author.id')

//INNER JOIN 
      //table jokhn onekgulu hobe tokhn database slow hoyejabe inner join use korle tokhn left ba right join use korte hobe
      //inner join hocche amn ekti projess jar maddom upoi tabile theke sokol data niye ekti relation toiri korbe
      $join = DB::table('books')
      ->join('authors','books.author_id', 'authors.id')
      //-->AKHANE MYEYE BOLTE relational id k bujhano hocche ai relational id j dharon koreche se meye
       //-->(akhane books authors er id dharon koeche author_id so akhane author_id meye r books meyer bari)
      ->get();
      //return $join;

     //OUtPUT : [{"id":1,"title":"Harry Potter and the Chamber of Secrets","author_id":1,"price":12,"created_at":null,
     //"updated_at":null,"name":"J.K. Rowling","bio":"British author and creator of the Harry Potter book series."},
     //->akhane authors tabiler data o asche books table er data o asche

// LEFT JOIN 
       //LEFT JOIN O INNER JOIN ONEKTA SAME TOBE J SOKOL FIELD A DATA NEI TADER K NULL DEKHABE
       $leftjoin = DB::table('books')
       ->leftjoin('authors','books.author_id', 'authors.id')
       //       avabe r o meye thakle tader o join korle tader id name details o chole asbe
       //-->AKHANE MYEYE BOLTE relational id k bujhano hocche ai relational id j dharon koreche se meye
       //-->(akhane books authors er id dharon koeche author_id so akhane author_id meye r books meyer bari)
       ->get();

       //return $leftjoin;
       //OUTPUT : [{"id":1,"title":"Harry Potter and the Chamber of Secrets","author_id":1,"price":12,
       //"created_at":null,"updated_at":null,"name":"J.K. Rowling","bio":"British author and creator of
       // the Harry Potter book series."},

// RIGHT JOIN
       //LEFT JOIN O INNER JOIN ONEKTA SAME TOBE J SOKOL FIELD A DATA NEI TADER K NULL DEKHABE

       $leftjoin = DB::table('books')
       ->rightjoin('authors','books.author_id', 'authors.id')
       //       avabe r o meye thakle tader o join korle tader id name details o chole asbe
       //-->AKHANE MYEYE BOLTE relational id k bujhano hocche ai relational id j dharon koreche se meye
       //-->(akhane books authors er id dharon koeche author_id so akhane author_id meye r books meyer bari)
       ->get();

       //return $leftjoin;
       //OUTPUT : [{"id":1,"title":"Harry Potter and the Chamber of Secrets","author_id":1,"price":12,
       //"created_at":null,"updated_at":null,"name":"J.K. Rowling","bio":"British author and creator of
       // the Harry Potter book series."},

// CROSS JOIN
       //CORSS JOIN ER USE CASE NEI A KONO NIYOM MANENA EK EKBAR EK EK JONER SATHE RELATION KORE DATA SIZE BORO KOREFELE
       $crossjoin = DB::table('books')
       ->crossjoin('authors')
       ->get();
      // return $crossjoin;
       //OUTPUT : HUGE field chole asche


//PAGINATION 
       //PAGINATION ER KAJ? 
       //Ans : pagination use kore amra data base theke 20 ta 30 ta 5ta10ta kore number 
       //-->of data select kore niye ese kaj korar jonno use hoi pagination

       // PAGINATION KNO USE HOI?
       //Ans : programing language chole 3tire architucter base er upo jekhane (clint pc,database, server pc)
       //-->akhn amader database a millons of data ase ja server pc handle korche  ja amader clint pc show korbe
       //-->KINTU : clint pc er memory size e thake 4gb 8gb ja millions of data handle korte parbene
       //-->screen kapakapi korbe othoba server not responding show korbe 

       //SOLUTION : arokom problem jeno nahoi sokol data jeno na ase sejonno pagination use kore amra kichu 
       //-->kichu sonkhok data ene ene clicnt pcte show korbo ete kore clint pc fast kaj korbe

       $paginate = DB::table('books')->simplePaginate(1);
       //return $paginate;

       //simplePaginate() use korar kore pagination kora hoi
       // simplePaginate() er vitor jotosonkha dewa hobe data base theke proti page a tototi kore da asbe
       //-->abong poro borti page link diye dibe avabe last data porjonto dibe database
       //-->tibe simple paginate a j value dibo proti page a oi koiti kore value asbe

       //OUTPUT : {
       //   "current_page": 1,
       //   "data": [
       //     {
       //       "id": 2,
       //       "title": "Harry Potter and the Chamber of Secrets",
       //       "author_id": 1,
       //       "price": 12,
       //       "created_at": null,
       //       "updated_at": null
       //     }
       //   ],
       //   "first_page_url": "http://127.0.0.1:8000?page=1",
       //   "from": 1,
       //   "next_page_url": "http://127.0.0.1:8000?page=2",
       //   "path": "http://127.0.0.1:8000",
       //   "per_page": 1,
       //   "prev_page_url": null,
       //   "to": 1

      //# outpute dekhte pacche j 1ti row diyeche abong page=2/3/ avabe page gulur url diyeche avabe page
      //--> page kore oi table er sokol row e diyeche tobe dekhabe proti page a ekti kore row karom ami
      //--> simplePaginate(1) diyeche
      //bivhinno website a amra dekhe thaki niche page 1,2,3..96, avabe theke 2te click korle 2number pag ase
      //-->oi page a soman sonkhok data thake..abr 3te click korle 3number page ase agulu paginate
      //-->diye e kora

      
// CUSTOM PAGINATE ->paginate() ER VITORE 3DHORONER PERAMITER PASS KORTE PARBO
      //pagenite k amara chaile amader moto kore guchiye nite pari...ajonno direct paginate() method use korbo
      //1)$per-page = 5; HOW MANY ROWS I WANT IN EVERY-SINGLE PAGE?
      //-->custom peramiter mane HOW MUCH/MANY ROW per page(totha proti page a kototi data cacche)
      //-->seta select korar jonno ekta option rakhbo jar modde option theke like(10,20,30,50...100)
      //-->j optite select korbe sei number of row data proti page a asbe 18.2TE EKTI EXAMPLE IMAGE ASE
      //->JA DEKHLE AMRA BIJTE PARBO HOW MANY PERPAGE BOLTE KI BUJHIYECHE
      //2)$colums = ["*"]; HOW MANY COLUMS I WANT IN A ROW?
      //-->AKHANE * meaning hocche j ami sobgulu column chai
      //3)$pageName = "items"; WHAT WILL BE THE PAGE NAME?
      //-->normally bydefault page=1/page=2 avabe thake but ami cacche page er jaigai 
      //-->items=1,items=2,items=3 avabe page ROute name asbe ba url asbe

      $paginate = DB::table('books')->paginate(
        $perPage = 2,
        $Columns = ["*"],
        $PageName = 'items'

      );
      //return $paginate;

      //OUTPUT : {
   // "current_page": 1,
    //"data": [
    //    {
    //        "id": 2,
    //        "title": "Harry Potter and the Chamber of Secrets",
    //        "author_id": 1,
    //        "price": 12,
    //        "created_at": null,
    //        "updated_at": null
    //    },
    //    {
    //        "id": 3,
    //        "title": "Harry Potter and the Prisoner of Azkaban",
    //        "author_id": 1,
    //        "price": 14,
    //        "created_at": null,
    //        "updated_at": null
    //    }
    //],
    //"first_page_url": "http://127.0.0.1:8000?items=1",
    //"from": 1,
    //"last_page": 4,
    //"last_page_url": "http://127.0.0.1:8000?items=4",

    //akhane amra dekhte pacche j 2ta data asche cz amra peramiter $PERPAGE =2, SET KORE DIYECHE
    //-->Columns sobgulu e asche cz we SET ID ["*"] = ALL
    //-->pageName = items asche items=1 item=2 cz we set it $pageName = "items";


//pagination by using SKIP & TAKE METHODS ->skip() & take()---->but this is a very poor stategy...
     //skip() method use hoi oi tabiler specific number of rows skip korar jonno
     //take() method use hoi oi table er specific number of rows take korar jonno

     $skipAndTake = DB::table('books')
     ->skip(2)
     ->take(1) 
     ->get();
     //return $skipAndTake; //3number Row dekhar kotha 
      //OUTPUT : [{"id":4,"title":"A Game of Thrones","author_id":2,"price":15,"created_at":null,"updated_at":null}]
      //--->akhane 4number row asche kaorn books table susu hoyeche id=2 theke so 2ta badhobe ja 2,3 abong
      //--->take koreche 4number row


      

    $lala =  DB::table('boooks')->join('authors', 'books.id', '=', 'authors.author_id')->get();
      return $lala;

    }
    
}



