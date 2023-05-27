<?php 
//require "excelreader/excel_reader2.php";
// include "excel_reader2.php";
include "koneksi.php";
include "excel_reader.php";
require "modif-data/excelreader/SpreadsheetReader.php";
require "modif-data/excelreader/SpreadsheetReader_XLSX.php";
require "modif-data/excelreader/SpreadsheetReader_XLS.php";
require "modif-data/excelreader/SpreadsheetReader_CSV.php";

$target = basename($_FILES['fileexcel']['name']) ;
move_uploaded_file($_FILES['fileexcel']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
// chmod($_FILES['tambahan']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
// $berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$noka           = $data->val($i, 1);
	$namaka         = $data->val($i, 2);
    $tujuan         = $data->val($i, 3);
    $jadwalberangkat= $data->val($i, 4);
    $jadwaldatang   = $data->val($i, 5);
    $jalur          = $data->val($i, 6);
    $stamformasi    = $data->val($i, 7);
    $keterangan     = $data->val($i, 8);
    $jenis          = $data->val($i, 9);
 
	// if($noka != "" && $namaka != "" && $tujuan != ""
    //     && $jadwalberangkat != "" && $jadwaldatang != ""){
	// 	// input data ke database (table data_pegawai)
	// 	mysqli_query($conn,
    //     "INSERT into departure_kroya 
    //     values('','$noka','$namaka','$tujuan','$jadwalberangkat',
    //             '$jadwaldatang', '$jalur', '$stamformasi',
    //             '$keterangan','$jenis')");
	// 	$berhasil++;
	// }

    mysqli_query($conn, "INSERT into departure_kroya 
        (id, noka, namaka, tujuan, jadwalberangkat, jadwaldatang, jalur, stamformasi, keterangan, jenis)
         VALUES('','$noka','$namaka','$tujuan','$jadwalberangkat',
                 '$jadwaldatang', '$jalur', '$stamformasi',
                 '$keterangan','$jenis')");
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileexcel']['name']);
 
// alihkan halaman ke index.php
header("location:tambahan.php");
?>