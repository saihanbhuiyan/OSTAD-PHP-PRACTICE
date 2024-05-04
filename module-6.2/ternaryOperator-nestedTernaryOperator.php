<?php 
  echo"what is ternary if else ba ternary operator ? <br>";
  echo "Ans : ternary operator if else er moto condtion niye kaj kore tobe if else likhte hoina tai eke ternary\simplify condition bole <br>";
  echo "<br> -->if er poriborte (?) question mark bose condition er por EX = (x>1)?";
  echo "<br> -->else er poriborte (:) colon bosbe <br>";
  echo"-->else a parenthesis () breaked diye suru korte hobe <br>";
  echo "<br>Example<br>";

  $age = 20;
  $msg = "";

  ($age>18) ? ($msg = "you are adult") : ($msg = "you are minor");
echo $msg."<br>";


echo "<br>example 2<br>";

$userName = "saihan";
$password = "saihan123";

echo ($userName == "saihan" && $password == "saihan123") ? "login" : "login failed";
echo"<br>";
// Nested ternary operator 

echo ("<br> what is nested ternary operator ?<br>");
echo "Ans : Nested ternary operator hocche nested if else er moto jekhane ekti condition er vitor r o ektu if else conditon chole ase<br>";
echo"-->maximum khetre else er vitor notun if else ase if diye conditon apply hou else er vitore abr if else chole ase  <br>";
echo "-->tobe difference hocche nested ternary operatior a if else asena if er poriborte ? else er poriborte : <br>";
echo" -->else a parenthesis () breaked diye suru korte hobe <br> <br>";


echo "Example nested ternary :-<br><br>";

$score = 69;
$grade = "";

$grade = ($score >= 90) ? "A" : (($score >= 80) ? "B" : (($score >= 70) ? "C" : (($score >= 60) ? "D" : "F")));
echo $grade."<br>";
echo "*** -->ai ternary conditon k chaile direct echo korte pari ba er value gulu ekta variable a rekhe echo korte pari ba puro ternary operator ba condition k ekta variable  a rekhe echo korte pari";

?>