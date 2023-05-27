<?php
include "koneksi.php";
include "queryUser.php";
$id = $_GET["id"];
if (isset($_POST['ubahakun'])) {
  $nipP = htmlspecialchars($_POST["nip"]);
  $namaP =  htmlspecialchars($_POST["nama"]);
  $passwordP = htmlspecialchars($_POST["password"]);
  $roleP = $_POST["role"];
  $updatep = "UPDATE user SET
                nip = '$nipP',
                nama = '$namaP',
                role = '$roleP' WHERE id = '$id'";
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
$tampil = mysqli_query($conn, $selectp);
$rows = mysqli_fetch_array($tampil);
if ($rows["id"] != "")

?>