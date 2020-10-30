<?php 
include 'koneksi.php';      
$id_pelanggan = $_POST['id_pelanggan'];
$status = $_POST['status'];
$nama_penerima = $_POST['nama_penerima'];
$alamat_penerima = $_POST['alamat_penerima'];
$telp_penerima = $_POST['telp_penerima'];
$kota_tujuan = $_POST['kota_tujuan']; 

mysql_query("UPDATE tb_customer SET id_pelanggan='$id_pelanggan', status='$status', nama_penerima='$nama_penerima', alamat_penerima='$alamat_penerima',telp_penerima='$telp_penerima', kota_tujuan='$kota_tujuan' WHERE no_airwaybill='$no_airwaybill' ");
 
header("location:tabelcustomer.php?pesan=input");
?>