<?php
// character counts mean kono ekti sreing kon character kotobar asche ta ber kora

// character count by for loop
$msg = "hello world";
$characterCount = [];

for($i=0; $i<strlen($msg); $i++){
    if(isset($characterCount[$msg[$i]])){
        $characterCount[$msg[$i]]++;
    }else{
        $characterCount[$msg[$i]] = 1;
    }
}

print_r($characterCount);
// describ of this for loop
// --->akahen total character ase 7ti space soho 8ti so loop chalale i protibar ek kore barbe 
// ----->kintu $character =[] er modde j arry rekheche akhane total array count hobe 8ti
// ------>karon j character ditiobar asche seta just 1kore jog korbe r notun character asle arrayte character 1arbe
// ------>jodi kono character 2bar ba 3bar ase sekhetre [$ms[$i]]++ a jabe tanahole else a chole jabe 1 nibe
// -->avabe $i ek kore barte thakbe notun character asle else a chole asbe r j character ditiobar asche ta r else a jabena ++ kore abr $i+1 niye debug start korbe
echo "<br>";

// character count by foreach loop
$characterCount = [];
$character = str_split($msg);
foreach($character as $value){
    if(isset($characterCount[$value])){
        $characterCount[$value]++;
    }else{
        $characterCount[$value] = 1;
    }
}   
print_r($characterCount);

// description of foreach loop
// --->prothome ekti faka array rekheche jar modde value gulu bosbe ba count kore sonkha gulu bosbe
// --->for each jehetw array niye kaj kore tai amra $msg k str_split kore array te venge nisi protita character k
// --->trpr foreach kore character gulu k $valute rakhlam abong bole dilam j character ditiobar asbe tar sathe e jog koro
// ---->r jodi notun character hoi tahole 1 bosiye daw abog samne agaw abr paile 1 jog korio