<?php include "AdminHeader.php"; ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Akun</h1>
</div>
<div class="card">
  <div class="card-header">

  </div>
  <?php
  include "koneksi.php";
  include "queryUser.php";
  $id = $_GET["id"];
  $nipP = htmlspecialchars($_POST["nip"]);
  $namaP =  htmlspecialchars($_POST["nama"]);
  $passwordP = htmlspecialchars($_POST["password"]);
  $roleP = $_POST["role"];
  $updatep = "UPDATE user SET
  nip = '$nipP',
  nama = '$namaP',
  role = '$roleP' WHERE id = $id";
  if (isset($_POST['ubahakun'])) {
    $query = mysqli_query($conn, $updatep);
    if ($query) {
  ?>
      <script>
        alert("Data Berhasil diubah");
        document.location = "profil.php";
      </script>
    <?php
    }
  }

  $selectPid = "SELECT * FROM user WHERE id = '$id'";
  $tampil = mysqli_query($conn, $selectPid);
  $rows = mysqli_fetch_array($tampil);
  if ($rows["id"] != "") {

    ?>
    <div class="card-body">
      <form action="" method="post">
        <div class="mb-3">
          <label for="inputnama" class="form-label">Nama</label>
          <input value="<?php echo $rows['nama']; ?>" required name="nama" type="text" class="form-control" id="inputnama" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="inputnip" class="form-label">NIP</label>
          <input value="<?php echo $rows['nip']; ?>" required name="nip" type="text" class="form-control" id="inputnip">
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputrole">Role</label>
          <select value="<?php echo $rows['role']; ?>" required name="role" class="form-select" id="inputrole">
            <option selected>Pilih Role...</option>
            <option value="Admin">Admin</option>
            <option value="Operator">Operator</option>
          </select>
        </div>
        <button name="ubahakun" type="submit" class="btn btn-primary">Ubah</button>
        <a href="profil.php" class="btn btn-primary">Kembali</a>
      </form>
    <?php } ?>
    </div>
</div>
</div>
<?php include "AdminFooter.php"; ?>