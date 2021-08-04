<?php 
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<h3>SIGN UP</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="IDPelajar">ID Pelajar :</label></td>
                <td><input type="text" name="IDPelajar" id="IDPelajar"></td>
            </tr>
            <tr>
                <td><label for="Nama_Pelajar">Nama :</label></td>
                <td><input type="text" name="Nama_Pelajar" id="Nama_Pelajar"></td>
            </tr>
            <tr>
                <td><label for="IDKelas">Kelas</label></td>
                <td><select id="IDKelas" name="IDKelas">
                        <?php kelaslist(); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="KataLaluan">KataLaluan :</label></td>
                <td><input type="password" name="KataLaluan" id="KataLaluan" placeholder="max 8 char"></td>
            </tr>
        </table>
        <button type="submit" name="signup">Daftar</button>
        <button type="button" onclick="window.location='index.php'">Batal</button>
    </form>
    
</body>
</html>