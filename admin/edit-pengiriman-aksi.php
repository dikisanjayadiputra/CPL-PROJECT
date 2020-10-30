<?php 
include 'koneksi.php';      
$no_airwaybill = $_POST['no_airwaybill'];
$status = $_POST['status'];
$nama_penerima = $_POST['nama_penerima'];
$alamat_penerima = $_POST['alamat_penerima'];
$telp_penerima = $_POST['telp_penerima'];
$kota_tujuan = $_POST['kota_tujuan']; 

mysql_query("UPDATE tb_pengiriman SET no_airwaybill='$no_airwaybill', status='$status', nama_penerima='$nama_penerima', alamat_penerima='$alamat_penerima',telp_penerima='$telp_penerima', kota_tujuan='$kota_tujuan' WHERE no_airwaybill='$no_airwaybill' ");
 
header("location:tabelpengiriman.php?pesan=input");
?>