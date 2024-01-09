<?php
include '../config/koneksi.php';
$nama_gejala=$_REQUEST['nama_gejala'];
$definisi=$_REQUEST['definisi'];

$id=$_REQUEST['id'];

$strsql="UPDATE master_penyakit SET master_penyakit='$nama_gejala', definisi='$definisi' WHERE id='$id'";

if (empty($nama_gejala))
{
echo "<script>alert('Anda Belum Memasukkan NAMA PENYAKIT'); document.location.href='page.php?hal=5&aksi=edit&id=$id';</script>";
}
else
{
mysql_query($strsql);
header("location:page.php?hal=5");
}
?>