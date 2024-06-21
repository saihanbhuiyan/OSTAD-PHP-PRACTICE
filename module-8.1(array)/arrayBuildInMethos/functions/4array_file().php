<?php
// array_fill() function kno use hoi?
// ** array_fill() function er maddome amra kono arrayte value generate korte pari index komate ba barate pari se jonno koto number index theke koto number index porjonto cholbe ta bole ditehobe abong ki valu generate hobe ba generate korbo taw boleditehobe
// ----->akhetre joto theke joto number index dibo array ta toto index number porjonto hoyejabe abong j value dibo oi value ta generate hobe
// ----->array_fill() function index array k associative array te convert kore output show kore
// jemon:-
$array = array(0,1,2,3,4,5,6,7,8,9);
$arrayfill = array_fill(1,11,9);
print_r($arrayfill);
// output :- Array ( [1] => 9 [2] => 9 [3] => 9 )
// index porimaner theke beshe diye output:
// Array ( [1] => 9 [2] => 9 [3] => 9 [4] => 9 [5] => 9 [6] => 9 [7] => 9 [8] => 9 [9] => 9 [10] => 9 [11] => 9 )