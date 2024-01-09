<?php

include '../config/koneksi.php';
//-----------------------Header----------------------------\\


?>
<style type="text/css">
<!--
.style2 {
	color: #0066FF;
	font-size: 18px;
}
-->
</style>


<div id='judul_kontent'><h1>Data User</h1></div>
<table id='theList' border=1 width='92%'>
  <tr>
  <th>No.</th>
	<th>ID Pasien</th>
    <th>Nama Pasien</th>
    
    <th>Jenis Kelamin</th>
	<th>No Hp</th>
    <th>Alamat</th>
	<th>Aksi</th>
  </tr>
  <?php
$sql = mysql_query("select * from acount order by id_acount asc");
$no=1;
while($r = mysql_fetch_array($sql)){
if($r[aktif]==1){
$status="Online";
}else{
$status="Offline";
}
?>
  <tr>
  <td class='td' align='center'><?echo$no;?></td>
	
    <td class='td' >P-0<?echo"$r[id_acount]";?></td>
    <td class='td' width='30%' ><?echo"$r[nm_depan]";?></td>
    <td class='td'><?echo$r[jk];?></td>
    <td class='td'><?echo$r[nm_belakang];?></td>
    <td class='td'><?echo$r[alamat];?></td>
    <td><a  href='?hal=4&act=delete&id=<?echo$r[id_acount];?>' onclick="return confirm('Anda yakin untuk menghapus data ini ?')"><button style='width:60px;text-align:center;'>Delete</button></a></td>
  </tr>
  <?
$no++;
}
?>
</table>
<br><br>
<a href="cetaklaporan.php" target="_blank"> Cetak Laporan </a>
<br><br><br><br>
<?
if($_GET[hal]=='4' and $_GET[act]=='delete'){
$sql=mysql_query("delete from acount where id_acount='$_GET[id]'");
echo"<script>window.location.href='?hal=4'</script>";
}

?>
<?php

//--------------------------------------FOOTHER-------------------------------------------\\
include 'footer.php';
?>
