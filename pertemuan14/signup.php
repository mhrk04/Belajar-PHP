<?php 
require "functions.php";
if (isset($_POST["signup"])) {
    if( registrasi($_POST) > 0){
        echo "<script>alert('Berjaya Sign Up!');</script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body><center>
    <h3>SIGN UP</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="IDPelajar">ID Pelajar :</label></td>
                <td><input type="text" name="IDPelajar" id="IDPelajar" placeholder="max 3 char"></td>
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
            <tr>
                <td><label for="KataLaluan2">Tulis Semula KataLaluan :</label></td>
                <td><input type="password" name="KataLaluan2" id="KataLaluan2" placeholder="max 8 char"></td>
            </tr>
        </table>
        <button type="submit" name="signup">Daftar</button>
        <button type="button" onclick="window.location='login.php'">Batal</button>
    </form></center>
</body>
</html>