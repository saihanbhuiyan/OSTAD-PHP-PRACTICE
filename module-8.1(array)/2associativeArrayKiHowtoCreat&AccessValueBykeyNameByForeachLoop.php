<?php
// what is associative array?
// * associative array is a array in which the elements are stored in the form of key value pair ba jugol
// **associative array holo amn ektu array jar key o value 2tai thake,
// *** associative array te value er ekti porichoi thake totha key thake
// ****jemon:- 'firstName'==>"saihan" akhane saihan er ekti porichoi ase j ata holo first name jake key bolahoi eke pair ba jugol o bole

// how to create associative array
// * 1) build in function use kore korajai: array()
// * 2) square bracket use koreo korajai tobe square breaket use kora e valo: [];

// associative array ke json a o convert korajai karon json a o key o valu thake


$country = [
    'Bangladesh' => "Dhaka",
    'India' => "New Delhi",
    'USA' => "Washington",
    'UK' => "London",
    'Canada' => "Ottawa",
    'Australia' => "Canberra"
];

// access value from associative array by key name

echo $country['USA'],"<br>";
echo $country['Bangladesh']."<br>";
echo $country['UK'];
echo"<br>";


// foreach loop in associative array
// access associative value by foreach loop
echo "<br>access associative value by foreach loop<br><br>";
foreach($country as $key => $value){
    echo "$key is a capital of $value <br>";
}