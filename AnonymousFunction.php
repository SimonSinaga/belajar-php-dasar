<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Simon");
$sayHello("Sinaga");


function sayGoodBye (string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Simon", function (string $name): string {
    return strtoupper($name);
});

sayGoodBye("Simon", function (string $name): string {
    return strtoupper($name);
});


$firstName = "Simon";
$lastName = "Fredy";

$sayHelloSimon = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloSimon();
$firstName = "ssa";
$lastName = "asfd";

$sayHelloSimon();