<?php
// what is multidimentional associative array?
// * jokhn kono array er vitor akadik associative array thakbe tokhn amra take associative array bolbo
// index array er moto ekti array er vitore onek gulu associative array o thakte pare 

// how to creat multidimentoinal associative array?
// ** normal array er moto e array niye tar vitor ekedhik associative array nile e toiri hoye jabe multidimentional associative array
// ----->array gulu amra as usual build in function use kore o nite pari array() abr square bracket [] use kore o nite pari

$country = array(
    array('bangladesh'=>"dhaka"),
    array('india'=>"new delhi"),
    array('usa'=>"washington"),
    array('uk'=>"london"),
    array('canada'=>"ottawa"),
    array('australia'=>"canberra")
);

$student = [
    ['student1'=>"saihan", 'class'=>"10th", 'section'=>"A",'id'=>"11549"],
    ['student2'=>"raihan", 'class'=>"10th", 'section'=>"A",'id'=>"12549"],
    ['student3'=>"ashik", 'class'=>"10th", 'section'=>"A",'id'=>"13549"],
    ['student4'=>"sabbir", 'class'=>"10th", 'section'=>"A",'id'=>"14549"],
    ['student5'=>"sohel", 'class'=>"10th", 'section'=>"A",'id'=>"15549"],
    ['student6'=>"moinul", 'class'=>"10th", 'section'=>"A",'id'=>"16549"],
];

// ** how to access multidimentional associative array value?
// * multidimentional associative array mattrix er moto thake so amra mattrix er moto kore multidimentiona arra k access korte pari
// ** mattrix er moto [][] prothom square breaket a bolte hobe 
// ----->prothom breaket a bolte hobe koto number child k cacche totha koto number array ba row k accha 
// ------>abong 2baDitio number breacket a boltehobe sei array er kon key k access korte cacche mone rakhte hobe avabe nile totha loop use na kore value access korte chaile ektir beshe key use korajabena 
// ..............Example..........
// *** protita row ba array index suru hoi 0 theke jodi [1]["keyName"] access kortechai tar mane child 1 ja o theke suru hoyeche totha 2number array/row abong ["keyName"] totha je key gulu dewa hobe protita key er value asbe chaile ekta ba sobgulu key dite parbe

echo "access multidimentiona associative array value without foreach loop<br>";
echo $student[1]["student2"]."<br>";
echo $student[1]["section"]."<br>";
echo $student[0]["student1"].$student[0]["class"].$student[0]["section"].$student[0]["id"];
echo "<br>";


// access multidimentiona associative array value with foreach loop

// *multidimentiona array te foreach loop nested foreach er moto kaj korbe totha
// ---->ekti foreach er vitor r ekti foreach nite hobe  
// ----->sekhane parant array er jonno ekti foreach loop usr kore array variable theke value gulu ekti $variable a rakhte hobe
// ------>abong poroborti foreach er vitor sei variable theke as $key o $value ber korte hoeb
// ------->tar por echo kore key ba value ba uboi access korte parbo r index a shudu value dibo
echo "access multidimentiona associative array value with foreach loop<br>";
foreach($student as $variable){
    foreach($variable as $key=>$value){
        echo $key."=>".$value;
        }
}
