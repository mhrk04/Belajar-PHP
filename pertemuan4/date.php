<?php 
// belajar function

//function date  l=untuk hari, d=day, M=month perkataan m=bulam dalam angka
//buil-in function
//tampil tanggal dalam format tertentu
echo date("l, d-M-Y");
echo "<br>";


//function time
//UNIX timestamp
//detik yang sudah berlalu sejak 1 januari 1970
echo time();

?>
<br>
<?php  
echo date("d M Y",time()+60*60*24*5);
echo "<br>";

// Function mktime - buat sendiri detik
// mktime(0,0,0,0,0,0)
//(jam,minit,saat,bulan,hari,tahun)
echo date("l",mktime(0,0,0,4,26,2004));

echo "<br>";

echo date("l",strtotime("26 april 2004"));

?>