<?php 
// sambung ke database
$conn = mysqli_connect("localhost","root","root","kuizonline");

//function mengquery database
function query($query){
    global $conn;
    $result = mysqli_query( $conn ,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
     //ambil data dari setiap elemen form
     $IDPelajar = htmlspecialchars($data["IDPelajar"]);
     $Nama_Pelajar = htmlspecialchars($data["Nama_Pelajar"]);
     $IDKelas = htmlspecialchars($data["IDKelas"]);
     $KataLaluan = htmlspecialchars($data["KataLaluan"]);
         //query insert data
    $query = "INSERT INTO pelajar VALUES ('$IDPelajar','$Nama_Pelajar','$IDKelas','$KataLaluan') ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM pelajar WHERE IDPelajar = '$id'");
    return mysqli_affected_rows($conn);
}

function kelaslist(){
    global $conn;
    $sql = "SELECT * FROM kelas";
    $data = mysqli_query($conn,$sql);
    while ($kelas = mysqli_fetch_assoc($data)) {
        echo "<option value='$kelas[IDKelas]'>$kelas[Nama_Kelas]</option>";
    }
}

function ubah($data){
    global $conn;
     //ambil data dari setiap elemen form
     $IDPelajar = htmlspecialchars($data["IDPelajar"]);
     $Nama_Pelajar = htmlspecialchars($data["Nama_Pelajar"]);
     $IDKelas = htmlspecialchars($data["IDKelas"]);
     $KataLaluan = htmlspecialchars($data["KataLaluan"]);
         //query insert data
    $query = "UPDATE pelajar SET
            Nama_Pelajar = '$Nama_Pelajar',
            IDKelas = '$IDKelas',
            KataLaluan = '$KataLaluan'
            where IDPelajar = '$IDPelajar'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>