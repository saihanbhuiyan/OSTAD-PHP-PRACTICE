<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articalController extends Controller
{
    //Question : router ba url kivabe paramiter accept kore ba data ba dinamic value accept kore?
    //*** :amader route a vibinno somoi vibinno dinamic value pass koralagte pare like id 
    //--->ba page number ba assendint order a dekhaw ect ect LIKE artical/1?page=2&order=ascending ect ect(aguluke bolahoi queryString)
    
    //artical niye jehetu kaj korbo tai ekti artical controller kore nilam php artisan make:controller articaController
     
    // passing id to url/route
    function artical($id){
        // ANS : controller a method er vitore ekti id pass kore dibo ba jai dinamic value url/route
        //---> a pass korbo seta variable akare method a pass kore dibo abong
        //----> Route::get(er viote single curlly breket a without dollar sign 
        //----->sei variable take pass korbo ja controller a method er modde peramiter akare
        //-----> diyeche Like"/artical/{id})", akhn url a /artical/number dile e ta chole asbe
        //** */ Non topical bascik : ULLEKKHO j controller diye dinamic route a curly breaket ekti abong 
        // controller theke view te data pass er somoi double curly
        return"jhhhhhhhhhhhhhhhhhhhhhhh".$id; 
    }
    // route a dinamic page number dekhao
    function pagenumberInROute($pageNumber,$type){
        // artical a page number dibo so akhane method a peramiter pass koreche $pagenumber
        // -->name abong return kore body te ta dekhiyeche ja na dekhaleo hobe ABONG ROUTE A METHODER
        // --->VITORE PERAMITER AKARE PASS KORA VARIABLE TI SINGLE CURLY BREAKET ER VITOR REKHECHE
        // ----> WITHOUT $SIGN

        return "page number is".$pageNumber;

        // akhon jodi type dekhte chai tahole just method a $type variable name peramiter pass
        //--> korbo abong route a curly er vitoe diye dibo LIKE pagenumberInROute($pageNumber,$type)
        
        //*** AVABE AMRA ROUTE A MULTIPLE PERAMITER PASS KORATE PARI
    }

    //QUERY STRING
    //dinamically kivabe peramiter pass kore ta dekheche amra kintu query string k kivabe--
    //---> url a catch korbo ba dhorbo ta dekhbo akhn(ATAW EKTI DINAMIC PART JAR NAME QUERY STRING)
    // function showArtical($pagenumber){

    //     $perpage = request->inout('perpage',10);
    //     $sort = request->input('sort','asc');
    //     return "perpage=".$perpage."pagenumber=".$pagenumber."sort=".$sort;
    // }

    // Route a dinamic value na diye kivabe dinamic value niye asbo?
    // amra cacche kono route a just artical likhle tar id chole asbe Pagenumber
    // Likhlei /2otar page number chole asbe type likhlei tar type/2d chole asbe
    function autoDinamicValueInUrl($id=1){
        // ajonno joto gulu dinamic peramiter pass korbo methode sobgulur dathe dafault value
        // set kore dibo ABONG ROUTE A KURLY BREAKET A ER VITOR EKTI QUESTION MARK DIYE DIBO THATS ALL
      //HOW?  //return "id is".$id."pageNumber is".$pageNumber;

       return "id is".$id;
    }

    // how to add css file in laravel?
    // Ans External CSS : jodi kono extenal css file add korte chai like booststrap.css/machan.css ect tahole HTML file a title er niche jevabe css bosiyeche akhaneo BLADE.PHP templet a title er niche just copy kore ene bosiye dibo
    // Ans Internal CSS : resources folder er vitore jekhane view er kaj kori ba blade er kaj kori sekhane css nake ekti folder ase jar modde amra sokol css file rakhbo
    // QUESTION : internall css file blade a add korbo kmn kore?
    // ans : TITLE  er niche add korbo @vite() namok ekti function ase jae modde file location file name boledilei CSS kaj korbe like $vite('resources/css/app.css');orthad resources er vitore css namok folder a app.css namok file ti kaj koro ba active how
    // --->@vite()function k kaj koranor jonno ki koronio?
    // Ans (npm install): @vite() function k kaj korate hole 
    //--> npm install ai command dite hobe 
    //-->2nd npm run dev command dite hobe npm install er por ja ekbar korlei hobe ekti project a




}
