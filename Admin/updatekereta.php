<?php include "AdminHeader.php"; ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ubah Data Kereta Tambahan</h1>
</div>
<div class="card">
  <div class="card-header">

  </div>
  <div class="card-body">
    <?php
    include "koneksi.php";
    include "queryKereta.php";
    $id = $_GET['id'];
    $nokaP = htmlspecialchars($_POST["noka"]);
    $namakaP = htmlspecialchars($_POST["namaka"]);
    $tujuanP = htmlspecialchars($_POST["tujuan"]);
    $jadwalberangkatP = htmlspecialchars($_POST["jadwalberangkat"]);
    $jadwaldatangP = htmlspecialchars($_POST["jadwaldatang"]);
    $jalurP = htmlspecialchars($_POST["jalur"]);
    $stamformasiP = htmlspecialchars($_POST["stamformasi"]);
    $keteranganP = htmlspecialchars($_POST["keterangan"]);
    $jenisP = $_POST["jenis"];
    $updateK = "UPDATE departure_kroya SET
            noka = '$nokaP', namaka = '$namakaP',
            tujuan = '$tujuanP', jadwalberangkat = '$jadwalberangkatP', 
            jadwaldatang = '$jadwaldatangP', jalur = '$jalurP',
            stamformasi = '$stamformasiP', 
            keterangan = '$keteranganP', jenis = '$jenisP' 
            WHERE id = $id";
    if (isset($_POST['ubah'])) {
      $query = mysqli_query($conn, $updateK);
      if ($query) {
    ?>
        <script>
          alert("Data Berhasil diubah");
          document.location = "tambahan.php"
        </script>
      <?php
      }
    }
    $selectKW = "SELECT * FROM departure_kroya WHERE id = '$id'";
    $row = mysqli_fetch_array(mysqli_query($conn, $selectKW));
    if ($row != "") {
      ?>
      <form method="post">
        <div class="mb-3">
          <label for="noka" class="form-label">Nomor Kereta</label>
          <input value='<?php echo $row['noka']; ?>' required name="noka" type="text" class="form-control" id="noka" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="namaka" class="form-label">Nama Kereta</label>
          <input value='<?php echo $row['namaka']; ?>' required name="namaka" type="text" class="form-control" id="namaka">
        </div>
        <div class="mb-3">
          <label for="tujuan" class="form-label">Tujuan</label>
          <input value='<?php echo $row['tujuan']; ?>' required name="tujuan" type="text" class="form-control" id="tujuan">
        </div>
        <div class="mb-3">
          <label for="jadwaldatang" class="form-label">Jadwal Kedatangan</label>
          <input value='<?php echo $row['jadwaldatang']; ?>' required name="jadwaldatang" type="text" class="form-control" id="jadwaldatang">
        </div>
        <div class="mb-3">
          <label for="jadwalberangkat" class="form-label">Jadwal Keberangkatan</label>
          <input value='<?php echo $row['jadwaldatang']; ?>' required name="jadwalberangkat" type="text" class="form-control" id="jadwalberangkat">
        </div>
        <div class="mb-3">
          <label for="jalur" class="form-label">Jalur</label>
          <input value='<?php echo $row['jalur']; ?>' required name="jalur" type="number" class="form-control" id="jalur">
        </div>
        <div class="mb-3">
          <label for="stamformasi" class="form-label">Stamformasi</label>
          <input value='<?php echo $row['stamformasi']; ?>' name="stamformasi" type="text" class="form-control" id="stamformasi">
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input value='<?php echo $row['keterangan']; ?>' name="keterangan" type="text" class="form-control" id="keterangan">
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="jenis">Jenis Kereta</label>
          <select value='<?php echo $row['jenis']; ?>' required name="jenis" class="form-select" id="jenis">
            <option selected>Pilih Jenis Kereta...</option>
            <option value="KB">Kereta Barang</option>
            <option value="KRE">Kereta Reguler</option>
            <option value="KR">Kereta Regional</option>
          </select>
        </div>
        <button name="ubah" type="submit" class="btn btn-primary">Ubah</button>
        <a href="operator.php" class="btn btn-primary">Kembali</a>
      </form>
    <?php } ?>
  </div>
</div>

</div>
<?php include "AdminFooter.php"; ?>