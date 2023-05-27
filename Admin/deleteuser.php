<?php 
include "koneksi.php";
include "queryUser.php";

$id = $_GET["id"];
if($id != ""){
    
$deleteU = "DELETE FROM user WHERE id = '$id'";
    $query = mysqli_query($conn, $deleteU);
    if($query){
        ?>
        <script>
            alert("Data berhasil dihapus");
            document.location.href = "profil.php"
        </script>
        <?php
    }
}

?>