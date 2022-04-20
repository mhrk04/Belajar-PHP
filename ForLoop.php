<?php
// forever loop
// for (;;) {
//   echo "hai";
// }
// ulang
for ($counter = 1; $counter <= 10; $counter++) {
  echo "Ini adalah for loop ke - $counter" . PHP_EOL;
}
echo "break \n";
for ($counter = 10; $counter >= 1; $counter--) {
  echo "Ini adalah for loop ke - $counter" . PHP_EOL;
}


// style lain
for ($counter = 1; $counter <= 10; $counter++) :
  echo "Ini adalah for loop ke - $counter" . PHP_EOL;
endfor;
