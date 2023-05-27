<?php 
include "koneksi.php";

// kereta
$idKG =  $_GET["id"];
$nokaG =  $_GET["noka"];
$namakaG =  $_GET["namaka"];
$tujuanG =  $_GET["tujuan"];
$jadwalberangkatG =  $_GET["jadwalberangkat"];
$jadwaldatangG =  $_GET["jadwaldatang"];
$jalurG =  $_GET["jalur"];
$stamformasiG =  $_GET["stamformasi"];
$keteranganG  = $_GET["keterangan"];
$jenisG =  $_GET["jenis"];

$idKP = htmlspecialchars($_POST["id"]);
$nokaP = htmlspecialchars($_POST["noka"]);
$namakaP = htmlspecialchars($_POST["namaka"]);
$tujuanP = htmlspecialchars($_POST["tujuan"]);
$jadwalberangkatP = htmlspecialchars($_POST["jadwalberangkat"]);
$jadwaldatangP = htmlspecialchars($_POST["jadwaldatang"]);
$jalurP = htmlspecialchars($_POST["jalur"]);
$stamformasiP = htmlspecialchars($_POST["stamformasi"]);
$keteranganP = htmlspecialchars($_POST["keterangan"]);
$jenisP = htmlspecialchars($_POST["jenis"]);

$selectK = "SELECT * FROM departure_kroya";
$deleteK = "DELETE FROM departure_kroya WHERE id = '$id'";
$updateK = "UPDATE departure_kroya SET
            id = '$idKG', noka = '$nokaG', namaka = '$namakaG',
            tujuan = '$tujuanG', jadwalberangkat = '$jadwalberangkatG', 
            jadwaldatang = '$jadwaldatangG', jalur = '$jalurG',
            stamformasi = '$stamformasiG', 
            keterangan = '$keteranganG', jenis = '$jenisG'";
$insertK  = "INSERT INTO departure_kroya 
            (id, noka, namaka, tujuan, jadwalberangkat,
            jadwaldatang, jalur, stamformasi, keterangan, jenis)
            VALUES ( '' , '$nokaP', '$namakaP', '$tujuanP', 
             '$jadwalberangkatP', '$jadwaldatangP', '$jalurP',
            '$stamformasiP', '$keteranganP', '$jenisP')";

?>