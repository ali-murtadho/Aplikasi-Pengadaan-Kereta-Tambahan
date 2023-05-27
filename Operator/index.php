<?php

include "operatorHeader.php";
include "koneksi.php";
include "queryKereta.php";

$getTrain = mysqli_query($conn, $selectK);
$view = mysqli_num_rows($getTrain);

$getAddTrain = mysqli_query($conn, $selectR);
$viewes = mysqli_num_rows($getAddTrain);
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <a href="operator.php">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Data Keberangkatan Kereta Api</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $view; ?> Kereta</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-train fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <a href="tambahan.php">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Jumlah Data Kereta Api Tambahan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $viewes; ?> Kereta</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-train fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
if (isset($_GET['cari'])) {
    $daftardata = $_GET['search'];
    $search = "SELECT * FROM departure_kroya
                       WHERE noka LIKE '%" . $daftardata . "%' OR
                        namaka LIKE '%" . $daftardata . "%' OR 
                        tujuan LIKE '%$" . $daftardata . "%'";
} else {
    $search = $selectK;
}
?>
<!-- Content Row -->
<h1 class="h3 mb-2 text-gray-800">Data Keberangkatan Kereta Api</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- Topbar Search -->
        <form action="index.php" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Cari Kereta..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-success" name="cari" type="submit">
                        Cari <!-- <i class="fas fa-search fa-sm"></i> -->
                    </button>
                </div>
            </div>
        </form>
        <a name="ekspor" href="ekspordashboard.php" class="btn btn-success">
            <i class="fa fa-download">Ekspor Data</i></a>

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
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include "koneksi.php";
                    include "queryKereta.php";
                    $nomor = 1;
                    $tampil = mysqli_query($conn, $search);
                    while ($rows = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $rows['noka']; ?></td>
                            <td><?php echo $rows['namaka']; ?></td>
                            <td><?php echo $rows['tujuan']; ?></td>
                            <td><?php echo $rows['jalur']; ?></td>
                            <td><?php echo $rows['jadwaldatang']; ?></td>
                            <td><?php echo $rows['jadwalberangkat']; ?></td>
                            <td><?php echo $rows['keterangan']; ?></td>
                        </tr>
                    <?php $nomor++;
                    endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php include "operatorFooter.php" ?>