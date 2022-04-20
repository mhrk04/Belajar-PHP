<?php
$nilai = "B";

switch ($nilai) {
  case "A":
    echo "Anda lulus dengan cemerlang" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda Gagal" . PHP_EOL;
    break;
  default:
    echo "Anda berada di tempat yang salah" . PHP_EOL;
    break;
}

// Syntax Alternatif
switch ($nilai):
  case "A":
    echo "Anda lulus dengan cemerlang" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D":
    echo "Anda Gagal" . PHP_EOL;
    break;
  default:
    echo "Anda berada di tempat yang salah" . PHP_EOL;
    break;
endswitch;
