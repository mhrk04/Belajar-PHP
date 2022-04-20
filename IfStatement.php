<?php

$markah = 10;
$point = 90;

if ($markah >= 80 && $point >= 80) {
  echo "Anda Dapat A" . PHP_EOL;
} elseif ($markah >= 60 && $point >= 60) {
  echo "Anda dapat B" . PHP_EOL;
} elseif ($markah >= 40 && $point >= 40) {
  echo "Anda dapat C" . PHP_EOL;
} else {
  echo "Anda Gagal" . PHP_EOL;
}


// style lain
if ($markah >= 80 && $point >= 80) :
  echo "Anda Dapat A" . PHP_EOL;
elseif ($markah >= 60 && $point >= 60) :
  echo "Anda dapat B" . PHP_EOL;
elseif ($markah >= 40 && $point >= 40) :
  echo "Anda dapat C" . PHP_EOL;
else :
  echo "Anda Gagal" . PHP_EOL;
endif;
