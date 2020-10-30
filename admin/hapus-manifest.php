<?php 
include 'koneksi.php';
$no_airwaybill = $_GET['no_airwaybill'];
mysql_query("DELETE FROM tb_manifest WHERE no_airwaybill='$no_airwaybill' ")or die(mysql_error());

header("location:tabelmanifest.php?pesan=hapus");
?>