<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;

class Module18Class1DBqueryBuilderDatabaseController extends Controller
{//JOIN
//DB::table('মেয়ে books')
//->join('ছেলে author' + 'মেয়ের বারির মেয়ে books.author_id' ,+ 'ছেলের বারির ছেলে author.id')

    function index(){
        return 1;
    }

    
// QUERYbUILDER ER KAJ HOCCHE SQL ER MOTO QUERY KORA ITEM FIND INSERTuPDATE DELETE ECT ECT

//controller a ekti method niyeche abong web.phpte ekti ROute creat koreche 
// THEN : 2ti migration table create koreche AUTHORS & BOOKS namer
// 2ti SEEDERS CREATE KORECHE migraion folder ER vITOR seeder namok folder a 
    // *AuthorSeeder.php & BookSeeder.php
// seedersfolder a DATABASESEEDERS.PHP te ai 2ta seeders file k add koreche ba call koreche run() namok methode
//public function run(): void
// {
//     // User::factory(10)->create();

//     // User::factory()->create([
//     //     'name' => 'Test User',
//     //     'email' => 'test@example.com', //akhane shudu $this->call uncomment hobe baki sob comment a thakbe
//     // ]);
//     $this->call([
//         AuthorsTableSeeder::class,
//         BooksTableSeeder::class
//     ]);

// } //ABONG databaseSeeder.php er UPORE SEEDER FILE TIKE USE KOREDITE HOBE WITH seeders folder
          // use Database\Seeders\AuthorsTableSeeder;
          // use Database\Seeders\BooksTableSeeder;
        //   use Illuminate\Database\Seeder;
 
// ajonno prothome .env file a ( DB-DATABASE : querybuilder) name QuiryBuilder ja database name db
    // THEN : TERMINAL COMMAND php artiasan migrate: refresh --seed (ai commad dile database a 
    //jodi kono database thake tahole sob drop hoye jabe database ekebare first j look thake
    // oi look tate chole asbe ABONG AKHN J DATABASE TI CREAT KORECHE SETA RUN HOBE)
    

// AUTHOR TABLE A KI KI ASE : (id, name, bio)
// BOOK TABLE A KI KI ASE : (id, title, author_id(foreign()->constrained()), price->integer()->deafult(0))

// use DB; QUERYBILDER niye jodi kaj kori tahole db namok ekti (facade) ase ja controller a
     // use korenite hobe

