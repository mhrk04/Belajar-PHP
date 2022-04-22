<?php
// default argument kalau xset value 
function sayHello($word = "hantu")
{
  echo "hello $word" . PHP_EOL;
}

SayHello();
SayHello("budi");
SayHello("Haziq");


// type declaration
function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

// Variable-length Argument List

function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total " . implode("+", $values) . "= $total" . PHP_EOL;
}

sumAll(20, 30, 30);
