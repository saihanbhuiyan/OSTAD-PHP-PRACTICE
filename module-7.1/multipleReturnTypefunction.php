<?php
// multiple return type function
// ** 1. name sune e bujha jacche j function a amra eker odhik return type diye dite pari
// ** 2. protita type er por | (vertical pipe)ai khara oprator ti use korte hobe

// function a return type use korle must return use kore function value k return kore function er bahire echo korte hobe
function addmultiple($a, $b, $c, $d):int|string|float{
    return $a+$b+$c+$d;
}
 echo addmultiple(1, 2, 3, 4);