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

?>