<?php
// ascii code
//** */-->protiti character er ekti asciicode ba asciivalue thake jeno a=97 b = 98 c = 99 ....z = 122
//---->abr capital latter er different ascii code like  A = 65 B = 66 C = 67 ....z = 122
// ---->akhn a er ascii code er sathe 1 +jog korle b te porinoto hobe  
// ---->avabe ekti string k array te convert kore protiti character er ascii code er sathe
//      1 jog kore kore sokol character k change kore ekti secrect messeg ba prem potro ba 
//       password toiri korte pari
// ----->***abr jokhn dekhte chaibo tokhn -1biyog koredibo totha decodekorbo tahole 
//        character gulu jar jar jaigai chole asbe


// ascii code encript
$msg = "hello world";
function convert($msg){
   $msg1 = str_split($msg);
   $newmsg = "";                   //output: ifmmp!xpsme
   foreach( $msg1 as $new ){    
    $newmsg.=chr(ord($new)+1);   //chr(ord($new)+1) akahen ord() function string paramiter niye integer value dicche
     }                           //-->abong sei integer valuer sathe ek jog korar por chr()function setake punorai string
     return $newmsg; 
    }                            
                                                                                                      
echo convert($msg)."<br>"."<br>";


//***chr(ord($new)+1) akahen ord() function string paramiter niye integer value dicche
//-->abong sei integer valuer sathe ek jog korar por chr()function setake punorai string
// --->a convert kore puro string k e change kore dicche totha secrect kore dicche 
//***chr() function returns a character from the specified ASCII value.
//--->orthat chr()function specific ascii value theke character return kore                             
//***ord() function takes a string as its only parameter and returns an integer between 0 and 255
//---->orthat ord()function string paramiter hisebe nei kintu integer value return kore




// ascicode decript..

$asci = "ifmmp!xpsme";
function decript($asci){
    $asciarray = str_split($asci);    //output : hello world
    $newasci = "";
    foreach($asciarray as $old){
        $newasci .= chr(ord($old)-1);
    }
    return $newasci;
}
echo decript($asci);