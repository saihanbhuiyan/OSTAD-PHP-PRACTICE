<?php
// what is by value
// ** By default function a argument value pass kore jate kore jodi function er vitore argument er man poriborton korahoi ta jeno output a poriborton na hoi atai hocche by value

// what is by reference?
// ** function er bahire poriborton totha out put a poriborton korar jonno reference use korte hoi paramiter er surute &(ampersand)sign use kore ja reference k nirdesh kore akhn jodi function er vitore argument er man poriborton korahoi tahole bahire poriborton hobe atai by refrence


// By value
$a = 10;
$b = $a;
$b = 20;
echo $a;
echo"<br>";
// By reference
$a = 10;
$b = &$a;
$b = 20;
echo $a;
echo"<br>";

// by value
echo"by value <br>";
$name = "saihan bhuiyan";
function byvalue($name){
    echo $name;
    $name = "saihan vaya";
}
byvalue($name)."<br>";
echo"<br>";
echo $name; //akahne $name er valu bahire poriborton hobena karon akhane refrence nei ata saihan bhuiyan e show korbe 2tatei


// by reference


echo"<br>";
echo"<br>";
echo"by refrence <br>";
function byrefrence(&$name){
    echo $name;
    $name = "saihan vaya";
    
}
byrefrence($name)."<br>";
echo"<br>"; 
echo $name; // akhane function er out put asbe saihan bhuiyan abong eccho $name er out put asbe saihan vaya karon paramiter a & diye refrence koredewa hoyeche