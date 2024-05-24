<?PHP
// associative array
$mathmetics = [
    "saihan" =>80,
    "raihan" => 90,
    "ashik" => 100,
    "sabbir" => 70,
    "sohel" => 60,
    "moinul" => 50

];

// calculate grade function
function calculateGrade($marks){
    if($marks>=80){
        echo "A+";
    }
    elseif($marks>=70){
        echo "A";
    }
    elseif($marks>=60){
        echo "A-";
    }
    elseif($marks>=50){
        echo "B";
    }
    elseif($marks>=40){
        echo "C";
    }
    elseif($marks>=33){
        echo "D";
    }
    else{
        echo "F";
    }
}

foreach($mathmetics as $key=>$value){
    echo " = $key marks if $value and grade is : ".calculateGrade($value)."<br>";
}
