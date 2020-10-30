<?php 
include 'koneksi.php';
$id_rate = $_POST['id_rate'];
$type_rate = $_POST['type_rate'];
$servis = $_POST['servis'];
$kota_asal = $_POST['kota_asal'];
$kota_tujuan = $_POST['kota_tujuan'];
$harga = $_POST['harga'];
 
mysql_query("INSERT INTO tb_publicrate VALUES('$id_rate','$type_rate','$servis','$kota_asal','$kota_tujuan','$harga')");
 
header("location:publicrate.php?pesan=input");
?>