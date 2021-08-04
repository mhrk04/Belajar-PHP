<?php 

require "functions.php";
$id = $_GET["IDPelajar"];

if ( hapus($id) > 0) {
    echo "
        <script>
        alert('data berjaya dihapus');
        document.location.href = 'index.php';
        </script>
        
        ";
}else{
    echo "
    <script>
    alert('data tidak berjaya dihapus');
    document.location.href = 'index.php';
    </script>
    
    ";
}
?>