<?php
// how to call a anonymus function?
// ** 1. amra jani j anonymus functoin er name thakena abong take call korajaina jekhane e function k likha hoi sekhaene e auto execute hoi.
// ** 2. kintu kono variable a rekhe se variable er maddome amra anonymus functoin k call korte pari o value pass korte pari

// How to write $ declar anonymus function when it is assign to a variable
// ** 1. function k jokhn kono variable a assign korbo tokhn last breacket dite hobena karon tokhn amra variable er modde e value ba argument pathate parbo
// ** 2. function er kaj ses hole functona er bahire varia er por paranthesis breacket er vitore just value dile e hobe.


//anonymus function assign to a variable
$greed = function($name){
    echo "assalamualykum,Thanks for coming Mr:$name.Nice to meet you again";
};
$greed(" saihan abdulla");

echo "<br>";

//variadic in anonymus function sum 1-5
$addition = function(...$numbers){
    $sum = 0;
    for($i=0; $i<count($numbers);$i++){
        $sum +=$numbers[$i];
    }
    echo "the total number of 1-5 is : $sum";
};
 $addition(1,2,3,4,5); 


//  jehetu anonymus function er ekti identity dicche like greed or addition so akhn ete peramiter dewa jabe abong type hinting o dewa jabe;