    // LETS'S START


// ************SELECT ALL DATA FROM BOOKS TABLE************
function index1(){
          // **SQL a amra query korar jonno likhtam select * from table_bookes but query builder a likhbo
// Controller a METHOD ER MODDE : $books = DB::table('books')->get();
// AKHN RETURN KORBO $BOOK K : return($books);/return response($books);/return response()->json($books);
      // -->AI TIN VABEI AMRA RETURN KORTE PARI BUT JSON IS MUCH BATTE TO DISPLY
// AUTHORS ER SOKOL DATA DEKHTE CAHILE SELECT KORTE CAHILE
    // $authors =db::table('table_authors')->get();
    // RETURN AUTHORS : return response()->json($authors);
    $books = DB::table('books')->get();
    // return $book;
    // return response($book);
    return response()->json($books);
    
}
    //count() *****************COUNT OF BOOKS/AUTHORS*****************

function index2(){
    // *****************COUNT OF BOOKS/AUTHORS*****************
      // COUNT OF AUTHORS(authors tabile kototi data ase ta dekhte cahile) : 
    //$count = db::table('books')->count();
    // RETURN COUNT : return response()->json($count);
      // BOOK count korte chaile just author er jaigai book dibo
      $books = DB::table('books')->count();
      $author = DB::table('books')->count();
      return response()->json($author);
    //   return response()->json($books);
      


}


// ****************FIRST 2 COLUM/ARTICAL DEKHTE CAHILE****************
   function index3(){
     // $book =db::table('tableName')->limit(2)->get();
            //  avabeo hobe maybe codum juggest koreche// $book = db::table('books')->first();
            //  avabeo hobe maybe codum juggest koreche// $author = db::table('authors')->first(2);
    // RETURN BOOKS : return response()->json($book);
    // JA SQL A : SELECT * FROM table_books LIMIT 2
    $firatTwoColum = DB::table('books')->limit(2)->get();
    return response()->json($firatTwoColum);
   }
// limit(2)->offset(2)-get()****************FIRST ER PORER 2TA BA 2TA COLUM DEKHABE ****************
       function index4(){
        // SQL A : SELECT * FROM table_books LIMIT 2, 2;(avabe offset boledei 2number er porer 2ta book dekaw in sql)
    // JAJA QUIRIBUILDER DIYE HOBE : $book = DB::table('table_books')->limit(2)->offset(2)-get();
      // -->akhane limit(3) dile 3ta row show korbe  
      // --->offset(2) dile 2number row er por theke dekhabe 
      //----> SO : akhane offset() thik kore dicche kotha theke dekhabe ba kotonumber row er por theke
    //   dekhabe ABONG LIMIT TAR POR THEKE SOW KORBE JOTOTI ROW LIMITE DIYE DEWA HOBE
       
      $after2column = DB::table('books')->limit(3)->offset(1)->get();
      return response()->json($after2column);
      //akhaen limit set kortese kototi column dekhabe r offset thik kortese koto column por thke
     //   dekhabe
 
    }

// *****************WHERE ID=1 COLUM DEKHTE CAHILE****************
    function index5(){
        //$books = DB::table('table_books')->where('id',1)->get();
    // RETURN BOOKS : return response()->json($books);)

    $books = DB::table('books')->where('id',3)->get();
    return response()->json($books);
    // where diye amra id ba jekono field serch korte pari
    //sijonno just where er vitore quetetion a id ba field diye ki use kore khujte chai
    //  bole dile e hobe
    }

// *****************WHERE ID < 5 COLUM DEKHTE CAHILE****************
    function index6(){
        // $BOOKS = DB::table('table_books')->where('id',"<",5)->get();
    // RETURN BOOKS : return response()->json($BOOKS);

     $booksWherelessThen5 = DB::table('books')->where('id',">",5)->get();
     return response()->json($booksWherelessThen5);
    //  avabe amra where wuery te conditional sign use korte pari 

    // where er vitor(sinle quetation er vitoe jake serch kortesi take dibo then comma
    // diye quetion er vitore conditiona sign dibo comma diye number)
    }

// *****************WHERE ID <=5 COLUM DEKHTE CAHILE****************
    function index7(){
        // $books = BD ::table('table_books'(->where('id',"<=",5)->get();
        // RETURN BOOKS : return response()->json($books);

       $books = Db::table('books')->where("id","<=",3)->get();
       return response()->json($books);
    }


// **********MULTIPLE CONDITION WITH WHERE (where id <=5 and price<=14) COLUM DEKHTE CAHILE****************
function index8(){
        // *ata amra 2ta way te korte pari :
    // 1)condition gulu array akare korte pari 
    // $books = DB::table('table_books')->where(['id',"<=",5], ['price',"<=",14])->get();
    // RETURN BOOKS : return response()->json($books);

    // 2)MULTIPLE WHERE USE KORE KORAJAI like:
    // $books = DB::table('table_books')->where('id',"=",5)->where('price', "<=",14)->get();
    // RETURN BOOKS : return response()->json($books);
    // jodi or conditon dite chaile tahole price where er age just of bosbe ata othoba ota

    //$multipleCondition = DB::table('books')->where(['id',"<=",5], ['price',">=",14])->get();
    $multipleCondition = DB::table('books')->where('id',"<=",3)->where('price',"<=",200)->get();
    return response()->json($multipleCondition);//array er where kaj koreni
}

// **************WHERE ER SATHE COLUMN NAME DIYEO SERCH KORAJAI***********WHEREpRICE =12
    function index9(){
        // where price =12 (totha jar price 12take dekhaw)
    // $books = DB::table('table_books')->where('price',12)->get();

    // BUT ATAKE AVABEO LIKHA JAI wherePrice(12) totha jar price 12 take dekhaw shudu
     // $books = DB::table('table_books')->wherePrice(12)->get();
     // RETURN BOOKS : return response()->json($books);
    $whereId = DB::table('books')->wherePrice(122)->get();//kaj koreni

    }



// whereBetween ************ID 3 THEKE 7 PORJONTO DEKHTE CAHILE***********
    function index10(){
        // where book id >=3 and book id <=7 3THEKE BORO 7THEKE CHOTO BA 7ER SOMAN SO 3THEKE 7PORJONTO 
    // ATA AMRA 2VABE KORTE PARI: 
    
    // 1)whereBetween use kore (jar modde shudu koto theke koto dekhbo ta bole dibo)
       // $book = DB::table('table_books')->whereBetween('id',[3,7])->get();
       // RETURN BOOKS : return response()->json($book);

    // 2)multiple where a condition apply kore
       // $book = DB::table('table_books')->where('id',">=",3)->where('id',"<=",7)->get();
       // RETURN BOOKS : return response()->json($book);
    
       //  1)  ata ekta way
       //$books=DB::table('books')->where('id',">=",3)->where('id',"<=",7)->get();
        
    //    1)  ata ditio way whereBetween
        $books = DB::table('books')->whereBetween('id',[3,7])->get();
       return response()->json($books);
    }

// *******************where id == 3 OR id == 7 COLUM DEKHTE CAHILE****************
    function index11(){
        // ATA AMRA 2VABE KORTE PARBO

    // 1)WHERE IN USE KORE :
    // $books = DB::table('table_books')->whereIn('id',[3,7])->get();
    // RETURN BOOKS : return response()->json($books);

    // 2)orwhere use kore :
    // $books = DB::table('table_books')->where('id',3)->orwhere('id',7)->get();
    // RETURN BOOKS : return response()->json($books);

    //1) whereIn for orwhereor er kaj korbe 3 or 7 er modde
    $books = DB::table('books')->whereIn('id',[3,7])->get();
    // WHEREIN USE KORLE SHUDU 3 & 7 
    $BOOKS = DB::table('books')->where('id',3)->orwhere('id',7)->get();
    //ata dileo 3number row abong 7 number row e ase
    return response()->json($BOOKS);

    }
// where created_at = null ***********whereNull COLUM DEKHTE CAHILE****************
    function index12(){
        // $books = Db::table('table_books')->whereNull('created_at')->get();
        // JEKHANE JEKHANE CREATED_AT NULL ASE jodi segulu dekhte chai tahole where use korte pari
        $books = Db::table('books')->where('created_at',null)->get();
        return response()->json($books);
    }
    

//max('field_name')->get();**************max price colum ber korte hole******
    function index13(){
        // $max = DB::table('table_books')->max('price');
        // (sob gulu boi er modde sob theke beshe damer boitir price show korbe shudu) not all fiels
        // RETURN BOOKS : return response()->json($max);

        $maxbook = DB::table('books')->max('price'); //OUTPUT :1000
        //return response()->json($maxbook);

        // $max variable k use kore totha price=1000 k use kore oi field er sokol data niye asbo:
       // $maxprice = DB::table('books')->wherePrice($max)->get();
       // RETURN BOOKS : return response()->json($maxprice);

      $books = DB::table('books')->wherePrice($maxbook)->get();
      return response()->json($books);
    // OUTPUT : [{"id":5,"title":"do wat do you want","author_id":1,"price":1000,"created_at":null,"updated_at":null}]
      
    }



// order by (ascendig hole kichoi dite hobena and descendig hole DESC USE KORBO)************orderBy('field_name')->get();
    function index14(){
    // (ORDER BY asc) : like amra cacche book er title er modde a theke z porjonto dekhbo==('title')->get();(==ascending(asc hole field name er por r asc lagbena )
    // ORDER BY DESC : like amra cacche book er title er modde z theke a porjonto dekhbo==descending('title','desc')->get()==field name er por desc boledite hobe
    
    // $books = DB::table('table_books')->orderBy('title')->get();
    // RETURN BOOKS : return response()->json($books);

    // $books = DB::table('table_books')->orderBy('title','desc')->get();
    // RETURN BOOKS : return response()->json($books);
    // AKHANE TITLE ER JAIGAI ID DILE BORO SONKHATI AGE ASBE CHOTO SONKHA PORE ASBE

    $books = DB::table('books')->orderBy('title')->get();
    // return response()->json($books);
    $BOOKS = DB::table('books')->orderBy('id','desc')->get();
    return response()->json($BOOKS);
    // assending hocche a-z serial 1-100 serialize
    // descending hocche z-a 100-1
    }

// limit() in descending : *************descending a jodi limit use korte chai****************
    function index15(){
        // *like pice desc = totha boro pric age asbe 
    // $book = Db::table('table_books')->orderBy('price', 'desc')->get();
    // $book = Db::table('table_books')->orderBy('price', 'desc')->get()->limit(1);
    //--->akhn desc er prothom boro price wala colum e asbe shudu

    $books = DB::table('books')->orderBy('price')->limit(4)->get();
    // return response()->json($books);
    // PROTHOM 4ta table er data asche jader price choto theke boro akare sajano
    // karon amra orderBy(price) a limit(4)boleche jar mane prothom 4ta row

    $BOOKS = DB::table('books')->orderBy('price','desc')->limit(3)->get();
    return response()->json($BOOKS);


    }
// first()***first use koreo amra desc er shudu prothom colum e ante pari ete kore limit()->get() lagbena r
   function index16(){
        // $books = Db::table('table_books')->orderBy('price', 'desc')->first();
        // ektu boro sokha e asbe shudu

        $books = DB::table('books')->orderBy('price','desc')->first();
        return response()->json($books);
        // OUTPUT : {"id":5,"title":"do wat do you want","author_id":1,"price":1000,"created_at":null,"updated_at":null}
        // akhane ekti matro row asche jar value sobtheke boro karon first() use koreche
   }


// *************JOIN WITH AUTHOR AND DISPLAY AUTHOR NAME***************


//JOIN
//DB::table('মেয়ে books')
//->join('ছেলে author' + 'মেয়ের বারির মেয়ে books.author_id' ,+ 'ছেলের বারির ছেলে author.id')


