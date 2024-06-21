<?php
// snake case mane protita word k underscore diye separate korbe


//  conver string into snakeCase
$name = "saihan vaya i am comming tommorrow";
 echo strtolower(str_replace(" ", "_", $name));
echo "<br>";


// using function camal case to snake case
function camelToSnake($camelCase) { 
    $result = ''; 
  
    for ($i = 0; $i < strlen($camelCase); $i++) { 
        $char = $camelCase[$i]; 
  
        if (ctype_upper($char)) { 
            $result .= '_' . strtolower($char); 
        } else { 
            $result .= $char; 
        } 
    } 
  
    return ltrim($result, '_'); 
} 
  
// Driver code 
$camelCase = 'WelcomeToGeeksForGeeks'; 
$snakeCase = camelToSnake($camelCase); 
echo $snakeCase; 
echo "<br>";

// avabe amra snake case a conver t korte pari



// kebab case mane kono string er protita word ka heiphen diye separate ba alada korbe

// string to kebab case
echo "kebabCase";echo "<br>";
$name = "saihan vaya i am comming tommorrow";
echo str_replace(" ", "-", $name);
echo "<br>";


//camel case mane string ba sentence er word gulu k combine ba ekttrito korefelbe
echo "camelCase";echo "<br>";
// string to camal case
$namr = "saihan vaya i am comming tommorrow";
echo strtolower(str_replace(" ", "", $namr))."<br>";

// puscal case mane protita word er first letter capital hobe abong combine ba eksathe hobe
echo "puscalCase";echo "<br>";

// string to puscal case
$name = "saihan vaya i am comming tommorrow";
echo str_replace(" ","",ucwords($name));