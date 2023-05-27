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
            document.location.href = "tambahan.php";
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kereta Tambahan</h1>
</div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <!-- <form enctype="multipart/form-data" action="" method="post"> -->
                        <a href="keretatambah.php"><button class="btn btn-primary btn-icon-split">
                                        <span class="text">Tambah Data</button></a>
                        <a name="ekspor" href="ekspor.php" class="btn btn-primary">
                                        <i class="fa fa-download">Ekspor Data</i></a>
                        <a type="submit" name="impor" href="impordata.php" class="btn btn-primary">
                                        <i class="fa fa-upload">impor Data</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nomor KA</th>
                                            <th>Nama KA</th>
                                            <th>Tujuan</th>
                                            <th>Jalur</th>
                                            <th>Jam Datang</th>
                                            <th>Jam Berangkat</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nomor KA</th>
                                            <th>Nama KA</th>
                                            <th>Tujuan</th>
                                            <th>Jalur</th>
                                            <th>Jam Datang</th>
                                            <th>Jam Berangkat</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
<?php 
include "koneksi.php";
include "queryKereta.php";
$nomor = 1;
$tampil = mysqli_query($conn, $selectR);
while($rows = mysqli_fetch_array($tampil)){
     ?>
     <tbody>
        <tr>
            <td><?php echo $nomor ?></td>
            <td><?php echo $rows["noka"] ?></td>
            <td><?php echo $rows["namaka"] ?></td>
            <td><?php echo $rows["tujuan"] ?></td>
            <td><?php echo $rows["jalur"] ?></td>
            <td><?php echo $rows["jadwaldatang"] ?></td>
            <td><?php echo $rows["jadwalberangkat"] ?></td>
            <td><?php echo $rows["keterangan"] ?></td>
            <td>
                <a href="updatekereta.php?id=<?php echo $rows['id']?>" class="btn btn-success btn-circle">
                <i class="fas fa-pencil-alt"></i></a>
                <a href="deletekereta.php?id=<?php echo $rows['id'];?>" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php include "AdminFooter.php" ?>