<?php 
//konek ke database

$conn = mysqli_connect("localhost","root","root","kuizonline");
// ambi data pelajar

$result = mysqli_query($conn,"SELECT * FROM pelajar");
// ambil data dari objek result (fetch)
//mysqli_fetch_row() array numerik
//mysqli_fetch_assoc() kembalikan array assoc
//mysqli_fetch_array()  kembali keduanya
//mysqli_fetch_object()

// while ($pelajar = mysqli_fetch_assoc($result)){
//     var_dump($pelajar);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Senarai Pelajar</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Bil.</th>
            <th>ID Pelajar</th>
            <th>Nama Pelajar</th>
            <th>ID Kelas</th>
            <th>Kata Laluan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["IDPelajar"]; ?></td>
            <td><?= $row["Nama_Pelajar"]; ?></td>
            <td><?= $row["IDKelas"]; ?></td>
            <td><?= $row["KataLaluan"]; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Padam</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>