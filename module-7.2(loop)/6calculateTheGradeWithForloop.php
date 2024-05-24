<?php

$mathmetics = [
    "saihan" =>80,
    "raihan" => 90,
    "ashik" => 100,
    "sabbir" => 70,
    "sohel" => 60,
    "moinul" => 50

];
// grade calculate function

function gradeCalculate($mark){
    if($mark>=90){
        echo "A+";
    }
    elseif($mark<=80){
        echo "A";
    }
    elseif($mark<=70){
        echo "A-";
    }
    elseif($mark<=60){
        echo "B";
    }
    elseif($mark<=50){
        echo "c";
    }
    elseif($mark<=40){
        echo "D";
    }
    else{
        echo "F";
    }
};

$saihan = $mathmetics["saihan"];
gradeCalculate($saihan);echo"<br>";

 $raihan = $mathmetics["raihan"];
 gradecalculate($raihan);

//  avabe protita student er jonnno loop chalate hoccche kintu amra cacche ekti loop use kore sobgulu student er result ber korbo ja foreach diye kora jai
