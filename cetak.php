
<title>Cetak Hasil Konsultasi</title>
<body onLoad="javascript:window:print()">
<div id="header">
  <div align="center">
    <p>
    <h2>SISTEM PAKAR DIAGNOSA PENYAKIT DIARE</h2>
    </p>
  </div>
</div>
<?php  
if($_GET['id']=="1")
{  
$hasil="Diare Akut";  
}
else if($_GET['id']=="2")
{  
$hasil="Diare Kronis" ; 
}
else if($_GET['id']=="3")
{  
$hasil="Diare Infeksi";  
}
?>
    <p align="center" >Gejala Penyakit <b> <?php echo $hasil;?> </b> </p>
<hr>
<table width="682" border="0" cellpadding="1" cellspacing="1" >
<tr>
<td width="678" valign="top">
<table width="102%" height="82" border="0" cellpadding="1" cellspacing="1">
<tr>
<?php
include "config/koneksi.php";
$strsql="select * from master_gejala order by id asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);
echo "<input type='hidden' name='jml' value='$rt'>";
while($row=mysql_fetch_array($hasil))
{
	if($_GET['id']=="1"){
			if($row[id]==1 or $row[id]==2 or $row[id]==3 or $row[id]==4 or $row[id]==7 or $row[id]==9 or $row[id]==10 or $row[id]==14){
			?>
			<tr>
				<td height="25" width="90%"><span class="style2"><?php echo $row[master_gejala]; ?> <br></span> </td>
			</tr>
			<?php
			}
	}elseif($_GET['id']=="2"){
			if($row[id]==1 or $row[id]==2 or $row[id]==3 or $row[id]==5 or $row[id]==8 or $row[id]==10 or $row[id]==13){
			?>
			<tr>
				<td height="25" width="90%"><span class="style2"><?php echo $row[master_gejala]; ?> </span> </td>
			</tr>
			<?php
			}
	}elseif($_GET['id']=="3"){
			if($row[id]==3 or $row[id]==4 or $row[id]==6 or $row[id]==8 or $row[id]==11 or $row[id]==14 or $row[id]==15){
			?>
			<tr>
				<td height="25" width="90%"><span class="style2"><?php echo $row[master_gejala]; ?> </span> </td>
			</tr>
			<?php
			}
	}
$no++;
//if ($no%2<>0) {$warna="#ffffff";} else {$warna="#ffffff";}
}
?>

 
</form>
</table></td>
</tr>
</table>
<br>
<?php
$strsql="select * from master_penyakit where id='$_GET[id]' order by id asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);
while($row=mysql_fetch_array($hasil))
{

echo"<br><span class='style2'>Definisi : $row[definisi]<br>";
echo"Solusi: $row[solusi]</span>";
}
?>

<div align="left">
    <p><br/> 
    </p>
    
	<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Padang, $tgl</td></tr>";
echo "<tr><td><em>Pakar</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";

echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>dr. Elwtria DMY, Sp.Pk</em></td></tr></table>";

?>

	
  </div>