    function index17(){
    //  **akhane books er title abong author er name dekhabe shudu 
    //  $books = Db::table('books')
    // ->join('authors', 'books.author_id', '=', 'authors.id')
    // ->select('books.title', 'authors.name')->get();
    // return response()->json($books);

    // amra ata ke avabeo likhte pari as authors_name
    // ->select('table_books.title', 'table_authors.name as authors_name')->get();
    // totha authors_name : diye name suru hobe
       
    $books = DB::table('books')
    ->join('authors', 'books.author_id', '=', 'authors.id')
    // ->select('books.title', 'authors.name ')->get();
    ->select('books.title as sironam','authors.name as authors_name')->get();
    return response()->json($books);
// as ect diye amra field er name change kore display korte pari like sironame:do what to do
//authors_name diye name suru hobe authors_name : "saihan"
// OUTPUT : [{"sironam":"what to do?","authors_name":"hello"},

    }

// author id & books id soho dekhte chaile(totha books.title authors.name books.id o authors.id ) eksathe aste chaile
    function index18(){
    // $books = DB('table_books')->join('authors', 'books.authors_id','=','authors.id')
    //->select('books.title', 'authors.name as authors.name',books.author_id','books.id')->get();)

    $books = DB::table('books')
    ->join('authors','books.author_id', '=','authors.id')
    ->select('books.title','authors.name','books.author_id as authors_id','books.id as books_id')->get();
    return response()->json($books);
    }

// ********author id jar 1 shudu matro se asbe*********where('author_id',1)
       function index19(){
        // join a where use kore shudu matro author 1 a jara ase tader niye asbo
        // akhaen j sokol books author 1 er sathe connect hoyeche ba author 1 k select koreche 
        // books author_id te se sokol fiels asbe akhane ami akhn porjonto sokol books gulu author
        //  1 a diyeche so ai sokol books gulu asche akhane

        
    //     $books = DB::table('books')
    //     ->join('authors','books.author_id', '=', 'authors.id')
    //     ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
    //     ->where('author_id',1)->get();
    //     return response()->json($books);

    }
    // ****jekono quiryBuilder query k amra sql query te transfer korte pari*******->toSql()
    
