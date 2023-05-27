<?php
include "koneksi.php";
include "queryKereta.php";
include "queryPeron.php";

if(isset($_POST['update1'])){
    $jalur1 = $_POST['jalurka1'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, 
    "SELECT * FROM departure_kroya WHERE noka='$jalur1' "));
    $no = $tabel['noka'];
    $nama = $tabel['namaka'];
    $tujuan = $tabel['tujuan'];
    $jam = $tabel['jadwalberangkat'];

    if($nokaupdate = $no){
        $hasil ="update hasilka_kroya set noka='$no', 
        namaka='$nama', tujuan ='$tujuan', 
        jadwalberangkat='$jam' WHERE jalur=1";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}
    
 if(isset($_POST['update2'])){
    $jalur2 = $_POST['jalurka2'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, 
    "SELECT * FROM departure_kroya WHERE noka='$jalur2' "));
    $no = $tabel['noka'];
    $nama = $tabel['namaka'];
    $tujuan = $tabel['tujuan'];
    $jam = $tabel['jadwalberangkat'];

    if($nokaupdate = $no){
        $hasil ="update hasilka_kroya set noka='$no', 
        namaka='$nama', tujuan ='$tujuan', 
        jadwalberangkat='$jam' WHERE jalur=2";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}

 if(isset($_POST['update3'])){
    $jalur3 = $_POST['jalurka3'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, 
    "SELECT * FROM departure_kroya WHERE noka='$jalur3' "));
    $no = $tabel['noka'];
    $nama = $tabel['namaka'];
    $tujuan = $tabel['tujuan'];
    $jam = $tabel['jadwalberangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set noka='$no', 
        namaka='$nama', tujuan ='$tujuan', 
        jadwalberangkat='$jam' WHERE jalur=3";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}
 if(isset($_POST['update4'])){
    $jalur4 = $_POST['jalurka4'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, 
    "SELECT * FROM departure_kroya WHERE noka='$jalur4' "));
    $no = $tabel['noka'];
    $nama = $tabel['namaka'];
    $tujuan = $tabel['tujuan'];
    $jam = $tabel['jadwalberangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set noka='$no', 
        namaka='$nama', tujuan ='$tujuan', 
        jadwalberangkat='$jam' WHERE jalur=4";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}

 if(isset($_POST['update5'])){
     $jalur5 = $_POST['jalurka5'];

    $tabel= mysqli_fetch_array(mysqli_query($conn, 
    "SELECT * FROM departure_kroya WHERE noka='$jalur5' "));
    $no = $tabel['noka'];
    $nama = $tabel['namaka'];
    $tujuan = $tabel['tujuan'];
    $jam = $tabel['jadwalberangkat'];

    if($nokaupdate=$no){
        $hasil ="update hasilka_kroya set noka='$no', 
        namaka='$nama', tujuan ='$tujuan', 
        jadwalberangkat='$jam' WHERE jalur=5";
        $query = mysqli_query($conn, $hasil);
    }else{
        ?>
        <script>
            alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
        </script>
        <?php
    }
}
if(isset($_POST['update6'])){
    $jalur6 = $_POST['jalurka6'];

   $tabel= mysqli_fetch_array(mysqli_query($conn, 
   "SELECT * FROM departure_kroya WHERE noka='$jalur6' "));
   $no = $tabel['noka'];
   $nama = $tabel['namaka'];
   $tujuan = $tabel['tujuan'];
   $jam = $tabel['jadwalberangkat'];

   if($nokaupdate=$no){
       $hasil ="update hasilka_kroya set noka='$no', namaka='$nama', tujuan ='$tujuan', jadwalberangkat='$jam' WHERE jalur=6";
       $query = mysqli_query($conn, $hasil);
   }else{
       ?>
       <script>
           alert('Maaf Nomor KA yang Dimasukkan Tidak Dapat Ditemukan');
       </script>
       <?php
   }
}

$row1 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM hasilka_kroya WHERE jalur=1"));
$row2 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM hasilka_kroya WHERE jalur=2"));
$row3 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM hasilka_kroya WHERE jalur=3"));
$row4 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM hasilka_kroya WHERE jalur=4"));
$row5 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM hasilka_kroya WHERE jalur=5"));
$row6 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM hasilka_kroya WHERE jalur=6"));

?>