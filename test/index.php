<?php 
$conn = mysqli_connect("localhost","root","root","kuizonline");
function kelaslist(){
    global $conn;
    $sql = "SELECT * FROM kelas";
    $data = mysqli_query($conn,$sql);
    while ($kelas = mysqli_fetch_assoc($data)) {
        echo "<option value='$kelas[IDKelas]'>$kelas[Nama_Kelas]</option>";
    }
}
function query($query){
    global $conn;
    $result = mysqli_query( $conn ,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;
}

$id = 'P001';
$pelajar = query("SELECT * FROM pelajar WHERE IDPelajar = $id");
var_dump($pelajar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="IDKelas">
        <?php kelaslist(); ?>
    </select>
</body>
</html>