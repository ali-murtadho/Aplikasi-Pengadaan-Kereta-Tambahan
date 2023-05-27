<?php
include "koneksi.php";
include "queryKereta.php";
include "AdminHeader.php";
if (isset($_POST['simpan'])) {
  $query = mysqli_query($conn, $insertK);
  if ($query) {
?>
    <script>
      alert("Data Berhasil di Tambah");
      document.location = "tambahan.php";
    </script>
<?php
  }
}
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Data Kereta Tambahan</h1>
</div>
<div class="card">
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="inputnoka" class="form-label">Nomor Kereta</label>
        <input required name="noka" type="text" class="form-control" id="inputnoka" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="inputnamaka" class="form-label">Nama Kereta</label>
        <input required name="namaka" type="text" class="form-control" id="inputnamaka">
      </div>
      <div class="mb-3">
        <label for="tujuan" class="form-label">Tujuan</label>
        <input required name="tujuan" type="text" class="form-control" id="tujuan">
      </div>
      <div class="mb-3">
        <label for="jadwaldatang" class="form-label">Jadwal Kedatangan</label>
        <input required name="jadwaldatang" type="text" class="form-control" id="jadwaldatang">
      </div>
      <div class="mb-3">
        <label for="jadwalberangkat" class="form-label">Jadwal Keberangkatan</label>
        <input required name="jadwalberangkat" type="text" class="form-control" id="jadwalberangkat">
      </div>
      <div class="mb-3">
        <label for="jalur" class="form-label">Jalur</label>
        <input required name="jalur" type="number" class="form-control" id="jalur">
      </div>
      <div class="mb-3">
        <label for="stamformasi" class="form-label">Stamformasi</label>
        <input name="stamformasi" type="text" class="form-control" id="stamformasi">
      </div>
      <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input value="Kereta Tambah" required name="keterangan" type="text" class="form-control" id="keterangan">
      </div>

      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Jenis Kereta</label>
        <select required name="jenis" class="form-select" id="inputGroupSelect01">
          <option selected>Pilih Jenis Kereta...</option>
          <option value="Kereta Barang">Kereta Barang</option>
          <option value="Kereta Reguler">Kereta Reguler</option>
          <option value="Kereta Regional">Kereta Regional</option>
        </select>
      </div>
      <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
      <a href="tambahan.php" class="btn btn-primary">Kembali</a>
    </form>
  </div>
  <?php include "AdminFooter.php" ?>