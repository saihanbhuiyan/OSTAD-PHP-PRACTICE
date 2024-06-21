<?php
// explode()

// explode() use korahoi string k array te convert korar jonno
// ***(1)--->ajonno boledite hobe ki base kore string k array te convert korbo 
// 2ti word er modde j space ba take use kore explode( ba array te convert) korte pari 
// abr comma (,) diye o explode korte pari totha ja e thakbe ta use kore e amra exlpode korbo


$name = "saihan bhuiyan";
$array = explode( " ",$name);
print_r($array); //output: Array ( [0] => saihan [1] => bhuiyan )

// akhane $name a 2ta word er modde space ase so akhane " " diye convert koreche