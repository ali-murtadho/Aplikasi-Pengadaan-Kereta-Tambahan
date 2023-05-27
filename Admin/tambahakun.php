<?php include "AdminHeader.php"; ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Akun</h1>
</div>
    <div class="card">
  <div class="card-header">
  
  </div>
  <?php 
include "koneksi.php";
include "queryUser.php";
if(isset($_POST['simpan'])){
  $query = mysqli_query($conn, $insertp);
  if($query){
    ?>
    <script>
      alert("Data Berhasil di Tambah");
      document.location = "profil.php";
    </script>
    <?php  
  }
}
?>
  <div class="card-body">
  <form action="" method="post">
  <div class="mb-3">
    <label for="inputnama" class="form-label" >Nama</label>
    <input required name="nama" type="text" class="form-control" id="inputnama" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="inputnip" class="form-label" >NIP</label>
    <input required name="nip" type="text" class="form-control" id="inputnip">
  </div>
  <div class="mb-3">
    <label for="inputpass" class="form-label" >Password</label>
    <input required name="password" type="password" class="form-control" id="inputpass">
  </div>
  <div class="input-group mb-3">
  <label class="input-group-text" for="inputrole">Role</label>
  <select required name="role" class="form-select" id="inputrole">
    <option selected>Pilih Role...</option>
    <option value="Admin">Admin</option>
    <option value="Operator">Operator</option>
  </select>
</div>
<button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
  <a href="profil.php" class="btn btn-primary">Kembali</a>
</form>
  </div>
</div>
    </div>
<?php include "AdminFooter.php"; ?>