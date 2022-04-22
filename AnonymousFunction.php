<?php

$sayHello = function (string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("haziq");
$sayHello("Rohaizan");

//  Anonymous Function Sebagai Argument
function sayGoodbye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good Bye $finalName" . PHP_EOL;
}
sayGoodbye("haziq", function (string $name) {
  return strtoupper($name);
});

// Mengakses Variable di Luar Closure
$firstName = "haziq";
$lastName = "Rohaizan";
$hi = function () use ($firstName, $lastName) {
  echo "hello $firstName $lastName" . PHP_EOL;
};
$hi();
