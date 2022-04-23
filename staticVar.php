<?php

function hai()
{
  static $counter = 1;
  echo "ini bilanagn $counter" . PHP_EOL;
  $counter++;
}


hai();
hai();
hai();
