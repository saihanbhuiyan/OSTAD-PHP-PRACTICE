<?php
// str_split() use korahoi kono string k character wise venge array te convert korar jonno
// --->protita character ek ek ti index number a bosebe  

// str_split() example

$str = "Hello World";
$characters = str_split($str);
print_r($characters);
echo "<br>"."<br>";

//convert string to array character wise by str_split()
$name = "saihan vaya";
$cha = str_split($name);
print_r($cha);