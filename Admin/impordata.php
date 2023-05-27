<?php 
include "koneksi.php";
include "queryKereta.php";
include "AdminHeader.php";
$id = $_GET["id"];
if($id != ""){
    $query = mysqli_query($conn, $deleteK);
    if($query){
        ?>
        <script>
            alert("Data berhasil dihapus");
            document.location.href = "tambahan.php"
        </script>
        <?php
    }
}



?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Import Data</h1>
</div>
<!-- Content Row -->
                <!-- Begin Page Content -->
    <div class="container-fluid">
                    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a download name="impor" href="Book1.xls" class="btn btn-primary">
                    <i class="fa fa-download">Download Template Excel</i>
                </a>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="" method="post">
                    <input type="file" name="excel" id="">
                    <button type="submit" name="impor" href="impordata.php" class="btn btn-primary">
                        <i class="fa fa-upload">Impor Data</i></button>
                </form>
                </div>
        </div>
            <a href="tambahan.php" class="btn btn-primary">Kembali</a>
    </div>
    <?php 
    if(isset($_POST['impor'])){
        $filename = $_FILES['excel']['name'];
        $fileExtension = explode('.',$filename);
        $fileExtension = strtolower(end($fileExtension));

        $newFileName = "impor_".date("d-m-Y").".".$fileExtension;
        $targetDir = "uploads/". $newFileName;
        move_uploaded_file($_FILES['excel']['tmp_name'], $targetDir);

        error_reporting(0);
        ini_set('display_errors', 0);

        include "koneksi.php";
        include "excel_reader.php";
        require "modif-data/excelreader/SpreadsheetReader.php";
        require "modif-data/excelreader/SpreadsheetReader_XLSX.php";
        require "modif-data/excelreader/SpreadsheetReader_XLS.php";
        require "modif-data/excelreader/SpreadsheetReader_CSV.php";

        $reader = new SpreadsheetReader($targetDir);
        foreach($reader as $key => $row){
            $noka = $row[0];
            $namaka = $row[1];
            $tujuan = $row[2];
            $jadwalberangkat = $row[3];
            $jadwaldatang = $row[4];
            $jalur = $row[5];
            $stamformasi = $row[6];
            $keterangan = $row[7];
            $jenis = $row[8];
            $insertExcel = mysqli_query($conn, "INSERT into departure_kroya 
            VALUES('','$noka','$namaka','$tujuan','$jadwalberangkat',
                 '$jadwaldatang', '$jalur', '$stamformasi',
                 '$keterangan','$jenis')");
        }
        if($insertExcel){
            ?>
            <script>
                alert("Data Berhasil Ditambah");
                document.location = "tambahan.php"
            </script>
            <?php
        }
    } ?>
<?php include "AdminFooter.php" ?>