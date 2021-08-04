<?php 
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
    <title>arrray associative</title>
</head>
<body>
    <h1>murid</h1>
    <?php foreach($murid as $m): ?>
    <ol>
        <li><?= $m["nama"]; ?></li>
        <li><?= $m["email"]; ?></li>
        <li><?= $m["kelas"]; ?></li>
    </ol>
    <?php endforeach; ?>
</body>
</html>