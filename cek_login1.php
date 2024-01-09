<?php
include "config/koneksi.php";
$username = $_REQUEST[username];
$pass     = md5($_REQUEST[password]);

$sql=mysql_query("select * from admin where username='$username' and password='$pass'");
$ketemu=mysql_num_rows($sql);
// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION[username]     = $r[nama_lengkap];
  $_SESSION[password]     = $r[password];
 header('location:./home.php?page=home&id_admin='.$id_admin.'');
 }
else{
  echo "<script>alert('Username atau Password Anda tidak benar,Silahkan ulangi lagi !');javascript:history.go(-1)</script>";  
}


?>
