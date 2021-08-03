<?php 
//pengulangan pada array
// bleh guna for / foreach

$angka = [1,2,3,4,5,6,7,8,9,10];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <h1>Cara 1 untuk looping pada array</h1>
    <?php for($i = 0; $i < count($angka); $i++) {?>
        <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php } ?>
    <div class="clear"></div>
    <h1>Cara 2 guna <code>foreach</code></h1>
    <?php foreach($angka as $a) {?>
        <div class="kotak"><?php echo $a; ?></div>
        <?php } ?>
    <!-- gaya penulisan tampleting-->
    <br>
    <h1>guna foreach penulisan style tampleting</h1>
    <?php foreach ($angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
        <?php endforeach; ?>
    
</body>
</html>
