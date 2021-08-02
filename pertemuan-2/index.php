<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2 - Sintaks PHP</title>
    <style>
        pre{
            background-color: black;
            color: white;
            padding: 15px;
            text-align: justify;
            width: 100%;
        }
        h1,h2{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php 
//ini ialah Komen satu baris

/*ini komen banayak baris
jfdjdjf
dfsdsdsdf
*/


// Pertemuan-2 PHP dasar
// Sintaks PHP


// --standard output
// echo,print
// print_r  (array)
// var_dump (untuk debug)

 ?> 
<h1>Pertemuan-2 : Sintaks PHP</h1>

<h3>Output untuk echo & print :</h3>
<pre><?= "Haziq"; ?></pre>
<h3>Ini ialah output bagi function var_dump:</h3>
<pre><?php var_dump("Haziq Rohaizan"); ?>
</pre>


<!-- penulisan sintak php-->
<!-- 1. PHP dalam HTML -->
<!-- 2. HTML dalam PHP -->


<section><h2>Penulisan Sintaks PHP</h2></section>

<h3>Ini Output untuk sintak php yang berada dalam HTML :</h3>
<pre><?= "saya php yang berada dalam tag html!!"; ?></pre>

<h3 style="color: red;">Penggunaan html dalam php tidak disarankan !</h3>
<code> 
     <?= "<h3>saya ialah html yang berada dalam php</h3>"; ?> 
</code>  

<section><h2>Variable dan Jenis Data</h2></section>
<pre>Untuk menulis variable di dalam php cukup guna simbol $ : <br>$nama_variable = "nilai variable";<br>$nama="Haziq"; ==> untuk declare string & interpolasi
<br>
1. Nama variable tak boleh dimulakan dgn nombor
</pre>

<h3>Contoh Operasi Aritmatik :</h3>
<pre>//operasi aritmatik <br>// ada (+,-,*,/) ==> <br>* ialah darab & / ialah bahagi</pre>
<h3>Output operasi aritmatik guna php:</h3>
<pre>
    <?php 
    $x = 9;
    $y = 10;
    echo $x + $y
    ?> ini  ialah operasi 10+9 <br>

</pre>
<h3>Penggabungan String</h3>
<pre>$nama_depan = "haziq";<br>$nama_belakang = "Rohaizan";<br>echo $nama_depan . "" . $nama_belakang;</pre>
<h3>Output:</h3>
<pre>
    <?php 
    $name_f = "haziq";
    $name_l = "Rohaizan";
    echo $name_f . " " . $name_l;
    ?>
</pre>
<h3>Operator Assignment</h3>
<pre>=, +=, -=, *=, /=, %=, .=<br>contoh +=: <br><br>$x = 5;<br>$x += 5;<br>echo $x;</pre>
<pre>
    <?php 
    $x = 5;
    $x += 5;
    echo $x;
    ?>
</pre>
<h3>Operator Perbandingan</h3>
<pre>
<ol>
    <li> < </li>
    <li> > </li>
    <li> <= </li>
    <li> >= </li>
    <li> == </li>
    <li> != </li>
    <p><s>Operator perbandingan</s> hanya membanding nilai tanpa mengira jenis data</p>
    <br>
    contoh perbandingan: <br>
    var_dump(1 < 5);
    var_dump(1 == "1");
</ol>
</pre>
<pre>
<?php 
    var_dump(1<5);
    var_dump(1=="1");
    ?>
</pre>
<h3>Operator Indentitas bagi membanding termasuk jenis data</h3>
<pre>
    <ol>
        <li> === </li>
        <li> !== </li>
    </ol>
<h3>contoh:</h3><br>
var_dump(5 === "5");<br>var_dump(5 !== "5");
</pre>
<pre>
<?php 
    var_dump(5 === "5");
    var_dump(5 !== "5");
    ?>
</pre>
<h3>Operatok logik</h3>
<p>Biasa digunakan semasa pengkondisian</p>
<pre>
    <ol>
        <li>&& bermaksud "dan"</li>
        <li>|| bermaksud "or"</li>
        <li>! bermaksud "NOT"</li>
    </ol>
    <h3>Contoh &&</h3><br>var_dump(5 < 8 && 5 > 2)

</pre>
<pre>
    <?php var_dump(5 < 8 && 5 > 2) ?>
</pre>
</body>
</html>