<?php 
echo"what is sprintf?";
echo "<br>";
echo "Ans : sprint f o printf er moto e tobe sprintf echo er kaj korte parena variable declar korte pare shudu tai take onno kono variable a rekhe echo korte hoi ba direct echo korte hoi";
echo "<br>";
echo "Example <br>";

$name = "saihan";
$age = 23;
$id = 11549;

$output = sprintf("student name is %s and age is %d and id is %d", $name, $age, $id);
echo $output;

echo "<br>";
echo "or echo directly";
echo "<br>";
echo sprintf('student name is %s and age is %d and id is : %d',$name , $age , $id);

?>