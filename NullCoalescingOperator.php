<?php
// php

// Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function
// isset($variable)
// ● Namun untungnya di php ada null coalescing operator menggunakan tanda ??
//Code : Tanpa Null Coalescing Operator

$data = [];
if (isset($data['action'])) {
  $action = $data['action'];
} else {
  $action = "nothing";
}

echo $action . PHP_EOL;
// Kode : Null Coalescing Operator 
$action = $data['action'] ?? "nothing";
echo $action . PHP_EOL;
