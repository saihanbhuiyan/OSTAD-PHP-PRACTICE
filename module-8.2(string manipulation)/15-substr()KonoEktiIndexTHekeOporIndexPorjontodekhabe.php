<?php
// substr() use korahoi kono ekti specific index theke opor index porjonto shudu return korbe ba dekhabe
// ***-->ajonno substr($variable, $start, $end) er vitore string er variable trpr j index theke suru hobe se index number
// ----->Abong j index a giye ses hobe se index number dite hobe
// substr()

$name = "saihan vaya i am comming tommorrow";
echo substr($name,4 , 15);  //output : an vaya i am co
echo "<br>";

// *****r jodi ses index dewa na hoi tahole j index number theke suru korbo sekhan theke ses porjonto dekhabe ba retuen korba

echo substr($name,4);    //output :  an vaya i am comming tommorrow
?>