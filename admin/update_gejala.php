<?php
include "koneksi.php";
$nama_gejala=$_REQUEST['nama_gejala'];
$id=$_REQUEST['id'];

$strsql="UPDATE master_gejala SET master_gejala='$nama_gejala' WHERE id='$id'";

if (empty($nama_gejala))
{
echo "<script>alert('Anda Belum Memasukkan NAMA GEJALA'); document.location.href='page.php?hal=6&aksi=edit&id=$id';</script>";
}
else
{
mysql_query($strsql);
header("location:page.php?hal=6");
}
?>