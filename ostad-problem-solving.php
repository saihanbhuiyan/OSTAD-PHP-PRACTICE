<?php 
// module-8
//  econd to Hour:Minute//  Problem Statement
//  Write a program which will take seconds as input and output into hour:minute.
//  Input
//  The input consists of a integer.
//  Output
//  The output will print in the form hour:minute. For example if it takes 130 as input then it will print 0:2.
//  Constraints
//  0 ≤ |S| ≤ 10000
//  Example:
//  Enter number
//  Input:
//  130
//  Output:
//  0:2

// fscanf(STDIN,"%d", $n);

// $houre = floor($n / 3600);
// $remainingSecound = $n % 3600;
// $minute = floor ($remainingSecound /60);
// print $houre." :".$minute;



// (2)
// Concatenate Two String
// বাং
//>>>>>>> 8b6eb86 (type of function advantage & why function)

// Problem Statement
// Write a program where two strings will be given, firstName and lastName, return a single string in the format "lastName, firstName".

// Input
// The input consists of two strings.

// Output
// The output will print a string.

// Constraints
// 0 ≤ |S| ≤ 10000
// Example:
// Enter strings

// Input:
// John Doe
// Output:
// Doe, John 


// <<<<<<< HEAD
// oneway way to solve
// printf("%s %s",$firstName, $lastName);
// echo $lastName."," .$firstName;

// secound way to solve same one with loop
// fscanf(STDIN "%s %s", $firstName, $lastName);
// $output = "";
// =======
// //oneway to solve 
// printf("%s %s",$firstName, $lastName);
// echo $lastName."," .$firstName;

// //secound way to solve
// fscanf(STDIN "%s %s", $firstName, $lastName);
// $output = "";
//>>>>>>> 8b6eb86 (type of function advantage & why function)

// for($i=0; $i<strlen($lastName); $i++){
//     $output = $output.$lastName[$i];
// }
// $output = $output.", ";
// for($i = 0; $i<strlen($firstName); $i++){
//     $output = $output.$firstName[$i];
// }
// print $output;

// $msg = "i love you lokkhi sona pakhi amr";
//  function encrypt($msg){
//     $msg = str_split($msg);
//     $newmsg = "";
//     foreach($msg as $char){
//         $newmsg .=chr(ord($char)+1);
        
//     }
//     return $newmsg;
// }
// echo encrypt($msg);



