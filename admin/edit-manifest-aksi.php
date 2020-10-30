<?php 
include 'koneksi.php';      
$no_airwaybill = $_POST['no_airwaybill'];
$jenis_manifest = $_POST['jenis_manifest'];
$no_manifest = $_POST['no_manifest'];
$tanggal_manifest = $_POST['tanggal_manifest'];
$kota_asal = $_POST['kota_asal'];
$kota_tujuan = $_POST['kota_tujuan']; 

mysql_query("UPDATE tb_manifest SET no_airwaybill='$no_airwaybill', jenis_manifest='$jenis_manifest', no_manifest='$no_manifest', kota_asal='$kota_asal', kota_tujuan='$kota_tujuan' WHERE no_airwaybill='$no_airwaybill' ");
 
header("location:tabelmanifest.php?pesan=input");
?>