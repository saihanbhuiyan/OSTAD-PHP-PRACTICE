<?php 
 
 echo"what is witch case ? <br>";
 echo "Ans : ekti single value diye multiple possible value er sathe compare kore jokhn ekti siddante powchai tai witch case <br>";
 echo "--> switch case diye amra onek gulu condition k check korte pari <br> <br>";

 echo "likhar niyom <br> like x=10";
 echo "<br>(1)=>ekti variable nibo<br>
 (2)=>switch diye ekti condition apply korbo switch(x = 10){ trpr carly breaket dibo}<br>
 (3)=>trpr curly break er vitore case key use kore tate value rekhe : colon diye trpr protibar echo korbo o break kore poroborti case a jabo <br> case 1:<br>echo <br>break; avabr joto sonkhok icche case nibo <br>(4)=>trpr sokol case newa ses hole else er moto ektu default case use korbo abong echo koredibo <br>default :<br> echo";

 echo "<br>Example switch case<br><br>";

$fruit = "mango";
switch($fruit = "mango"){
    case "apple":
        echo"this is red";
        break;
    case "banana":
        echo "this is yellow";
        break;
    case "mango":
        echo"mango is my favourit";
        break;
    default:
        echo "i love fruits";
}

echo"<br><br>Example 2<br> <br>";
$fruit = 6;
switch($fruit = 6){
    case 1:
        echo"this is one";
        break;
    case 2:
        echo "this is two";
        break;
    case 6:
        echo"six is my favourit";
        break;
    default:
        echo "i love numbers";
} 

?>