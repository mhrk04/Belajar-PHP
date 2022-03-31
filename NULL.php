<?php
// null type of data
// untul kosongkan nilai dalam variabe

$name = "haziq";
$name = null;

$age =  null;


echo "Nama :";
echo $name;
echo "\nAge :" . $age . "\n";

// function is_null
echo "Is Name null? ";
var_dump(is_null($name));
echo "\n";
// hapus variable
$tail = "taik";
unset($tail);

// cek variable ade dan ada isi
var_dump(isset($tail));
