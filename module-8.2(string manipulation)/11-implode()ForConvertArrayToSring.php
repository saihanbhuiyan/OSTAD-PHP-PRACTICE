<?php
// implode() function
// implode() use korahoi array k strin a convert korar jonno....
// ***-->ajonno boledite hobe ki base kore string a convert korbo ba
// ----->ki sign use korbo 2ti word k separate korar jonno
// -----> hotepare space( " ") hote pare(,)hotepare(heiphen) ect ect
// *****akhane j character gulu use kori ba sign gulu use kori string theke array te anar jonno ba array theke string a anar jonno eke delimit bole

$array = array("red", "green", "blue", "yellow");
echo implode(".", $array)."<br>";
echo implode("-", $array)."<br>";  
echo implode(" ", $array)."<br>";
echo implode(",", $array)."<br>";

// output
// red.green.blue.yellow
// red-green-blue-yellow
// red green blue yellow
// red,green,blue,yellow
// *****akhane j character gulu use kori ba sign gulu use kori string theke array te anar jonno ba array theke string a anar jonno eke delimit bole


