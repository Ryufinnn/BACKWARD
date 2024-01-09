<?php
include "koneksi.php";
$nama_gejala=$_REQUEST['nama_gejala'];
$definisi=$_REQUEST['definisi'];


$strsql="INSERT INTO master_penyakit (master_penyakit,definisi) VALUES ('$nama_gejala','$definisi')";

if (empty($nama_gejala))
{
echo "<script>alert('Anda Belum Memasukkan NAMA PENYAKIT'); document.location.href='page.php?hal=5&aksi=add';</script>";
}
else
{
mysql_query($strsql);
header("location:page.php?hal=5");
}
?>