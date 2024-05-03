<?php 
// if else

  echo"what is if else <br> ";
  echo "Ans : if else statement use korahoi condition ba multiple condition check korar joinno <br> -->jodi if statemnt a prapto result na se tahole else korstik prapto result asbe jeno prapto folafole powchano jao <br>";

  echo "<br> example <br>";
// && shoud be match both condition ba statement
  $userName = "saihan";
  $password = "saihan1234";
  if($userName == "saihan" && $password == "saihan1234"){
    echo "login";
  }
  else{
    echo "login Failed <br>";
  }

  echo"<br>";
// || shoud be match one condition ba statement
  $userName = "saihan";
  $password = "saihan1234";
  if($userName == "saihan" || $password == "1234"){
    echo "login";
  }
  else{
    echo "login Failed <br>";
  }
echo"<br>";

  // ladder if-else

 echo "what is ladder if else";
 echo "<br>";
 echo "Ans  : lader if else hocche jokhn multiple conditon k check korahoi tokhn if er moto elseif diye condition check kora hoi jotokkhn na prapto result asbe <br> ---> ladder if-else hocche sirir moto ja ek er por ek astei thake condition niye <br>";
echo"<br>";

echo "example";

echo "<br>";

$mark = 65;
$grade = "";
 
if($mark>=90){
  $grade = "A";
}
elseif($mark>= 70){
  $grade = "B";
}
elseif($mark>= 60){
  $grade = "C";
}
elseif($mark>= 50){
     $grade = "D";
}
else{
  $grade = "F";
}
echo $grade;



?>