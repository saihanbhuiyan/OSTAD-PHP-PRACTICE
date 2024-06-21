<?php
// array_combine() ki o kno?
// ** 2ti array k jigto kore ekti associative array toiri kore

$students = ["saihan", "raihan", "ashik", "sabbir", "sohel", "moinul"];
$studentId = [11549, 12549, 13549, 14549, 15549, 16549];

print_r(array_combine($students, $studentId))."<br>";
//othoba Variable a rekhe o print_r korte pari
echo"<br>";
$combine = array_combine($students, $studentId);
print_r($combine);

// output creat a array by combine 2 array:
//  Array ( [saihan] => 11549 [raihan] => 12549 [ashik] => 13549 [sabbir] => 14549 [sohel] => 15549 [moinul] => 16549 )