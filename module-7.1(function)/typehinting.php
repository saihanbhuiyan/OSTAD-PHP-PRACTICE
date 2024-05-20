<?php
// primative types like(int float string bool)

// typehinting
// *function a a jokhn amra paramiter nei tokhn sadharonoto type bole deina ete kore se jekono value rcv korte kore without error but ete kore amader problem hote pare like onakhankhito value pass hote pare ja korte dewa jaina
// *kintu jodi amra type ullekh kore dei tahole oi specific type of value chara onno kono value r pass korte parbena ete kore amra kankhito out put pabo

function equation(int $one, float $two){
    return $one+$two;
}
$result = equation(1, 2.3);
echo $result;

echo"<br>";
// amra chaile multiple type o boledite pari 
function equation2(int| float| string $a, $b){
    echo $a+$b;
}
equation2("1", 2); 


