<?php
// what is variable scope 
// ** 1. function er bahire j variable ase ta function er vitore kaj korena atai variable scope ja nirdharon kore konti access korbe konti korbena 
// ** 2. amra 2vabe bahire variable k function er vitore access korte pari
// number 1)==>function er vitore peramiter pass kore access korte pari ja local hoyejabe access er por

// example variable scope in function 1way
  $name = "saihan";
  $age = 22;
  function greed($n, $a){
    echo "my name is $n and my age is $a paramiter";
  }
  greed($name,$age);//paramiter diye access korle argument pass korte hobe
  echo"<br>";

// number 2)==>function er vitore global use kore bahirer variable k function er vitore ese access korte pari ba use korte pari (ja bad habid ostad boleche)

// example variable scope in function 2way

$n = "raihan";
$a = 30;
function myfunction(){
    global $n;
    global $a;
    echo "my name is $n and my age is $a global";
}
myfunction();//global use korle argument lagena karon vitore niye asche global key use kore


