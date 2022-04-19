<?php
$nama = ["haziq", "hazim", "hakim", "hafiz"];
echo $nama[1] . "\n";
unset($nama[0]);
var_dump($nama);
$bilangan = count($nama);

var_dump($bilangan);

// membuat map guna array functions

$haziq = array(
  "nama_penuh" => "haziqrk",
  "umur" => "18"
);
var_dump($haziq["umur"]);


// array dalam array
$hafiz = array(
  "penuh" => "hafizrk",
  "umur" => "5 tahun",
  "alamat" => array(
    "blok" => "Daisy",
    "unit" => "D11"
  )
);
var_dump($hafiz["alamat"]['unit']);
