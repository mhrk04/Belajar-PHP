<?php 
$murid =[
    ["Haziq","76767667676","mhrk@git.org","SK"],
    ["Adwa","76767667676","mhrk@git.org","SK"]
];

//array associative
//key nya == strinng kita buat sendiri
$murid2 = [
    "nama" => "Haziq",
    "id" => "7676766",
    "email" => "mhrk@pp",
    "jurus " => "SK"
];

echo $murid2["jurus"];
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai murid</title>
</head>
<body>
    <h1>Senarai Pelajar</h1>
<?php foreach($murid as $m) :?>
    <ul>
        <li>Nama: <?= $m[0]; ?> </li>
        <li>IC: <?= $m[1]; ?></li>
        <li>email: <?= $m[2]; ?></li>
        <li>subjek: <?= $m[3]; ?></li>
    </ul>
    <?php endforeach ; ?>
</body>
</html> -->