    function index20(){
        //akhane amra j join quey ta likheche atar sapekkhe sql query ki hoto ata jodi amra
           //dekhte chai tahole get() er poriborte toSql() dile e sql quey asbe 
           //JEMON : $books = DB::table('books')->join('authors', 'books.author_id', '=', 'authors.id')->select('books.title', 'authors.name')->toSql();

        // uporer join query er sql query formate ki hobe ta chole asbe
        $books = DB::table('books')
        ->join('authors','books.author_id', '=', 'authors.id')
        ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
        ->where('author_id',1)
        ->toSql();
        return response()->json($books);

        // OUTPUT SQL : "select `books`.`title`, `authors`.`name`, `books`.`author_id` 
        // as `author_id`, `books`.`id` as `books_id` from `books` inner join `authors` 
        // on `books`.`author_id` = `authors`.`id` where `author_id` = ?"

        // uporer query builder er sql query formate holo output ja toSql() use kore petepari
       }

//***whereNotIn (totha sokol book dekhbo jader author id 3number na)************

    function index21(){
    //totha oisokol book gulu amra dekhbona jajer author id 3
    // authorere sokol book dekhbo shudu id 2 er books gulu batdiye
     
    $books = Db::table('books')
    ->join('authors', 'books.author_id', '=', 'authors.id')
    ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
    ->whereNotIn('author_id',[1])
    ->get();
    return response()->json($books);
// whereNotIn(er modde mustbe array er modde id dite hobe )tanahole error dibe dise akhane ekbar
//    OUTPUT : [{"title":"understanding program","name":"raihan","author_id":3,"books_id":8},
// {"title":"eat program","name":"saihan","author_id":2,"books_id":9}]

// AKHANE ID ONE er modde sokol books author id 2 o 3 te ekti kore 2ti book add
// koreche ai 2ta e outpute asche

}

// find max price books and books where price between 120 and 300
function index22(){
    // akhane max price er books gulu asbe abong j sokol books price 120 theke 300 er 
    // modde ase se sokol books gulu o asbe

    $max1 = Db::table('books')->max('price');
    $books = DB::table('books')
    ->join('authors','books.author_id','=','authors.id')
    ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id','price')
    ->wherePrice($max1)
    ->orwhereBetween('price',[120,300])
    ->toSql();
    return response()->json($books);

    // OUTPUT : [{"title":"what to do?","name":"hello","author_id":1,"books_id":1,"price":122},
    // {"title":"nothing to do?","name":"hello","author_id":1,"books_id":2,"price":222},
    // {"title":"nothing to do","name":"hello","author_id":1,"books_id":4,"price":122},
    // {"title":"word hard","name":"hello","author_id":1,"books_id":6,"price":199},
    // {"title":"work first","name":"hello","author_id":1,"books_id":7,"price":120},
    // {"title":"eat program","name":"saihan","author_id":2,"books_id":9,"price":2001}]


// sql query for this query is :"select `books`.`title`, `authors`.`name`, `books`.`author_id` 
// as `author_id`, `books`.`id` as `books_id`, `price` from `books` inner join `authors` 
// on `books`.`author_id` = `authors`.`id` where `price` = ? or `price` between ? and ?"
}

// INNERJOIN : 
// MANE  Ai table j record gulu ase oi table a j record gulu ase segulu k amra
//  eksathe kore dekhte pari
function index23(){
// innerjoin
    $books = DB::table('books')
    ->join('authors','books.author_id','=','authors.id')
    ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
    ->get();
    return response()->json($books);

    // akhaen id 1,2,3 totha 3ti author er book gulu e dekhte pacche
}
// LEFTJOIN
// prothome j table tar kotha age bola hobe se table ta prity pabe 
// se table tar sob record  thakbe tarpor j table tar kotha bola hobe se table tar row gulu thakbe
// sekhete author er jodi data na o thake sekhetre null holeo dekhabe

