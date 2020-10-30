<?php 
include 'koneksi.php';
$no_airwaybill = $_POST['no_airwaybill'];
$status = $_POST['status'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat = $_POST['alamat'];
$telp_perusahaan = $_POST['telp_perusahaan'];
$nama_penerima = $_POST['nama_penerima'];
$alamat_penerima = $_POST['alamat_penerima'];
$telp_penerima = $_POST['telp_penerima'];
$servis = $_POST['servis'];
$kota_asal = $_POST['kota_asal'];
$kota_tujuan = $_POST['kota_tujuan'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$total = $_POST['total'];
$harga2 = $_POST['harga2'];
$asuransi = $_POST['asuransi'];
$total2 = $_POST['total2'];
$total3 = $_POST['total3']; 

mysql_query("INSERT INTO tb_pengiriman VALUES('$no_airwaybill','$status','$nama_perusahaan','$alamat','$telp_perusahaan','$nama_penerima','$alamat_penerima','$telp_penerima','$servis','$kota_asal','$kota_tujuan','$harga','$berat','$total','$harga2','$asuransi','$total2','$total3')");
 
header("location:tabelpengiriman.php?pesan=input");
?>