<?php
function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "hello $finalName" . PHP_EOL;
}
sayHello("haziq", function ($name) {
  return strtoupper($name);
});

sayHello("haziq", fn ($name) => strtoupper($name));
