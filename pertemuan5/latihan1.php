<?php 
//array
//sebuah variable dapat miliki banyak nilai
$nama = "Haziq";
//membuat array
//elemen dalam array boleh miliki pelbagai jenis data yang berbeza
//pasangan antara key dan value
//keynya dalam index dimula dari 0

// cara lama

$hari = array("senin","selasa","rabu");


//cara baru

$bulan = ["Jnuari","feb","March"];


$arr = [123,"tulisan",false];

//print array ke layar
//var_dump / print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);

//tampilkan 1 elemen pada array

echo $arr[1];
echo "<br>";
echo $bulan[1];

//tambah elemen baru pada array
echo "<br>";
$hari[] = "khamis";

var_dump($hari);





?>