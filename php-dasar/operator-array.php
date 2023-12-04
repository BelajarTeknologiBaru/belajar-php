<?php

$first = [
    "firstName" => "Ahmad",

];

$last = [
    "lastName" => "Zidni",
];

var_dump($first + $last);  // Menggabungkan array outputnya output: array(2) { ["firstName"]=> string(6) "Ahmad" ["lastName"]=> string(5) "Zidni" }


//membandingkan array

$a = [
    "firstName" => "Ahmad",
    "lastName" => "Zidni",
];

$b = [
    "lastName" => "Zidni",
    "firstName" => "Ahmad",
];

var_dump($a == $b);  // output: bool(true)
var_dump($a === $b); // output: bool(false)