    function index24(){
        // akhaen author age asche so suthor er priority bashe akhane author er sokol field asbe
        $books = DB::table('authors')
        ->leftjoin('books','books.author_id','=','authors.id')
        ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
        ->get();
        return response()->json($books);

        
    }

    // RIGHTJOIN
    // RIGHT JOIN : o aki vabe kaj kore jake age dewa hobe tak pririty bashe hobe
    function index25(){
        $book = DB::table('books')
        ->rightjoin('authors','books.author_id','=','authors.id')
        ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
        ->get();
        return response()->json($book);
    }

// ####################### INSERT DATA ON TABLE ##############################

      function insert(){
        DB::table('authors')->insert([
            'name'=>'rokib',
            'bio'=>'medicine leaning is tough'
        ]);
        // insert hoyegese

        $newAuthor = DB::table('authors')->whereName('rokib')->get();
        // akhane $newAuthor er maddome amra j data ti insert koreche ta just dekhear
        //  jonno ai query ta koreche o return kore dekheche j insert hoyeche 

        return response()->json($newAuthor);
        
    }

// ####################EK e sathe author o books tabile data insert ####################
    function addauthorAndBooks(){
    // sejonno ingertGetId namok ektu method ase jake use kore amra ata korte pari
    // JE PROCEDURE HOBE : DB::table('authors')->insertGetId([])
    // ---->akhane author a jokhn amra data insert korbo tokhn ekti variable 
    //---->a DB:tablle()rekhe insertGetId([]) er vitore array akare data insert korbo 
    //-----> ETE KORE AUTHORE J ID TA JOMA HOBE SE IDTa insertGetId([]) use korate variable a store hobe j
    //-----> variable a amra ai query ta rekheche 

    // DB::table('books')->insertGetId([]) : akhn books insert korar somoi insert([])er vitore
    // --->array akare data insert korbo just authoe_id te variable ti use korbo j variabl tite
    // --->amra author insert query chaliyeche jate authorere id ache tahole e oi othorere id te 
    //---->notun book add hoyejabe books table a 
        $authorid = DB::table('authors')->insertGetId([
            'name'=>'robin',
            'bio'=>'dont west time and importand word'
        ]); //author insert hoye gese

        DB::table('books')->insert([
            'title'=>'word harder how much you can success will not come by flying',
            'author_id'=>$authorid
        ]); // books o insert hoyegese

    // $newauthorANdBooks er maddome just sokol data niye asche abr thats it
        $newauthorANdBooks = DB::table('books')
        ->join('authors','books.author_id','=','authors.id')
        ->select('books.title','authors.name','books.author_id as author_id','books.id as books_id')
        ->get();
        return response()->json($newauthorANdBooks);
    }

// ###################UPDATE BOOKS TABLE PRICE 1000 WHEREID = 10################

