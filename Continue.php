<?php
// keluar bilangan ganjil
for ($counter = 1; $counter <= 100; $counter++) {
  if ($counter % 2 == 0) {
    continue;
  }
  echo "hello Continue " . $counter . PHP_EOL;
}
