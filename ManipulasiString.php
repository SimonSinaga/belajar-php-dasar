<?php

$name = "Simon Fredy Sinaga";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"salah";
var_dump($valueInt);

$valueFloat = (float)"salah";
var_dump($valueFloat);

$name = "Simon";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

echo "Hello " . $name . ", Selamat belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat belajar PHP" . PHP_EOL;
echo "Hello {$name}s, Selamat belajar PHP" . PHP_EOL;

$var = "Eko";
echo "This is {$var}s" . PHP_EOL;