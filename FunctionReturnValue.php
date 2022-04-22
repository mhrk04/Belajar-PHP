<?php
// Function Return Value (1)
// :int == Return Type Declarations
function sum(int $first, int $last): int
{
  return $first + $last;
}

$total = sum(10, 20);
var_dump($total);

// Function Return Value (2)
function getFinalvalue(int $value): string
{
  if ($value >= 80) {
    return "A";
  } elseif ($value >= 70) {
    return "B";
  } else {
    return "C";
  }
}
$result = getFinalvalue(80);
var_dump($result);
