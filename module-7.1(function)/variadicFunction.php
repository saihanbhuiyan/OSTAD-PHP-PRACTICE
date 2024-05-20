<?php
// what is variadic function?
// (...) this is spread operator
// *function a parameter er modde amra variable ullekh kore dei jar mane hocche amra a koiti value e argument theke receive korte parbo 
//     ---->kintu jodi kono variable er age ...spread dei tahole amra joto sonkhok icche value argument er maddome pass korte parbo abong paramiter er maddome receive korte parbo
//       ------>tobe ai value gulu se array akare receive koreb.

function sum(...$num){
    return $num[1];
}
$index = sum(1,2,3,4,5,5);
echo $index;


// function totalSum(...$numbers){
//     $number = 0;
//     for($i=0;$i<count($numbers);$i++){
//         $number +=$numbers[$i];
//     }
//     return $number;   //akhane return loop a koreni karon return loop korena function kore jodi loop function er modde thake
// }
// echo totalSum(1,2,3,4,5,6,7,8,9,10);
