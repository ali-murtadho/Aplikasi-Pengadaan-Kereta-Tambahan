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

$idKP = $_POST["id"];
$nokaP = htmlspecialchars($_POST["noka"]);
$namakaP = htmlspecialchars($_POST["namaka"]);
$tujuanP = htmlspecialchars($_POST["tujuan"]);
$jadwalberangkatP = htmlspecialchars($_POST["jadwalberangkat"]);
$jadwaldatangP = htmlspecialchars($_POST["jadwaldatang"]);
$jalurP = htmlspecialchars($_POST["jalur"]);
$stamformasiP = htmlspecialchars($_POST["stamformasi"]);
$keteranganP = htmlspecialchars($_POST["keterangan"]);
$jenisP = htmlspecialchars($_POST["jenis"]);


$selectR = "SELECT * FROM departure_kroya WHERE keterangan = 'kereta tambah' OR keterangan = 'tambahan' OR keterangan = 'kereta tambahan' OR keterangan = 'KERETA TAMBAHAN' OR keterangan = 'TAMBAH' ";
$selectKED = "SELECT * FROM departure_kroya";
$selectK = "SELECT * FROM departure_kroya ORDER BY jadwalberangkat";
$deleteK = "DELETE FROM departure_kroya WHERE id = 'id'";
$updateK = "UPDATE departure_kroya SET
            noka = '$nokaP', namaka = '$namakaP',
            tujuan = '$tujuanG', jadwalberangkat = '$jadwalberangkatP', 
            jadwaldatang = '$jadwaldatangP', jalur = '$jalurP',
            stamformasi = '$stamformasiP', 
            keterangan = '$keteranganP', jenis = '$jenisP' 
            WHERE id = $id";
$insertK  = "INSERT INTO departure_kroya 
            (id, noka, namaka, tujuan, jadwalberangkat,
            jadwaldatang, jalur, stamformasi, keterangan, jenis)
            VALUES ( '' , '$nokaP', '$namakaP', '$tujuanP', 
             '$jadwalberangkatP', '$jadwaldatangP', '$jalurP',
            '$stamformasiP', '$keteranganP', '$jenisP')";

?>