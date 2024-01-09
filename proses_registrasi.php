<?php
include "config/koneksi.php";
$page = $_GET[page];
$act = $_GET[act];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[nm_depan]) 
or empty($_POST[nm_belakang]) 
or empty($_POST[email]) 
or empty($_POST[pass]) 
or empty($_POST[jk]) 
or empty($_POST[thn]) 
or empty($_POST[bln]) 
or empty($_POST[tgl])){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='Home.php?page=registrasi'</script>";
}else{
$cek=mysql_query("select * from acount where email='$_POST[email]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, data ini sudah terdaftar,silahkan masukan data yang lain !');window.location.href='Home.php?page=registrasi'</script>";
} else {

mysql_query("insert into acount(nm_depan,nm_belakang,email,password,jk,tgl_lahir,alamat)
 value('$_POST[nm_depan]','$_POST[nm_belakang]','$_POST[email]','$_POST[pass]','$_POST[jk]','$_POST[thn]-$_POST[bln]-$_POST[tgl]','$_POST[alamat]')");
 echo"<script>alert('Selamat, Account Anda Sudah Teregistrasi, Silahkan Login untuk Masuk Ke Dalam Sistem !');window.location.href='Home.php?page=login_user'</script>";
}
}
?>