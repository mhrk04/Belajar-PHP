<?php

//goto boleh loncat2

goto a;
echo "Selamat Malam";
a:
echo "Hai A" . PHP_EOL;

// goto operator di loop

$counter = 1;
while (true) {
  echo "While Loop $counter" . PHP_EOL;
  $counter++;
  if ($counter > 10) {
    goto end;
  }
}

end:
echo "End Loop" . PHP_EOL;
