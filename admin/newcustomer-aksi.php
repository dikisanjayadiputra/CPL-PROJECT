<?php 
include 'koneksi.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$telp_perusahaan = $_POST['telp_perusahaan'];
$alamat = $_POST['alamat'];
$nama_pic = $_POST['nama_pic'];
$telp_pic = $_POST['telp_pic'];
$email = $_POST['email'];
$no_npwp = $_POST ['no_npwp'];
 
mysql_query("INSERT INTO tb_customer VALUES('$id_pelanggan','$nama_perusahaan','$telp_perusahaan','$alamat','$nama_pic','$telp_pic','$email','$no_npwp')");
 
header("location:newcustomer.php?pesan=input");

?>