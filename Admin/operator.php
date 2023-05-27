<?php include "AdminHeader.php";
include "koneksi.php";
include "queryKereta.php";
$id = $_GET["id"];
if ($id != "") {
    $query = mysqli_query($conn, $deleteK);
    if ($query) {
?>
        <script>
            alert("Data berhasil dihapus");
            document.location.href = "operator.php";
        </script>
<?php
    }
}
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Perjalanan Kereta</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <p>Pilih File : (Tipe .xls)</p>
        <form enctype="multipart/form-data" action="" method="post">
            <input type="file" name="excel" id="">
            <button type="submit" name="impor" href="impordata.php" class="btn btn-primary">
                <i class="fa fa-upload">Unggah</i></button>
        </form>
        <?php
        if (isset($_POST['impor'])) {
            $filename = $_FILES['excel']['name'];
            $fileExtension = explode('.', $filename);
            $fileExtension = strtolower(end($fileExtension));

            $newFileName = "impor_" . date("d-m-Y") . "." . $fileExtension;
            $targetDir = "uploads/" . $newFileName;
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
            foreach ($reader as $key => $row) {
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
            if ($insertExcel) {
        ?>
                <script>
                    alert("Data Berhasil Ditambah");
                    document.location = "operator.php"
                </script>
        <?php
            }
        } ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No KA</th>
                        <th>Nama KA</th>
                        <th>Tujuan</th>
                        <th>Jalur</th>
                        <th>Kedatangan</th>
                        <th>Keberangkatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No KA</th>
                        <th>Nama KA</th>
                        <th>Tujuan</th>
                        <th>Jalur</th>
                        <th>Kedatangan</th>
                        <th>Keberangkatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $nomor = 1;
                    $tampil = mysqli_query($conn, $selectK);
                    while ($row = mysqli_fetch_array($tampil)) {
                    ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $row['noka']; ?></td>
                            <td><?php echo $row['namaka']; ?></td>
                            <td><?php echo $row['tujuan']; ?></td>
                            <td><?php echo $row['jalur']; ?></td>
                            <td><?php echo $row['jadwaldatang']; ?></td>
                            <td><?php echo $row['jadwalberangkat']; ?></td>
                            <td><?php echo $row['keterangan']; ?></td>
                            <td>
                                <a href="updatekeretaop.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-circle">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="deletekeretaop.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-circle">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php $nomor++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<?php include "AdminFooter.php"; ?>