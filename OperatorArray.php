<?php

$first = [
    "first_name" => "Simon"
];

$last = [
    "first_name" => "s",
    "last_name" => "Sinaga"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Simon",
    "last_name" => "Sinaga"
];

$b = [
    "last_name" => "Sinaga",
    "first_name" => "Simon"
];

var_dump($a == $b);
var_dump($a === $b);

$c = [
    "first_name" => "Simon",
    "last_name" => "Sinaga"
];

$d = [
    "last_name" => "Sinaga",
    "first_name" => "Ssimon"
];

var_dump($c!= $d);

$e = [
    "first_name" => "Simon",
    "last_name" => "Sinaga"
];

$f = [
    "last_name" => "Sinaga",
    "first_name" => "Simon"
];

var_dump($e!= $f);