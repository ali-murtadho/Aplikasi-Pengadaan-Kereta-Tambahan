<?php 

include "koneksi.php";
include "queryKereta.php";
$i = mysqli_query($conn, $selectR);
$data = "
<table border='1' border-collapse: collapse;>
<thead>
    <tr>
        <th>Nomor KA</th>
        <th>Nama KA</th>
        <th>Tujuan</th>
        <th>Jam Berangkat</th>
        <th>Jam Datang</th>
        <th>Jalur</th>
        <th>Stamformasi</th>
        <th>Keterangan</th>
        <th>Jenis</th>
    </tr>
</thead>
<tbody>
";
while($row = mysqli_fetch_array($i)){
    $data.="
    <tr>
        <td>$row[noka]</td>
        <td>$row[namaka]</td>
        <td>$row[tujuan]</td>
        <td>$row[jadwalberangkat]</td>
        <td>$row[jadwaldatang]</td>
        <td>$row[jalur]</td>
        <td>$row[stamformasi]</td>
        <td>$row[keterangan]</td>
        <td>$row[jenis]</td>
    </tr>";}
    echo"
</tbody>
</table>";
$name = "Tambahan_".date("d-m-Y");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$name.xls");

echo $data;
?>
