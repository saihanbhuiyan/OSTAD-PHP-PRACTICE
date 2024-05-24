<?php
// which loop use in associative array?
// ***associative array er khetre shudu foreach loop use hobe r kono way nei
// ---->index array er khetre for loop use korajeto kintu foreach e best for array
// ----->kintu associative array er khetre for loop use hobena shudu matro foreach loop use hobe

// gow to write foreach loop in associative array
// ** 1)foreach likhe paranthesis dite hobe
// ** 2)paranthesis er vitore array name ba varia ble dite hobe
// ** 3)tarpor as sign diye key o value 2tai dite hobe like ($student as $key => $value)


$country = [
    "Bangladesh" => "Dhaka",
    "India" => "New Delhi",
    "USA" => "Washington",
    "UK" => "London",
    "Canada" => "Ottawa",
    "Australia" => "Canberra"
];

// key with value
echo "country and devision <br><br>";
foreach($country as $key => $value){
    echo $key ."=".$value."<br>";
}

// shudu value ba key chaile 
echo"<br>";
foreach($country as $key){//value chaile shudu as $ value hobe
echo $key."<br>";
}