<?php 
// module-8
//  econd to Hour:Minute//  Problem Statement
//  Write a program which will take seconds as input and output into hour:minute.
//  Input
//  The input consists of a integer.
//  Output
//  The output will print in the form hour:minute. For example if it takes 130 as input then it will print 0:2.
//  Constraints
//  0 ≤ |S| ≤ 10000
//  Example:
//  Enter number
//  Input:
//  130
//  Output:
//  0:2

// fscanf(STDIN,"%d", $n);

// $houre = floor($n / 3600);
// $remainingSecound = $n % 3600;
// $minute = floor ($remainingSecound /60);
// print $houre." :".$minute;




<<<<<<< HEAD
(2)
Concatenate Two String
=======
// (2)
// Concatenate Two String
// বাং
>>>>>>> 8b6eb86 (type of function advantage & why function)

// Problem Statement
// Write a program where two strings will be given, firstName and lastName, return a single string in the format "lastName, firstName".

// Input
// The input consists of two strings.

// Output
// The output will print a string.

// Constraints
// 0 ≤ |S| ≤ 10000
// Example:
// Enter strings

// Input:
// John Doe
// Output:
// Doe, John 


<<<<<<< HEAD
oneway way to solve
printf("%s %s",$firstName, $lastName);
echo $lastName."," .$firstName;

secound way to solve same one with loop
fscanf(STDIN "%s %s", $firstName, $lastName);
$output = "";
=======
// //oneway to solve 
// printf("%s %s",$firstName, $lastName);
// echo $lastName."," .$firstName;

// //secound way to solve
// fscanf(STDIN "%s %s", $firstName, $lastName);
// $output = "";
>>>>>>> 8b6eb86 (type of function advantage & why function)

// for($i=0; $i<strlen($lastName); $i++){
//     $output = $output.$lastName[$i];
// }
// $output = $output.", ";
// for($i = 0; $i<strlen($firstName); $i++){
//     $output = $output.$firstName[$i];
// }
// print $output;

$msg = "i love you lokkhi sona pakhi amr";
 function encrypt($msg){
    $msg = str_split($msg);
    $newmsg = "";
    foreach($msg as $char){
        $newmsg .=chr(ord($char)+1);
        
    }
    return $newmsg;
}
echo encrypt($msg);

<<<<<<< HEAD
?>
=======

// decrypt
echo"<br>";
$msg = "i love you lokkhi sona pakhi amr";
 function decrypt($msg){
    $msg = str_split($msg);
    $nmsg = "";
    foreach($msg as $char){
        $nmsg .=chr(ord($char)-1);
        
    }
    return $nmsg;
}
echo decrypt("j!mpwf!zpv!mpllij!tpob!qblij!bns");
echo"<br>";

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quas!</li>
            <li>Labore cumque laudantium iste qui magnam expedita unde ipsam veritatis?</li>
            <li>Odio doloremque veniam aperiam corrupti tempore aspernatur suscipit nobis? Ex.</li>
            <li>Inventore fugit voluptatibus provident, impedit quod odio? Id, facere illum?</li>
            <li>Voluptatum voluptatem doloremque nisi totam, amet non laboriosam in hic!</li>
            <li>Ad ducimus asperiores optio magnam enim eaque? Incidunt, explicabo quibusdam!</li>
            <li>Tenetur magnam eaque mollitia perferendis voluptatum inventore repellat sequi praesentium.</li>
            <li>Aliquam error quas molestiae ipsa deleniti maiores quos facere eveniet?</li>
            <li>Fugit iure ut suscipit libero quaerat minima qui sint natus.</li>
            <li>Labore sit enim ex nihil. Optio vitae animi et porro!</li>
        </ul>
    </div>

    <div>
        <ol>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, reiciendis?</li>
            <li>Ullam explicabo cumque ut, eveniet iste recusandae reiciendis qui excepturi!</li>
            <li>Nemo numquam officia iure mollitia, non modi? Atque, facere molestiae!</li>
            <li>Minima odio modi in dolor laborum, provident maxime at ipsam.</li>
            <li>Vero, consectetur! Neque corrupti, deserunt libero molestias accusamus deleniti ad?</li>
            <li>Veritatis, porro praesentium eius minima delectus ducimus temporibus neque fuga!</li>
            <li>Cumque voluptates quo non reprehenderit fuga culpa veniam laudantium necessitatibus!</li>
            <li>Corporis ipsum accusamus quod magnam sunt doloremque. Voluptates, voluptate aliquid.</li>
            <li>Distinctio, ad laudantium repellat ipsum iure eligendi voluptatem nemo quasi.</li>
            <li>Nemo tempore quae deleniti voluptatum tenetur mollitia, rem quidem ad.</li>
        </ol>
    </div>
    
</body>
</html>
>>>>>>> 8b6eb86 (type of function advantage & why function)
