<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna{
            background-color: aqua;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        for ($i=1; $i <=3 ; $i++) { 
            echo "<tr>";
            for ($j=1; $j <=5 ; $j++) { 
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
<br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i <=5 ; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna">
            <?php else : ?>
        <tr>
            <?php endif; ?>
            <?php for ($j=1; $j <=5 ; $j++) : ?>
                <td><?= $i,$j; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        
    </table>

    <a href="index.php">Kembali ke Pertemuan 3 - Home</a>

</body>
</html>