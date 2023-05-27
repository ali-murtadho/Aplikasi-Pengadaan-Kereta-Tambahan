<?php 
include "koneksi.php";

// kereta
$idKG =  $_GET["id"];
$nokaG =  $_GET["noka"];
$namakaG =  $_GET["namaka"];
$tujuanG =  $_GET["tujuan"];
$jadwalberangkatG =  $_GET["jadwalberangkat"];
$jalurG =  $_GET["jalur"];


$idKP = htmlspecialchars($_POST["id"]);
$nokaP = htmlspecialchars($_POST["noka"]);
$namakaP = htmlspecialchars($_POST["namaka"]);
$tujuanP = htmlspecialchars($_POST["tujuan"]);
$jadwalberangkatP = htmlspecialchars($_POST["jadwalberangkat"]);
$jalurP = htmlspecialchars($_POST["jalur"]);

$selectK = "SELECT * FROM hasilka_kroya ORDER BY jadwalberangkat";
$deleteK = "DELETE FROM hasilka_kroya WHERE id = 'id'";
$insertK  = "INSERT INTO hasilka_kroya 
            (id, noka, namaka, tujuan, jadwalberangkat, jalur)
            VALUES ( '' , '$nokaP', '$namakaP', '$tujuanP', 
             '$jadwalberangkatP', '$jalurP')";
?>