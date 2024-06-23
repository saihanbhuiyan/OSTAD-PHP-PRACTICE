<?php
// construct() function is the first execution properties
// ***02-class er object toiri korar somoi amra dekheche j new class-name() er por 
// --->ekti paranthesis() ba first breaket diyeche ja construct() k nirdesh kore ba execute kore
// ----> ba construct function k hit kore

// ***construct function k adakore call korar proyojon hoina jehetu class name er por 
// --->paranthesis breacket dite hoi r ta construct function k nirdesh kore so atakeu 
// ---->alada kore call korar pyojon hobena auto execute hobe

// ***so class er vitore jokhn auto execute kono properties/method/function er proyojon hobe jake call 
// --->korte hobena object toirir sathe sathe sathe je auto execute hobe 
// ---->tahole sekhane amra construct() function use korte pari

//construct()
// how to write/creat construct function?
// ***Ans : class er vitore first access-modifire public/private/protected then method/function
// -------> then double-underscore (__) then construct(with paranthesis breaket)

class car{
    public $color = "red";
    public function __construct(){
        echo "must have auto light, auto sensor, auto wiper";
    }
    public function driving(){
        echo"this is my car";
    }
    public function washing(){
        echo "i am wahsing this car";
    }
}
$obj = new car(); //output :must have auto light, auto sensor, auto wiper

// ekti class e kebol ekti construc() function use korajabe
// **akhane dekhte pelam j object toirir sathe sathe construct function execute hoye gese

