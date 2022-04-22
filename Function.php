<?php
function sayHello($word)
{
  echo "hello Function - $word" . PHP_EOL;
}

for ($i = 1; $i <= 10; $i++) {
  sayHello($i);
}
