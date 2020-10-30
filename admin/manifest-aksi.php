<?php 
include 'koneksi.php';
$no_airwaybill = $_POST['no_airwaybill'];
$jenis_manifest = $_POST['jenis_manifest'];
$no_manifest = $_POST['no_manifest'];
$tanggal_manifest = $_POST['tanggal_manifest'];
$kota_asal = $_POST['kota_asal'];
$kota_tujuan = $_POST['kota_tujuan'];
 
mysql_query("INSERT INTO tb_manifest VALUES('$no_airwaybill','$jenis_manifest','$no_manifest','$tanggal_manifest','$kota_asal','$kota_tujuan')");
 
header("location:tabelmanifest.php?pesan=input");
?>