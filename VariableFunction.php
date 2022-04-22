<?php
function foo()
{
  echo "FOO" . PHP_EOL;
}
function bar()
{
  echo "bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("haziq", "strtoupper");
