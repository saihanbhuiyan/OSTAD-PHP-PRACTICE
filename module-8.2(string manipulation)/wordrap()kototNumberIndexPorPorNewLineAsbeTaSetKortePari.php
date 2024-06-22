<?php
// wordwrap() use korahoi koto number index por por new line nibe ta set korar jonno
// --->ajonno wordwrap($str,10,"\n") prothome wordwrap (tarvitor prothome variable name then indexnumber,then "/n")

// specific index number por por new line
$str = "hello i am saihan i am truing to be a good web engineer this is my fream and i will ger successfull one day insha-allah";
echo wordwrap($str,20,"\n");

//-->akhetre boro word gulu vangbena borong new line niye nibe
                /*hello i am saihan i
                am truing to be a
//output:       good web engineer
                this is my fream and
                i will ger
                successfull one day
                insha-allah*/
echo"<br>";
// akhetre false use korahoi boro kono word porle jeno ta na vange tai 
echo wordwrap($str,20,"/n",false);