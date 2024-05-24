<?php
// array in for loop

$fruits = ['apple','poteto','banana','mango','pinaple','orange'];

// $allfruits = count($fruits);
// for($i=0; $i<$allfruits; $i++){
//     echo $allfruits[$i];
// }
for($i = 0; $i<count($fruits); $i++){
    echo $fruits[$i]."<br>";
}echo "<br>";echo "<br>";echo "<br>";


// array in foreach loop
echo"array in foreach loop <br>";
echo "<br>";
foreach($fruits as $value){
    echo $value."<br>";
}