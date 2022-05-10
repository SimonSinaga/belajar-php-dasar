<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Simon", "Fredy", "Sinaga"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$simon = array(
    "id" => "simon",
    "name" => "simon fredy",
    "age" => 24,
    "address" => [
        "city" => "medan",
        "country" => 'Indonesia'
    ]
);

var_dump($simon);

var_dump($simon["name"]);

$budi = [
    "id" => "budi",
    "name" => "budi n",
    "age" => 99,
    "address" => [
        "city" => "medan",
        "country" => 'Indonesia'
    ]
];
var_dump($budi);

var_dump($simon["address"]["country"]);

