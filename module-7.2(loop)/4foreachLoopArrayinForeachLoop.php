<?php
// what is foreach loop?
// foreach loop is used to loop through an array
// **-->ja shudu matro array niye kaj kore array element niye kaj kore(bestfor array)

// how to write foreach loop?
// foreach loop declar korar jonno prothome 
//--->1)foreach like paranthesis dite hobe
// ----2)paranthesis er vitore array name ba varia ble dite hobe
// -----3)thepe as sign diye ektu varia dibo jar modde array er value gulu ba element gulu bosbe
// ------4)then curly{}breaket er vitoe logic

$fruits = ['apple','poteto','banana','mango','pinaple','orange'];
foreach($fruits as $val){
    echo $val."<br>";
}