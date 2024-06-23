<?php
// uttoradhikar er sokol somporko jevabe kaj kore programming a inheritance akivabe kaj kore,
//***uttoradhikar sutrpawa sokol sompottir upore jemon amra sokol prokar access pai barano
// ----> komano ba bikrikora nosto kora inhetance a o aki ghotona ghote amra chaile update
// ----> uttoradhikar korte pari komate pari ect
//**** example : senior kono programmer kono office a jokhn kono code dei program dei junior ra 
// ---->setake extends ba inheritance kore sokol access pai amn ki proyojone update ba modify o
// ----> uttoradhikar korenite pare
//****ullekkho : jokhn kono child class a inheritance kora hobe tokhn parant class er sokol
// ----> uttoradhikar boisisto ba fol child class a chole asbe 
//****kintu: jokhn chils class totha inheritance er vitore kono modify kora hobe ba update kora hobe
// ----> tokhon parant class ta pabena as usual sompotti ba uttoradhiakar

// inheritance 
class father{
    public function print100(){
        for($i= 0; $i<=100; $i++){
            echo $i."<br>";
        }
    }
}
// class son extends father{  //output : 1to100

//  }
// --->akhaen extends koreche shudu kono update korahoini uttoradhikare ja peyeche tai

// update son
class son extends father{
    public function print100(){
        for($i= 0; $i<=100; $i = $i+10){ //output : 0 20 40 60 80 100 120 140 160 180 200
            echo ($i*2)."<br>";
        }
    }
}
$sonobj = new son();
$sonobj->print100()."<br>";

// ***update koeche pita 1kore agaito cheke 10kore agai abong 2gum kore agai ai bepartike bole overeiding
// ************************overriding method ***************************
// inheritence kore parant class theke jokhn kono properties ke modify kori ba tar logic change
// ----> kori tokhn ai bepartike bolahoi overrifing kora ba override kora
// ****upore example a son calss er modify er beparti e holo overriding

 