<?php

echo 'Nama : ';
echo 'Simon Fredy Sinaga';
echo "\n";

echo "Name : ";
echo "Simon\t Fredy\t Sinaga\n";

echo <<<SIMON
Selamat belajar PHP
sekarang kita belajar tipe data string
ini adalah cara ke -3 membuat string
bisa menggunakan HEREDOC

SIMON;

echo <<<'SIMON'
Selamat belajar PHP
sekarang kita belajar tipe data string
ini adalah cara ke -3 membuat string
bisa menggunakan NOWDOC
SIMON;

