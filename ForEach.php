<?php

$names = ["Simon", "Fredy", "Sinaga"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data Ke - $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

$person = [
    "first_name" => "Simon",
    "middle_name" => "Fredy",
    "last_name" => "Sinaga"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}