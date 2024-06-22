<?php
// array_filter() function er kaj hocche callback function use kore array er modde jekono logic apply korar jonno bebohar hoi

// find even number using array_filter()

$array = [1,2,3,4,5,6,7,8,9,10];
$even = array_filter($array,function($evnumber){
     
    if($evnumber % 2 == 0){
        return $evnumber;
    }
});

print_r($even);echo"<br>"."<br>";
//output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

// find odd number using array_filter()

$array2 = [1,2,3,4,5,6,7,8,9,10];
$odd = array_filter($array2,function($odnumber){
   if($odnumber % 2 != 0){
    return $odnumber;
   }
});

print_r($odd);
//output: Array ( [0] => 1 [1] => 3 [2] => 5 [3] => 7 [4] => 9 )