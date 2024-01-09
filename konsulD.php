<?php
include "config/koneksi.php";
$key=$_REQUEST['key'];
$id_gejala=$_REQUEST['id_gejala'];
$tgl = date('d M Y');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-family: "Times New Roman", Times, serif}
.style7 {color: #0000FF}
-->
</style>
</head>
<body>

  <?php  
if($_POST['penyakit']=="1")
{  
$hasil="Polio non-paralisis";  
}
else if($_POST['penyakit']=="2")
{  
$hasil="Polio paralisis spinal" ; 
}
else if($_POST['penyakit']=="3")
{  
$hasil="Polio bulbar (syndrom pasca-polio)";  
}
?>
    <p>Gejala Penyakit <b> <?php echo $hasil;?> </b> </p>
<hr>

<table width="682" border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="678" valign="top">
<table width="102%" height="82" border="0" cellpadding="1" cellspacing="1">
<tr>

<br>
<form method="post" action="Home.php?page=cek">
<input type="hidden" name="id_penyakit" value="<?php echo $id_penyakit; ?>" />
<?php
$strsql="select * from master_gejala order by id asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);
echo "<input type='hidden' name='jml' value='$rt'>";
while($row=mysql_fetch_array($hasil))
{
	if($_POST['penyakit']=="1"){
			if($row[id]==1 or $row[id]==2 or $row[id]==3 or $row[id]==4 or $row[id]==5 or $row[id]==6 or $row[id]==7 or $row[id]==8 or $row[id]==9 or $row[id]==10 or $row[id]==11){
			?>
			<tr bgcolor="<?php echo $warna; ?>">
  <td align="center" width="10%"><input type="checkbox" name="id_gejala[]" value="<?php echo $row[id]; ?>" /></td>
  <td height="25" width="90%"><span class="style2">Apakah Anda  <?php echo $row[master_gejala]; ?> ?</span> </td>
</tr>
			<?php
			}
	}elseif($_POST['penyakit']=="2"){
			if($row[id]==1 or $row[id]==2 or $row[id]==3 or $row[id]==4 or $row[id]==6 or $row[id]==12 or $row[id]==13 or $row[id]==14 or $row[id]==15){
			?>
			<tr bgcolor="<?php echo $warna; ?>">
  <td align="center" width="10%"><input type="checkbox" name="id_gejala[]" value="<?php echo $row[id]; ?>" /></td>
  <td height="25" width="90%"><span class="style2">Apakah Anda  <?php echo $row[master_gejala]; ?> ?</span> </td>
</tr>
			<?php
			}
	}elseif($_POST['penyakit']=="3"){
			if($row[id]==1 or $row[id]==2 or $row[id]==3 or $row[id]==6 or $row[id]==15 or $row[id]==16 or $row[id]==17 or $row[id]==17 or $row[id]==18 or $row[id]==19 or $row[id]==20 or $row[id]==21 or $row[id]==22 or $row[id]==23){
			?>
			<tr bgcolor="<?php echo $warna; ?>">
  <td align="center" width="10%"><input type="checkbox" name="id_gejala[]" value="<?php echo $row[id]; ?>" /></td>
  <td height="25" width="90%"><span class="style2">Apakah Anda  <?php echo $row[master_gejala]; ?> ?</span> </td>
</tr>

			<?php
			}
	}
$no++;

//if ($no%2<>0) {$warna="#ffffff";} else {$warna="#ffffff";}
}
?>

<tr>
  <td height="25" colspan="2"><input name="submit" type="submit" value=" Penyakit Anda !!! " /></td>
</tr>
</form>
</table></td>
</tr>
</table>




</body>
</html>