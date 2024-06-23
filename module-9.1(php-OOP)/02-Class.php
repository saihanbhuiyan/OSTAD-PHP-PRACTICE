<?php
// what is class?
// Ans: class hocche onekgulu method ba code er ekti somosti ja feature er eekti somabesh.

//*** jevabe likhbo?
// --->(1)first class namok build in function nibo then class name diye curly breaket dibo
// --->(2)class er vitore Variable ba function declar korte hole access 
// --->modifire(public/private/protected) use korte hobe

// ***class er sokol utility ba podsomuho niye ekti blueprint ba sketch hoi matro ja osompurjo
// ----> shudu ekti chitro matro

// ***object : class er chitro bastobayon hoi object toirir maddome 
// ---->Object toiri korte hoi kivabe? Ans : new( keyword ) then class name like (new class_name)
// ---->ai object tike ekti porichoi dewa hoi $variable er moddome jemon $obj=new class_name;
// ----> akhn ai class ti tar purnota peyeche tar porichoi peyeche 
// ---->***akhn tar porichoi ba Variable er por (->) avabe tir chinho diye class er vitorer sokol 
// ----->utilityes ba methods ba variable gulu k ene kaj korte parbe 

// class

class car{
    public $color = "red";
    public function driving(){
        echo "this is my car";
    }
    public function washing(){
        echo"i am washing my car";
    }
}
// ***ai puro class o tar variable o methods gulu niye just ekti blue-print/chitro aka hoyeche jar
// ----> kono ostitto nei akhn ai blue-print k akar dite hobe porichoi dite hobe 
// ----->object toirir maddome tahole ai variable o method gulu k access korte parbe use korte parbe


$obj = new car(); //object toiri hoyeche abong tar porichoi dewa hoyeche $obj name.
$obj->color;
echo"<br>";
$obj->driving();
echo"<br>";
$obj->washing();
