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


// avabe amra snake case a conver t korte pari