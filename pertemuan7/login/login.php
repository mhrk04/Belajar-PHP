<?php 
//cek tombol submit

if (isset($_POST["submit"])) {
    // username &pass
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location : admin.php");
        exit;
    }else {
        $error = true;
    }

//jika benar redirect ke admin.php
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <ul>
    <form action="" method="POST">
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">
                Password :
                <input type="password" name="password" id="password">
            </label>
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>