<?php
// ***str_replace() function use kore kono string a ekti word k onno ekti word er sathe replace kora jai
// -->ajonno prothome str_replace($old_word,$new_word,$string) then j old word k replace korbo seta
// ---> then j new word diye replace korbo seta then string/string variable ti

$string = "hello saihan chang your name";
$replace = str_replace("saihan", "abdullah", $string);
echo $replace;