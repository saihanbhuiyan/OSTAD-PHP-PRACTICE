<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formValidation;

class Module16Class1Controller extends Controller
{
    // from 14.1 form submission redirect to check & show submited data
    // CONTACK BLADE WEB.PHP : REDIRECT AND 14.1 THEKE METHOD NIYE AKHAN THEKE VALIDATION KORBO
    function redirectHandleForm(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        return redirect(route('contact.get'))->with(["success"=>"dats successfully submited","name"=>$name,"email"=>$email]);
    }

    // ***************************FORM VALIDATION M-16-CLASS-1************************
     
    // VALIDATION : like kono ekti form er name/email/password valid hote hobe 
    // **---->NAME (minimum 3 character o maximum 30 character) er hote hobe
    // ---->Name er sathe jeno kono newmerical character na thake(1,2,3,4,5,)
    // ---->Name stictly prohibet hobe LIKE(admin, ect)j name gulu shudu manage
    // ---->ment er person der thakbe amn name hote parbena
    // **file er khere pdf er jaigai img ba img er jaigai pdg dite pabena
    // ***password : er khetre (minimum8character)er hote hobe
    // ---->maximum 18 & alphanewmeric charater thakte hobe ect

    // upore form niyeche ja M-14-Class-1 theke Blade contat abond web redirect o controller chilo 14.1


function checkValidation(formValidation $request){//(formValidation a jaitehole ctrl a chepe dhore click on it(akhane (formValidation $request) ta asche validation korar jonno jar jonno ekti request file creat korte hoyeche r oi file tike akhane use korar jonno Request use kore formValidation use kora hoyeche)
        // **akhane request ta submit howar age amra validation ta korenibo
        //-->ja Request objet er $request diye korbo 
        // SEJONNO : ekti variable declar kore = bolbo j
        // --> $request->validate abong trpr ekti array pass 
        // korbo([jar vitoe laravel er sokol validation part
        // --> dibo input file er name a array akare]); thats all ja raw php diye korte onek condition er
        // ---> moddo diye jete hoto

   // $valitdation = $request->validate([    //$request er modde FORM VALIDATIONe REKHECHE VAlIdTION CODE GULU TAI ai codegulu k COMMENT KORE NICHE FORM VALIDATION USE KORECHE
               // rules gulu likhbo form er input gulu modde j name ase 
               // -->take use kore jemon name="name" email ="email"
               // -->akhane amader form hocche contack.blade.php
               
               // **jehetw ata ekti array er modde key hobe inpute file name
               // -->abong key hobe laravel velidation guli Like
   
   
               // "name" => "required|min:3|max:10|alpha|not_in:admin|starts_with:A|ends_with:z",
               // "email" => "required|email",
               // "price"=>"required|numeric|between:10,100|min:10|max:100",
               // VALIDATION FILE A REKHECHE TAI AKHAN THEKE COMMENT KORE VARIABLE A REQUEST THEKE VALIDATED KOORO
   
               // *************VALIDATION RULES meaning*******************
               // **required : mane hocche age jemon name chara submit korte parto akhn r parbena 
               // -->akhn jodi form a jai r name na diye submit kori tahole success msg asbena tar mane data submit hoinai
               // **jodi ki error hoyeche seta dekhate chai tahole ki korbo seta contact.blade a likheche sekhane dekho
               //*** | :validation a ekti validation rule diye ditio rule add korar jonno |=pipe ba ai khara sign ti dite hobe protiti rules er por joto sonkhok rule e deina kno
               //*** */ |email : valid email hote hobe tanahole show korbe(The email field must be a valid email address.)
               // min:3 : name minimum 3 character er hote hobe
               // max:10 : maximum 10 character er hote hobe
               // |alpha : totha alpha character er thakte parbena(1,2,3) dile msg dibe(The name field must only contain letters.)
               // not_in:admin  = toha admin newajabena no not_in:er por jekono name dile ta r nibena bolbe (The selected name is invalid.)
               // -->akhane ,comma diye diye chaile onek name dewajabe like not_in:admin,password,saihan,ect,ect
               // |starts_with:A =totha A character diye start korthobe tanahole error msg dibe(The name field must start with one of the following: A.)
               // |ends_with:z = totha z character diye end korthobe tanahole error msg dibe(The name field must end with one of the following: z.)
        // AI SOKOL RULE GULU AMRA the bascik->validation->available validation rules a pabo
                    // PRICE FIELD VARIFICATION : "required(thakte e hobe)|numeric(number hotehobe)|between:10,100(minimum10 abong maximum 100 hote hobe)|(abr avabeo dewajabe)min:10(minimum 10tk hotehobe)|max:100(maximum100 hoteparbe)"
                
        // *****************php artisan make:request fileName for creat validatin FIle*****************************
        //--> AMN JODI HOI J AMR AROKOM R O FORM BA FILE ASE JEKHANE AMN VALIDATION E KORTE HOBE BA EK E VALIDATION BAR BAR
        // --> KORTE HOCCHE SEKHETRE LARAVELE VALIDATION RULE NAME EKTI OPTION ASE JA CREAT KORE JAR MODDE SOKOL VALIDATION 
        // --> REKHE AMRA USE 
        
        
        // CREAT VALODATION FILE : cmdte/terminale likhte php artisan make:request fileName tahole httpte request
        //-->name ekti foldre creat hobe abong tar vitore fileName.php name r ekti file open hobe jar modde
        //--->2 ta importand method thakbe(1. public function authorize(): bool  2. public function rules(): array)
        //--->Function rules() ER MODDE AMRA VALIDATION GULA LIKHBO BA REKHE DIBO
        
        // ****************USE REQUEST-->FORMVALIDATION(http er vitore request namok folder a formvalidation ase)******
        // --->formValidation k use korbo kmn kore? 
        // Ans :3ti dhape amra ai formvalidation file use korte pari 
        // --->1)formValidation a public functoin rules() name j method ase ai mehode sokol rules gulu past kore dibo
        // ---->2)controller er upore formValidation class use korbo(use App\Http\Requests\formValidation)
        // 3)j method a validation korbo se methode Request Object er poriborte formValidation object use korbo abomd sokol validation soriye ektiVariable a boledibo 
        // $validation = $request->validated();
   
   // ]);
        
        $validation = $request->validated();//**kaj korbena bolbe unothorised tai ja koralagbe niche 
        // upore prothome array er maddome validation koreche ja comment kore rekheche akhn validation gulu k
        //-->rakhar jonno (php artisan make:request formValidation) creat kore se file a function rules() methode
        //-->validation validation gulu copy kore bosiyecha ja http->request->formValidation a rekhe upore use kore
        //-->Checkvalidation method a Request er poriborte formValidation bosiye formValidation er Object $request
        //-->a bole diyeche j $request->validated() ja ekti variable a assign koreche

        // *********************AUTHORISED BA LOGIN NA THAKLE KAJ KORBENA TAI JA KORTE HOBE----
        //-->ata kaj korbena bolbe unothorised karon se chai j amra autorised hoi ba login thaki
        //-->atake authorised korar jonno upore authorize methode false k tru kore dibo tahole e
        //-->authorise hoyejabe kaj korbe

        $name = $request->input('name');
        $email = $request->input('email');
        return redirect(route('contact.get'))->with(["success"=>"dats successfully submited","name"=>$name,"email"=>$email]);
    
        // direct msg gulu $validation a rakhte chaile
        // print_r($validation);
        //hoi redirect to msg othoba validation j kono ekta
        // output :Array ( [name] => Aasasz [email] => saihanbhuiyan549@gmail.com [price] => 12 )
}

// **************************MIDDLEWARE**************************
// MIDDLE WEARE : LARAVEL 11 ER AUTO MIDDLE WEARE SET HOTO BUT 11 A MIDDLE WARE REQUIRED TOTHA JEKHANE
// JEKHANE LAGBE SKHANE MIDDLE WWARE USE KORTE HOBE

// ***MIDDLE WEAR ER JONNO 2TA METHOD DECLAR KORBO ABONG TADER ROUTE K PROTITBAR MIDDEWARE NA BOLE
//-->EKTI ROUTE::MIDDLEWARE NIBO JAR MODDE ('THROTTLE:2,1')USE KORE ERROW SIGN DIYE->GROUP->FUNCTION()
//-->{A METHOD ER ROUTE GULU REKHE DIBO TAHOLE PROTITA METHOD ER ROUTE E MIDDLEWARE ER ONTORVHUKTO HOYE
//-->JABE THROTTLE ER ONTROVUKTO HOYEJABE}
// web.php te hello o hello2 route 

function hello(){
    return "hello world1";
}
function hello2(){
    return "hello world2";
}

// **************LOGIN NA THAKLE MIDDLE WARE ACCESS KORTE DIBENE SEJONNO AMRA :****** 
// -->Route er pore errow->sign diye bolbo middleware('auth'); tahole r amader middle ware access korte 
//--->dibena route a

// jehetu amader akhono database ba form creat hoini so amara ekti middle ware creat kori jar modde 
// --->boledite pari j (return you are not authorized) ekti condition apply kore 
// --->if(!request->user(){return->response('')});kono user login asekina ta amra check korte pari
// ---> if($request->user()) r login nei mane if(!$request->user())
// --> OTHOBA amra ekti password set koredite pari like if($request->input('password')!=1111);hoi(mane passrodJodi
// --> na mile) tahole se bolbe you are unauthorized r jodi password pai tahole se route a dhukte dibe /secretPage
// --------->WEB.PHP: TE PREVOUS secrec route use korbo atakorar jonno

// *******************sokol controller k created secretMiddleware er modde ante pari amra********************
// ***** AMRA J SECRET MIDDLEWARE TI CREAT KORECHE ATJODI SOKOL MIDDLEWARE ER UPOR APPLY KORTE CHAI 
// -->TAHOLE BOOTSRAP ER VITORE APP.PHP TE WITHMIDDLEWARE METHODE(MIDDLEWARE $MIDDLE WARE A ) METHOD ER VITOR
// --->LIKHBO $middleware->append([secretMiddlewareM16Cls1::class]); tahole akhn porjonto joto middle ware creat
// -->koreche ai project a sokol middle wae a ai secretMilldewarem16Cls1 condition ti chalu hoyejabe
//----> ?password=1111 na dewa porjonto unlock hobena
// ***********upore use secrateMiddllewareM16Cls1 bole dite hobe app.php te*************************

}
