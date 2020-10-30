<?php 
include 'koneksi.php';
$no_airwaybill = $_GET['no_airwaybill'];
$value = mysql_real_escape_string($no_airwaybill);
mysql_query("DELETE FROM tb_pengiriman WHERE no_airwaybill = '$no_airwaybill' ")or die(mysql_error());

header("location:tabelpengiriman.php?pesan=hapus");
?>