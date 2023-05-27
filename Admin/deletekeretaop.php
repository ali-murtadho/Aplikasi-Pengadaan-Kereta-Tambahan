<?php 
include "koneksi.php";
include "queryKereta.php";

$id = $_GET["id"];
if($id != ""){
    
$deleteKk = "DELETE FROM departure_kroya WHERE id = '$id'";
    $query = mysqli_query($conn, $deleteKk);
    if($query){
        ?>
        <script>
            alert("Data berhasil dihapus");
            document.location.href = "operator.php"
        </script>
        <?php
    }
}

?>