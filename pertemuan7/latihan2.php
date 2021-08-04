<?php 
if (! isset($_GET["nama"]) ||
! isset($_GET["kelas"]) ||
! isset($_GET["email"])) {
    //redirect
    header("Location: latiha1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>
    <a href="latiha1.php">kembali ke home</a>
</body>
</html>