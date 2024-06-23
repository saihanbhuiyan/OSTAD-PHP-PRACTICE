<?php
// ***construction function er boisisto
// --->1.construction function is the first execution property
// --->2.it execute automatically
// --->3.it can't return anything

// ***Kono construct() function a jokhon kono peramiter pass korahoi tokhn take 
// ---->deperamitarised construction function boli.like : construct();

// ***KOno construct function a jokhon kono peramiter pass korahoi tokhn take 
// ---->peramitarised construct function bole.like : construct($a,$b,$c);

// *****************peramitarise construct() function***********************

class car{
    public $CarColor = "red";
    public function __construct($color,$b,$c){
        $this->CarColor = $color;
        echo $b+$c;
    }
    public function driving(){
        echo "this is my car";
    }

}
$obj = new car("green",10,20);
echo"<br>";
echo $obj->color;
$obj->driving();

// ***akhane construct()er vitor j peramiter dewa hoyeche ta shudumatro auto executeer jonno dewa
// ---->peramiter er moddome hoini tar ekti bises karon ase

// ***********construct er vitor peramier pass korar karon************
// **1. properties value change using construct property:->  $this->color = $color;
//---->totha construct property(peramiter) use kore amra class er vitor kono property value change korte pari
// ---->*sejonno boledibo 
// --->$this->then jar value change korbo(color) = $color; ( construct property ba peramiter )
//***--->Execute korar somoi o object er por ->tir diye Object->construct peramiter;
//***---->value ta boject toiris somoi class er perenthesis breket er vitor diye dibo


