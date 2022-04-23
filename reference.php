<?php
$name = "mhaziqrk";

$othername = &$name;
$othername = "haziq rohaizan";

echo "Hai $name" . PHP_EOL;


// pass by reference 
function increment(int &$value)
{
  $value++;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;


// returning reference

function &getValue()
{
  static $value = 100;
  return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
