<?php
session_start();
include 'koneksi.php';

if( isset($_SESSION['login'])){
    header("Location:halamanadmin.php");
    exit;
}
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("select * from tb_admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);

if($cek >0){
    session_start();    
    $_SESSION['username'] = $username;
    $_SESSION['status']= 'login';
    header("location:halamanadmin.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>