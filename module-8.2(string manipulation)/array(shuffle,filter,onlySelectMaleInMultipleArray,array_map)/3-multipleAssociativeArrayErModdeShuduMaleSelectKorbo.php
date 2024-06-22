<?php
// multidimentional associatove array

$student = [
 'saihan' => [
    'class' => '10th',
    'section' => 'A',
    'gender' => 'male'
 ],
 'rinky' => [
    'class' => '10th',
    'section' => 'B',
    'gender' => 'female'
 ],
 'saihan2' => [
    'class' => '10th',
    'section' => 'C',
    'gender' => 'male'
 ]
];

$male = array_filter($student,function($maleperson){
     return $maleperson['gender']=='male';

}); 
print_r($male)."<br>";

// avabe amra jekono information ber korte parbo like section wise class wise jekono vabe 
// associave array theke jevabe information newa hoi akhaneo sevabe e informationa newahobe