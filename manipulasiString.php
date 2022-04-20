<?php
$name = "Mhaziqrk";
// Dot Operator
echo "Nama :" . $name . PHP_EOL;
// Konversi ke Number dan Sebaliknya

$toString = (string)100;
var_dump($toString);
$toInt = (int)"500";
var_dump($toInt);
$toFloat = (float)"1.0054";
var_dump($toFloat);
// klau value salah return 0

// string array
echo $name[0];
echo $name[1];
echo $name[3];
echo "\n";

// variable parsing
echo "hello $name" . PHP_EOL;

// Curly Brace - menggabungkan variable dengan string tanpa ada spasi.
$var = "Mhrk";
echo "This is {$var}'s " . PHP_EOL;
