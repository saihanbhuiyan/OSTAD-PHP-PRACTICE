<?php
// array_map() function use kore amra array kono array er protita element niye notun ekti array toiri korte pari


$num = [1,2,3,4,5,6,7,8,9,10];
$newnum = array_map(function($num){
    return $num*2;
},$num);
print_r($newnum);
?>