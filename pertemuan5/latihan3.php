<?php  
//array numerik
//index == angka dimulai dari 0
$murid = [["HAziq", "04074444", "sk","mhrk@mail.com"],["Adwa", "04074444", "sk","majid@jidmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar pelajar</title>
</head>
<body>
    <h1>Daftar pelajar</h1>


    <ul>
        <?php foreach($murid as $m) :?>
            <li><?php echo $m ?></li>
            <?php endforeach; ?>
    </ul><br>

    <h1>Array dalam array (multidimensional array)</h1>
    <?php foreach($murid as $m) :?>
    <ul>
        <li>Nama:<?= $m[0]; ?></li>
        <li>id:<?= $m[1]; ?></li>
        <li>Subjek:<?= $m[2]; ?></li>
        <li>email:<?= $m[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
