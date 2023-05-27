<?php 
include "OperatorHeader.php";
include "prosesupdate.php";
include "prosesdeleteinput.php";
include "queryPeron.php";
include "queryKereta.php";
?>
<h1 class="h3 mb-2 text-gray-800">Table Pemilihan Peron</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="update">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Jalur</th>
                        <th>Input No KA</th>
                        <th>Aksi Simpan</th>
                        <th>No KA</th>
                        <th>Nama KA</th>
                        <th>Tujuan</th>
                        <th>Keberangkatan</th>
                        <th>Aksi Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Jalur</th>
                        <th>Input No KA</th>
                        <th>Aksi Simpan</th>
                        <th>No KA</th>
                        <th>Nama KA</th>
                        <th>Tujuan</th>
                        <th>Keberangkatan</th>
                        <th>Aksi Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="jalurka1" id=""></td>
                        <td>
                            <input type="submit" name="update1" value="simpan" class="btn btn-success">
                        </td>
                        <td><?php echo $row1['noka']; ?></td>
                        <td><?php echo $row1['namaka']; ?></td>
                        <td><?php echo $row1['tujuan']; ?></td>
                        <td><?php echo $row1['jadwalberangkat']; ?></td>
                        <td><input type="submit" name="delete1" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="btn btn-danger"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" name="jalurka2" id=""></td>
                        <td>
                            <input type="submit" name="update2" value="simpan" class="btn btn-success">
                        </td>
                        <td><?php echo $row2['noka']; ?></td>
                        <td><?php echo $row2['namaka']; ?></td>
                        <td><?php echo $row2['tujuan']; ?></td>
                        <td><?php echo $row2['jadwalberangkat']; ?></td>
                        <td><input type="submit" name="delete2" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="btn btn-danger"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="text" name="jalurka3" id=""></td>
                        <td>
                            <input type="submit" name="update3" value="simpan" class="btn btn-success">
                            <td><?php echo $row3['noka']; ?></td>
                            <td><?php echo $row3['namaka']; ?></td>
                            <td><?php echo $row3['tujuan']; ?></td>
                            <td><?php echo $row3['jadwalberangkat']; ?></td>
                            <td><input type="submit" name="delete3" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="btn btn-danger"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="text" name="jalurka4" id=""></td>
                        <td><input type="submit" name="update4" value="simpan" class="btn btn-success">
                        <td><?php echo $row4['noka']; ?></td>
                        <td><?php echo $row4['namaka']; ?></td>
                        <td><?php echo $row4['tujuan']; ?></td>
                        <td><?php echo $row4['jadwalberangkat']; ?></td>
                        <td><input type="submit" name="delete4" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="btn btn-danger"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="text" name="jalurka5" id=""></td>
                        <td><input type="submit" name="update5" value="simpan" class="btn btn-success"></td>
                        <td><?php echo $row5['noka']; ?></td>
                        <td><?php echo $row5['namaka']; ?></td>
                        <td><?php echo $row5['tujuan']; ?></td>
                        <td><?php echo $row5['jadwalberangkat']; ?></td>
                        <td><input type="submit" name="delete5" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="btn btn-danger"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><input type="text" name="jalurka6" id=""></td>
                        <td><input type="submit" name="update6" value="simpan" class="btn btn-success"></td>
                        <td><?php echo $row6['noka']; ?></td>
                        <td><?php echo $row6['namaka']; ?></td>
                        <td><?php echo $row6['tujuan']; ?></td>
                        <td><?php echo $row6['jadwalberangkat']; ?></td>
                        <td><input type="submit" name="delete6" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="btn btn-danger"></td>
                    </tr>
                </tbody>
                                </table>
                              </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<!-- /.container-fluid -->

        <!-- End of Main Content -->
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Perjalanan Kereta</h1>
 <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <p>Pilih File : (Tipe .xls)</p>
        <form enctype="multipart/form-data" action="" method="post">
                    <input type="file" name="excel" id="">
                    <button type="submit" name="impor" href="impordata.php" class="btn btn-success">
                        <i class="fa fa-upload">Unggah</i></button>
                </form>
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
                document.location = "operator.php"
            </script>
            <?php
        }
    } ?>
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
                  include "koneksi.php";
                  include "queryKereta.php";
                  $nomor = 1;
                  $view = mysqli_query($conn,$selectK);
                  while($rows = mysqli_fetch_array($view)){
                  ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $rows['noka'] ?></td>
                        <td><?php echo $rows['namaka'] ?></td>
                        <td><?php echo $rows['tujuan'] ?></td>
                        <td><?php echo $rows['jalur'] ?></td>
                        <td><?php echo $rows['jadwaldatang'] ?></td>
                        <td><?php echo $rows['jadwalberangkat'] ?></td>
                        <td><?php echo $rows['keterangan'] ?></td>
                        <td>
                                    <a href="updatekeretaop.php?id=<?php echo $rows['id']; ?> " class="btn btn-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="deletekeretaop.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a></th>
                        </td>
                    <?php $nomor++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<?php include "operatorFooter.php" ?>