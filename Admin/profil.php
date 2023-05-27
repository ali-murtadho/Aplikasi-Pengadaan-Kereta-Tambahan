<?php include "AdminHeader.php" ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="tambahakun.php" class="btn btn-primary">
            <i class="fas fa-plus">
                Tambah Akun
            </i>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include "koneksi.php";
                    include "queryUser.php";

                    $nomor = 1;
                    $tampil = mysqli_query($conn, $selectp);
                    while ($rows = mysqli_fetch_array($tampil)) {
                    ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $rows["nama"]; ?></td>
                            <td><?php echo $rows["nip"]; ?></td>
                            <td><?php echo $rows["role"]; ?></td>
                            <td>
                                <a href="updateakun.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-circle">
                                    <i class="fas fa-pencil-alt"></i></a>
                                <a href="deleteuser.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php include "AdminFooter.php" ?>