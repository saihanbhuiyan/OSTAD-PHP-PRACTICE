<?php
// null type bolte kono paramiter er value ba argument thakteo pare abr na o thakte pare jodi na thake tahole null bobe totha null tyepe hobe
// *ajonno paramiter a ? dite hobe jar mane akhane null type hint acceptable

function myName(? string $name){
    echo $name;
}
//myName("saihan");
myName(Null);