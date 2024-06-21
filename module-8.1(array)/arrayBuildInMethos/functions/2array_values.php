<?php
// array_values() function 
// **dedicated for associative array, array value gulu k alada kore dekhai key na shudu value

// array_value()
$student = [
    "student1" => "saihan",
    "student2" => "sakib",
    "section" => "C",
    "class" => "10",
    "id" => "101"
];
print_r(array_values($student));
//output: Array ( [0] => saihan [1] => sakib [2] => C [3] => 10 [4] => 101 )