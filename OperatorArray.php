<?php
$first = [
  "First_name" => "mhaziq"
];

$last = [
  "First_name" => "haii",  //key yang sama diabaikan
  "last name" => "rohaizan"
];

$mix = $first + $last; //ikut yang mana dulu
var_dump($mix);


// banding 

$a = [
  "first" => "Haziq",
  "last" => "Rohaizan"
];

$b = [
  "last" => "Rohaizan",
  "first" => "Haziq"
];
// banding
// tak kisah kedudukan key yang mana datang dulu yang penting value sama
var_dump($a == $b);
// kedudukan semua mesti sama dan identikal
var_dump($a === $b);
phpinfo(-1);
