<?php 
//variable scope
// variable di luar function xde kaitan dengan variable di dalam function
//untuk guna var yang diluar function pkai global
// $x = 10;


// function tamp(){
//     global $x;
//     echo $x;
// }

// tamp();

//variable SUPERGLOBAL
// variable global milik php
//merupakan array associative

// var_dump($_SERVER);


//  $_GET
// ?nama=Haziq  di url

// var_dump($_GET);

$murid = [
    [
    "nama" => "Haziq",
    "kelas" => "5 beta",
    "email"=> "mhrk.pp.c"
    ],
[
    "nama" => "abang jj",
    "kelas" => "5 beta",
    "email" => "jj.pp.c"
]
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Tutorial Get</h1>
    <ul>
        <?php foreach($murid as $m) :?>
            <li><a href="latihan2.php?nama=<?= $m["nama"]?>&kelas=<?= $m["kelas"];?>&email=<?= $m["email"];?>"><?= $m["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

