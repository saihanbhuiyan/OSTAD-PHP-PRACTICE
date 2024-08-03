<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Module18class2PDFqueryBuilderPrerecordVideoALlQuerysController extends Controller
{//JOIN
//DB::table('মেয়ে books')
//->join('ছেলে author' + 'মেয়ের বারির মেয়ে books.author_id' ,+ 'ছেলের বারির ছেলে author.id')


    function index(){
        //first() Retrieving Single Row(totha ekti row niye asa select kore)
        $result = DB::table('books')->first();
        // return $result;

//pulck() Retrieving List Of Column Values TOTHA TABLE ROW THEKE COLUMN PUNORUDDHAR BA NIYE ASBE
         $result = DB::table('books')->pluck('title','author_id');

        $result = DB::table('books')->pluck('title','author_id');
        // return $result;
        //OUTPUT : 
        //   "1": "Harry Potter and the Prisoner of Azkaban",
        //   "2": "A Storm of Swords",
        //   "3": "It",
        //   "4": "The Girl with the Dragon Tattoo"
       //BOOKS TABLE THEKE AUTHOR_ID O TITLE SELECT KORE NIYE ASCHE pulck() use kore


//Aggregates(max(), min(), avg(), sum())
           $max = DB::table('books')->max('price');
           $min = DB::table('books')->min('price');
           $avg = DB::table('books')->avg('price');
           $sum = DB::table('books')->sum('price');
        //    return $max;

 
//Select Clause (USE KORE AMRA SPECIFIC COLUMN SELECT KORTE PARI PULCK() ER MOTO)
        //$result = DB::table('books')->select('title','author_id')->get();
        // return $result;
        //OUTPUT :[
        //   {
        //     "title": "Harry Potter and the Chamber of Secrets",
        //     "author_id": 1
        //   },

//DISTINCT unugue data select korar jonno use hoi hotepare unigue email ect ect
        $distinct = DB::table('books')->select('title','author_id')->distinct()->get();
        //return $distinct;

// Inner Join
        $innerJOIN = DB::table('books')
        ->join('authors', 'books.author_id', '=', 'authors.id')
        ->select('books.title', 'authors.name')
        ->get();
       //return $innerJOIN;

// left Join
        $leftJOIN = DB::table('books')
        ->leftJoin('authors', 'books.author_id', '=', 'authors.id')
        ->select('books.title', 'authors.name')
        ->get();
       //return $leftJOIN;

//right join 
        $rightJOIN = DB::table('books')
        ->rightJoin('authors', 'books.author_id', '=', 'authors.id')
        ->select('books.title', 'authors.name')
        ->get();
       //return $rightJOIN;

//cross join
        $crossJOIN = DB::table('books')
        ->crossJoin('authors')
        ->select('books.title', 'authors.name')
        ->get();
       //return $crossJOIN;

//Unions
    //The union method takes two arguments: the first argument is the 
    //--->first query, and the second argument is the second query.
    //The two queries must select the same co
        
       $query = DB::table('books')->where('id',"<",5);
       $union = DB::table('books')->where('price','<',15)->union($query)->get();
       //return $union;

//Basic Where ClausesThe where() method allows youto filter the results.
    //    Laravel Query Builder
    //    = (equal to)
    //    != (not equal to)
    //    < (less than)
    //    <= (less than or equal to)
    //    > (greater than)
    //    >= (greater than or equal to)
    $quey = DB::table('books')->where('id',"<",5)->get();
    //return $quey;
    


//Advance Where Clauses
     //1.The orWhere method to join a clause to the query using the or operator.
     //2.The whereNot and orWhereNot methods may be used to negate a given group of query constraints.
     //3.The whereBetween method verifies that a column's value is between two values .
     //4.The whereNotBetween() method verifies that a column's value lies outside of two values.
     //5.The whereBetweenColumns method verifies that a column's value is between the two values of two columns in the same table row.
     //6.The whereNotBetween() Columns method verifies that a column's value lies outside the two values of two columns in the same table row.
     //7.The whereIn() method verifies that a given column's value is contained within the given array.
     //8.The whereNotIn() method verifies that the given column's value is not contained in the given array.
     //9.The whereNull() method verifies that the value of the given column is NULL.
     //10.he whereNotNull() method verifies that the column's value is not NULL.
     //11.The whereDate() method may be used to compare a column's value against a date.
     //12.The whereMonth() method may be used to compare a column's value against a specific month.
     //13.The whereDay() method may be used to compare a column's value against a specific day of the month.
     //14.The whereYear() method may be used to compare a column's value against a specific year.
     //15.The whereTime() method may be used to compare a column's value against a specific time.
     //16.The whereColumn() method may be used to verify that two columns are equal.

//1.The orWhere() method to join a clause to the query using the or operator.
      $oewhere = DB::table('books')->where('id',"<",5)->orWhere('price',"==",14)->get();
     //  return $oewhere;
      //output : prothom 3ta row asche mane prothom condition kaj koreche

//3.The whereBetween method verifies that a column's value is between two values .
      //between 1 and hoi 10theke 20 porjonto show koro amn specific rows show korar jonno use hoi
      $between = DB::table('books')->whereBetween('price',[1,12])->get();
    //   return $between;
      //OUTPUT : [
      //   {
      //     "id": 2,
      //     "title": "Harry Potter and the Chamber of Secrets",
      //     "author_id": 1,
      //     "price": 12,
      //     "created_at": null,
      //     "updated_at": null
      //   },
      //   {
      //     "id": 7,
      //     "title": "The Shining",
      //     "author_id": 3,
      //     "price": 12,
      //     "created_at": null,
      //     "updated_at": null
      //   }
      // ]

//4.The whereNotBetween method verifies that a column's value lies outside of two values.
     //totha 10-20 ai sonkhar vitorer rows gulu chara baki gulu dekhabe
     $norBetween = DB::table('books')->whereNotBetween('price',[1,15])->get();
     //return $norBetween;

     //OUTPUT :[
     //   {
     //     "id": 5,
     //     "title": "A Clash of Kings",
     //     "author_id": 2,
     //     "price": 16,
     //     "created_at": null,
     //     "updated_at": null
     //   },
     //   {
     //     "id": 6,
     //     "title": "A Storm of Swords",
     //     "author_id": 2,
     //     "price": 18,
     //     "created_at": null,
     //     "updated_at": null
     //   },
     //   {
     //     "id": 9,
     //     "title": "The Girl with the Dragon Tattoo",
     //     "author_id": 4,
     //     "price": 16,
     //     "created_at": null,
     //     "updated_at": null
     //   }

    //  AKHANE whereNotBetween()price 1-15er vitore price gulu betitio baki price gulur row
    //---> asche akhane obosisto 3ti row baki chili 3ti e asche

//7.The whereIn() method verifies that a given column's value is contained within the given array.
     //kono ekti specific column er value kotobar asche ta ber korte pari whereIn() use kore
     //JEMON : price 12 asche 2jaigai 14asche 2jaigai
     $wherein = DB::table('books')->whereIn('price',[12,14,18])->get();
     //akhane whereIn(er vitore arrayte chaile ekta sonkha use korte pari abr chaile onek sonkha o use korte pari)
    //  $wherein = DB::table('books')->whereIn('price',[12])->get();
     //return $wherein;
    //  OUTPUT : 'price',[12,14,18] ai price gulu kotobar kore asche tai dekhoyeche


//8.The whereNotIn() method verifies that the given column's value is not contained in the given array.
       $whereNotIn = DB::table('books')->whereNotIn('price',[12,14])->get();
       //return $whereNotIn;
       //OUTPUT : 'price',[12,14,18] ai price guluR ROW BETITO BAKI PRICE GULUR ROW KONT KOTOBAR
       // ASCHE TAI ENE DIYECHE

//9.The whereNull method verifies that the value of the given column is NULL.
     //j field gulur value nei totha null ache si value gulu k niye asbe 
     $whereNull = DB::table('books')->whereNull('price')->get();
     //return $whereNull;
    //  akhane kono price null nei so kono outout asenai

//10.he whereNotNull method verifies that the column's value is not NULL.
    $whereNotNull = DB::table('books')->whereNotNull('price')->get();
    //return $whereNotNull;
    // akhn books table er sokol field/row asche


//11.The whereDate method may be used to compare a column's value against a date.
    //whewData() method use kore amra date diye field fer kore ante pari
    //-->like 2024-07-01 taikhe books table a j rows gulu antri hoyece ta dekhaw 

    $whereDate = DB::table('books')->whereDate('created_at','2024-07-01')->get();
    // return $whereDate;
    // OUTPUT : [{"id":10,"title":"eeeeeeeeeeeeeeee","author_id":1,"price":11,"created_at":"2024-07-01 15:00:41",
    // "updated_at":"2024-07-02 15:00:41"}]
    //1ta field e ache jodi r o rows thakto ai date er oigula o asto


//12.The whereMonth method may be used to compare a column's value against a specific month.
    //whereMOnth() method use kore amra month diye oi masher sokol Row/field niye aste parbo
    $whereMonth = DB::table('books')->whereMonth('created_at','07')->get();
    //return $whereMonth;
    //OUTPUT : [
     // {
    //     "id": 10,
    //     "title": "eeeeeeeeeeeeeeee",
    //     "author_id": 1,
    //     "price": 11,
    //     "created_at": "2024-07-01 15:00:41",
    //     "updated_at": "2024-07-02 15:00:41"
    //   },
    //   {
    //     "id": 11,
    //     "title": "hhhhhhhhhhh",
    //     "author_id": 4,
    //     "price": 121,
    //     "created_at": "2024-07-03 15:00:41",
    //     "updated_at": "2024-07-04 15:00:41"
    //   }
    // ]
    // akhane 07 a ki ki data entri hoyeche oi data gulu asche


//13.The whereDay method may be used to compare a column's value against a specific day of the month.
      //whereDay() use kore oi diner sokol data ber kore ante parbo
      $whereDay = DB::table('books')->whereDay('created_at','01')->get();
      //return $whereDay;
     // OUTPUT :[{"id":10,"title":"eeeeeeeeeeeeeeee","author_id":1,"price":11,
     //"created_at":"2024-07-01 15:00:41","updated_at":"2024-07-02 15:00:41"}]
     //--> 01 a ki ki data entri hoyeche oi data gulu asche ekti data e cholo so 


//14.The whereYear method may be used to compare a column's value against a specific year.
      //whereYear() use kore oi yer sokol data ber kore ante parbo
      $whereYear = DB::table('books')->whereYear('created_at','2024')->get();
      //return $whereYear;
      //OUTPUT :[{"id":10,"title":"eeeeeeeeeeeeeeee","author_id":1,"price":11,
      //"created_at":"2024-07-01 15:00:41","updated_at":"2024-07-02 15:00:41"}]

//15.The whereTime method may be used to compare a column's value against a specific time.
      //specific time diye oi timer data ber kore ante pari
      $whereTime = DB::table('books')->where('created_at','15:00:41')->get();
      //return $whereTime;


//16.The whereColumn method may be used to verify that two columns are equal.
     //
     $whereColumn = DB::table('books')->whereColumn('author_id','author_id')->get();
     //return $whereColumn;


//Ordering, Grouping, L  
     //1.The orderBy method allows you to sort the results of the query by a given column
     //2.The latest and oldest methods allow you to easily order results by date
     //4.The groupBy and having methods may be used to group the query results
     //5.The skip and take methods to limit the number of results returned from the query or to skip a given
     //6S.number of results in the query

//1.The orderBy method allows you to sort the results of the query by a given column
//THERE HAVE 3TYPE OF ORDER 1)assending(1-10 a-z) 2)decending(10-1 z-a) 3)random(random order)
     //1) assenging orderBy()use korle e hoi asc use korte hoina
    //choto theke boro(1-10) small theke capital(a-z) sob assending order a hobe
    $orderBy = DB::table('books')->orderBy('price')->get();
    //return $orderBy;
    // 2) descending desc orderBy(,'desc')er vitore desc use korte hobe
    $desc = DB::table('books')->orderBy('price','desc')->get();
    //return $desc;
    // 3) random (amnio randomly e ase so use na korleo chole ai method)
    $random = DB::table('books')->inRandomOrder()->get();
    //return $random;



//2.The latest and oldest methods allow you to easily order results by date
    $latest = DB::table('books')->latest()->get();
     //return $latest;
     $oldest = DB::table('books')->oldest()->get();
     //return $oldest;


//4.The groupBy and having methods may be used to group the query results
     //
    //  $groupBy =DB::table('books')->groupBy('price')->get();
    //  return $groupBy;
    //  //$having = DB::table('books')->groupBy('price')->having('price','>',10)->get();
    //  //return $having;


 //5.The skip and take methods to limit the number of results returned from the query or to skip a given
    //skip(5) joto sonkha dewa hobe tototi id skip korbe suru theke = so 5ta id skip korbe
    //take()joto sonkha dewa hobe skip kora id er por theke toto sonkhok id take korbe joto sonkha 
    //-->take(er vitor dibe 2) = 5 er porer 2ta niye dekhabe
    $skip = DB::table('books')->skip(2)->take(2)->get();
   //return $skip;
   //akhane skipp koreche 2ta so prothom 2ta id bat dibe take (2)so porer 2ta nibe

        
//6S.number of results in the query    
     $number = DB::table('books')->count();
    //  return $number;



//Insert Statements
    //Insert method used to insert records into the database table.
    //The insert method accepts an array of column names and values

    // $insert = DB::table('books')->insert([
    //     'title' => 'new title',
    //     'author_id' => 1,
    //     'price' => 10,
    //     'created_at' => now(),
    //     'updated_at' => now()
    // ]);
    
    $showInsert = DB::table('books')->where('price',10)->get();
    //return $showInsert;


//Update Statements
    //Update existing records using the update method

    $update = DB::table('books')->where('price',10)->update([
        'price' => 10,
        'title'=>'life is not for fun only',
        
        'updated_at'=>now()
    ]);

    $showUpdate = DB::table('books')->where('price',10)->get();
    // return $showUpdate;

//Update or Insert Statements
    // updateOrInsert method may be used. to update an existing record in the database or create it
    //--> if no matching record exists.
       $updateOrInsert = DB::table('books')->updateOrInsert([
        'title'=>'everything is imporant do it with fun',
        'price'=>20,
        'author_id'=>5,
        'created_at'=>now(),
        'updated_at'=>now()

       ]);
       $showUpdateOrInsert = Db::table('books')->where('price',20)->get();
       //return $showUpdateOrInsert;
       //OUTPUT : [
       //   {
       //     "id": 22,
       //     "title": "everything is imporant do it with fun",
       //     "author_id": 5,
       //     "price": 20,
       //     "created_at": "2024-07-14 17:01:39",
       //     "updated_at": "2024-07-14 17:01:39"
       //   }
       // ]


//Increment & Decrement
     //The query builder also provides convenient methods for incrementing or decrementing the value
     // of a given column.
     //$inc =  DB::table('books')->where('price',20)->increment('price',10);
     //$showIncrement = DB::table('books')->where('price',30)->get();
    
    $decriment = DB::table('books')->where('price',30)->decrement('price',10);
     $showdecrement = DB::table('books')->where('price',20)->get();

    //  return $showdecrement;


//Delete Statements
    //The query builder's delete method may be used to delete records from the table to truncate
    // an entire table use the truncate method

    $delete = DB::table('books')->whereBetween('id',[23,31])->delete();
    $show = DB::table('books')->where('price',20)->get();
    
    // return $show;


//PAGINATE
     //Display simple "Next" and "Previous"
     //links in your application's UI, use the
     //simplePaginate method to perform a
     //single, efficient query
     //***paginate use kore ekti page a nirdisto sonkhok data
     //--> niye aste pari jar maddome clint pc softly kaj korte
     //--> parbe kono loading chara 

     $paginate = DB::table('books')->simplePaginate(3);

    //  return $paginate;

//CUSTOM PAGINATE
     $paginate = DB::table('books')->paginate(
        $perPage = 4, $columns = ["*"], $pageName = "pageItem"
     );

    return $paginate;
   //outPut : {
   //       "id": 5,
   //       "title": "A Clash of Kings",
   //       "author_id": 2,
   //       "price": 16,
   //       "created_at": null,
   //       "updated_at": null
   //     }
   //   ],
   //   "first_page_url": "http://127.0.0.1:8000/pdf?pageItem=1",


    }



}