    function update(){
        // avabe where use kore jekono field update korajabe akhane ekti item update
        //  koreche chaile sokol field update korajbe
        DB::table('books')->whereId(10)->update([
            'price'=>1000
        ]);//update hoyegeche 


        $showprice = DB::table('books')->whereId(10)->get();
        return response()->json($showprice);
        //$showprice er maddome just updated table ti ene show koreche
    }

// #######################DELETE BOOKS TABLE WHEREID = 1 ######################
//OTHOBA #######################DELETE BOOKS PRICE > 200#############wherePrice('>',200)->delete();

function delete(){
    DB::table('books')->whereId(1)->delete();
    // DB::table('books')->where('price','>',200)->delete();

    $books = DB::table('books')->get();
    return response()->json($books);

//OUTPUT: [{"id":4,"title":"nothing to do","author_id":1,"price":122,"created_at":null,"updated_at":null},
// {"id":6,"title":"word hard","author_id":1,"price":199,"created_at":null,"updated_at":null},
// {"id":7,"title":"work first","author_id":1,"price":120,"created_at":null,"updated_at":null}]
// akhane 200 er choto j data gulu ase 120,199,122 shudu ai data gulu ase baki sob delete hoyegese
}
// akhaen wherePrice('>',200)->delete(); kore delete korle books table er maximum 
// item chole jabe row delete hoyejabe 
// ****trpr jodi php artisan migrate:refresh --seed command ti dei tahole sokol data abr chole asbe

}
