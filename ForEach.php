<?php
// tanpa foreach
$names = ["haziq", "hazim", "hakim"];
// array index start from 0
// i < 3 === 0,1,2
for ($i = 0; $i < count($names); $i++) {
  echo "Hello $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
  echo "hello $name" . PHP_EOL;
}

$person = [
  "First" => "haziq",
  "last" => "Rohaizan"
];

foreach ($person as $key => $value) {
  echo "$key = $value" . PHP_EOL;
}
