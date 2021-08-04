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
     // cek ID dah guna blum
    $result = mysqli_query($conn, "SELECT IDPelajar FROM pelajar WHERE IDPelajar = '$IDPelajar' ");
    if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('ID sudah digunakan!')
		      </script>";
		return false;}
         //query insert data
    $query = "UPDATE pelajar SET
            IDPelajar = '$IDPelajar',
            Nama_Pelajar = '$Nama_Pelajar',
            IDKelas = '$IDKelas',
            KataLaluan = '$KataLaluan'
            where IDPelajar = '$IDPelajar'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function cari($keyword){
    $query = "SELECT * FROM pelajar
                WHERE
                Nama_Pelajar LIKE '%$keyword%' OR 
                IDPelajar LIKE '%$keyword%'
                ";
    return query($query);
}


//fungsi sign up
function registrasi($data){
    global $conn;

    $IDPelajar = $data["IDPelajar"] ;
    $Nama_Pelajar = htmlspecialchars($data["Nama_Pelajar"]);
    $IDKelas = htmlspecialchars($data["IDKelas"]);
    $KataLaluan = mysqli_real_escape_string($conn, $data["KataLaluan"]);
    $KataLaluan2 = mysqli_real_escape_string($conn, $data["KataLaluan2"]);

    // cek ID dah ade blum sudah ada atau belum
    $result = mysqli_query($conn, "SELECT IDPelajar FROM pelajar WHERE IDPelajar = '$IDPelajar' ");
    if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('ID sudah digunakan!')
		      </script>";
		return false;
    }
    // cek panjang string
    if (strlen($IDPelajar) > 4) {
        echo "<script>
            alert('Panjang ID melebihi 4');
          </script>";
        return false;
    }
// cek passwod
if( $KataLaluan !== $KataLaluan2 ) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";
    return false;
}
// tambahkan userbaru ke database
$query = "INSERT INTO pelajar VALUES ('$IDPelajar','$Nama_Pelajar','$IDKelas','$KataLaluan') ";

mysqli_query($conn, $query);
return mysqli_affected_rows($conn);

}

?>