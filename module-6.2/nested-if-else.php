<?php 
  
  echo "what is nested if else ? <br>";
  echo "Ans : Nested hocche amn ekti if else condition jekhane akti if ba else er vitor r ekta if else dhukejai <br> -->Maximum khetre else er peter vitor vitre r ekti if else chole ase avabe bar bar choltei thake ladder er moto<br> -->nested er vitore dhuka jai kintu ber howa jaina";
echo "<br>";
echo "Example <br>";

$score = 55;
$grade = "";

if ($score >= 90) {
    echo "A";
}
else{
    if ($score >= 80) {
        echo "B";
    }
    else{
        if($score >= 70) {
            echo "C";
        }
        else{
            if($score >= 60) {
                echo "D";
            }
            else{
                if($score >= 50) {
                    echo "E";
            }
            else{
                echo "F";
            }
        }
    }
  }
}
echo "<br>ULLEKKHO : nested if else a sokol statement if conditon diye e hoi tobe else er peter vitor";

?>