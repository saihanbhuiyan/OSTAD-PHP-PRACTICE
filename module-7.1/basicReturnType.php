<?php
// what is basic return type?
// ** 1. kono function theke ja return hobe ta ki type hobe (int, string, float, bool, array, object, etc) ta nirdharon kore
// ** 2. kono function ja return kore ta oi function er soman hoi like a=10 ba 10=a 2tai ek akhane a holo function k bujhano hoeche

// function a return type kivabe dibo?
// ** 1. function name() hen : colon then return type (int ,float,string, ect) then curly breaket{}

function addtwointeger($number1, $number2):int{
      return $number1+$number2;
}
$result = addtwointeger(10,20);
echo $result;
//akhane result function k respresent kore jar value 30 so ai 30 e hocche function  totaha result er soman.
//  akhn jodi result er sathe r o 30 jog kori tahole 6o asbe
echo "<br>";
$finalresult = $result+30;

echo "function ja return kore ta oi function er soman example $finalresult" ;
