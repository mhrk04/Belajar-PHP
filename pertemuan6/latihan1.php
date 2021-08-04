 <?php /*
//array

//membuat array
$HARI = ["isnin", "selasa", "rabu"];
$bulan = ["jan","feb","mar"];
//tampilkan array

var_dump($HARI);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $bulan[0];
*/

//pengulangan yang bersarang === array yang bersarang (multi dimensi array)
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: green;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>

<?php 
// memcetak array multdimensi
$angka = [[1,2,3],[4,5,6],[7,8,9]];
echo $angka[1][1];
?>
<br>
<?php foreach ($angka as $a) :?>
    <?php foreach($a as $b) :?>
        <div class="kotak"><?= $b; ?></div>
        <?php endforeach ; ?>
    <?php endforeach; ?>


</body>
</html>