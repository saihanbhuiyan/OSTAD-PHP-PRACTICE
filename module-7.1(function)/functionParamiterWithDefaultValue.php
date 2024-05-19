<?php

// function paramiter with default value
// function a jokon paramiter a kono value set koredewa hoi tokhn paramiter a value na dileo kaj kore 
//*tobe jodi argument a kono value diye dewa hoi tahole r default value kaj korbena
// *er subedhe hocche chiale default value niye o kaj korte pari abr argument value diye o

function introduce($name, $age = 20){
    echo "my name is $name and my age is $age";
}
introduce("saihan");
echo"<br>";
introduce("saihan", 21);