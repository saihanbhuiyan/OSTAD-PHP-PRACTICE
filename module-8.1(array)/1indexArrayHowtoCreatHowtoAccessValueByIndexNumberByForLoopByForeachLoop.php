<?php
// what is index array?
// *** index array value guluke represent kore number diye ja 0 theke suru hoi like:- 0,1,2,3,4,5,6,7,8,9 avabe

// how to create index array
// ** 2vabe creat korajai 
// ** 1)first way :buildin function use kore :- array() 
// example -->$buildin = array(0,1,2,3,4,5,6,7,8,9);

// ** 2)second way : squere breacket[] use kore 
// example -->$square = [0,1,2,3,4,5,6,7,8,9];

// access index array value
// *** index array jehetu number wise thake like 0,1,2,3 so amra index number diye access korte pari

$array = [0,1,2,3,4,5,6,7,8,9];
echo $array[0]."<br>";
echo $array[3];  //avabe protiti index number er value nite pari ba index array k access korte pari

// access index array value with for loop

echo"<br>access array valuewith for loop <br>";
for($i = 0; $i<count($array); $i++){
    echo $array[$i]."<br>";
}


// access index array value with foreach loop
// ** foreach jehetu array er jonno best tai amra foreach loop use korbo ja sohoj o for loop theke
echo "<br>access array value with foreach loop <br>";
foreach($array as $value){
   echo $value."<br>";
}
