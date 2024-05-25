<?php
// what is multidimentional array?
// * onekgulu array niye jokhn ekti array gothito hoi tokhn amra take multidimentional array boli.
// * multidimentional array is a array in which the elements are stored in the form of row and column
// ** multidimentional array holo amn ektu array jar row and column 2tai thake,

// ***how to creat multidimentional array?
// ** normal array er moto ekti varia ble nibo like $student tar modde array declar korbo eta builin function array(); ba squere []; breacket diye diye 
// ----->akhn ai array er vitor joto sonkhok icche array nibo setaw build in function array() ba squere [] breacket diye 
// ----->protita sub array er por comma hobe

$multidimentionalArray = array(
    array('a','b','c'),
    array('d','e','f'),
    array('g','h','i')
);

$multidimentionaSquare = [
    ['a','b','c'],
    ['d','e','f'],
    ['g','h','i']
];

// How to access multidimentiona array?
// * multidimentional array mattrix er moto thake so amra mattrix er moto kore multidimentiona arra k access korte pari
// ** mattrix er moto [][] prothom square breaket a bolte hobe 
// ----->prothom breaket a bolte hobe koto number child k acche totha koto number array ba row k accha 
// ------>abong 2baDitio number breacket a boltehobe sei array er koto number index k access korte cacche
// ..............Example..........
// *** protita row ba array index suru hoi 0 theke jodi [1][2] access kortechai tar mane child 1 ja o theke suru hoyeche totha 2number array/row abong [2] totha 1number child er 2number index ja o theke count hoyeche index(0,1,2)


echo $multidimentionalArray[1][2];//out put f
echo $multidimentionaSquare[2][2]; //out put i
echo"<br>";
// how to use foreach loop in multidimentional array?
// *multidimentiona array te foreach loop nested foreach er moto kaj korbe totha
// ---->ekti foreach er vitor r ekti foreach nite hobe  
// ----->sekhane parant array er jonno ekti foreach loop usr kore array variable theke value gulu ekti $variable a rakhte hobe
// ------>abong poroborti foreach er vitor sei variable theke as $key o $value ber korte hoeb
// ------->tar por echo kore key ba value ba uboi access korte parbo r index a shudu value dibo

// foreach in miltidimentional array 
foreach($multidimentionalArray  as $variable){
    foreach($variable as $value){
        echo $value."<br>";
    }

}
