<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body><center>
    <h2>Halaman Login</h2>
    <form action="" method="post">
        <table >
            <tr>
                <td><label for="userid">User ID :</label></td>
                <td> <input type="text" id="userid" name="userid" placeholder="idpengguna"></td>
            </tr>
            <tr>
                <td><label for="KataLaluan">KataLaluan :</label></td>
                <td><input type="password" name="KataLaluan" id="KataLaluan"></td>   
            </tr>
        </table>
        <button type="submit" name="login">Login</button>
        <button type="button" onclick="window.location='signup.php'">Sign Up</button>
    </form></center>
</body>
</html>