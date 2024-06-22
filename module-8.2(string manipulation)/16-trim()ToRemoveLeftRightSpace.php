<?php
// trim() use kkorahpi kono string er left and right side er space remove korar jonno
// ---->trim korle 2paser space e chole jabe

// remove space in  a string

$name = "  saihan  ";
echo trim($name)."<br>"; 

//trim() function use kore kono ektu string er jekono ongso bat dite pari ba string theke jekono character ba word bat dite diye return korte pari
// -->tobe akhane shudu kono specific word er character remove korte parboa
// ---->ba sentence er surur o sesher word theke character remove korte parbo
// remove character
$str = "hello saihan";
echo trim($str, "hn")."<br>";