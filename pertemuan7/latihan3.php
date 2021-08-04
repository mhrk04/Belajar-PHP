<?php //latihan POST ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php  if (isset($_POST["nama"])) :?>
    <h1>Selamat datang <?= $_POST["username"]; ?></h1>
        <?php endif; ?>

    <form action="" method="POST">
    <label for="nama">
        nama :
        <input type="text" id="nama" name="username">
    </label>
    <button type="submit" name="nama">Kirim</button>
    </form>
</body>
</html>