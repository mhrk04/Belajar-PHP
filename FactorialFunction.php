<?php
function factorialLoop(int $value): int
{
  $total = 1;
  for ($i = 1; $i <= $value; $i++) {
    $total *= $i;
  }
  return $total;
}
var_dump(factorialLoop(5));

function factorilRecursive(int $value): int
{
  if ($value == 1) {
    return 1;
  } else {
    return $value * factorilRecursive($value - 1);
  }
}

var_dump(factorilRecursive(5));

// error stackOverflow
// memory full
// PHP Fatal error:  Allowed memory size of 134217728 bytes exhausted (tried to allocate 262144 bytes) in /home/mhrk/Documents/Belajar-PHP/FactorialFunction.php on line 31
function loop(int $value)
{
  if ($value == 0) {
    echo "Selesai" . PHP_EOL;
  } else {
    echo "loop-$value" . PHP_EOL;
    loop($value - 1);
  }
}

loop(3000000);
