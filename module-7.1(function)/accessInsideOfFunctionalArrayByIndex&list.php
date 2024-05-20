<?php
// function er vitore kono array k access korte chaile amra 2ta wayte korte par
// ** 1==>array index gulu k variable a assaign kore echo kore
// *** akhetre array gulu k return kore bahire ekti variable a function tike assign kore se veriable theke pete pari index number dhore dhore


// access functional array by index
function getNumber(){
    $output = [5,6,7,8,9];
    return $output;
}
$result = getNumber();
$a = $result[0];
$b = $result[1];
$c = $result[2];
$d = $result[3];
$e = $result[4];
echo"first index number is $a secound $b third $c fourth $d and fifth $e";
$additon = $a+$b+$c+$d+$e;
echo"<br>";
echo "totsl sum of this array is $additon";
echo "<br>";

// ** 2==> list() use kore amra tar vitore paramiter diye array er sokol index a paramiter gulute assign kore output a niye aste pari
// *** akhetre list(er vitore variable assign kore dite hobe joto sonkhok array assign korte chai)abong tar modde function k assign kore dite hobe tahole function er vitorer sokol array vali list er vitorer variable a assign hoyejabe abong amra se varia ble gulu diye dirrectly echo korte parbo
function myfunction(){
    $array = [1,3,5,7,9];
    return $array;
}
list($a,$b,$c,$d,$e)=myfunction();
echo "by using list we can find every single number of functional array very eusyly so the number is : $a-$b-$c-$d-$e";