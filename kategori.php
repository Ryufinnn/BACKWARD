<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #990000;
	font-size: 24px;
}
.style3 {font-size: 18px}
.style4 {color: #FFFFFF}
.style9 {font-size: 14px; font-family: "Times New Roman", Times, serif; }
-->
</style>
</head>

<body>
<?php
if(!isset($_GET[act]))
	{
?>
<br />
<center>
<h2 class="style1">
Manajemen Data Kategori</h2>
</center>
<BR />
<table width="60%" border="1" align="center" bordercolor="#FFFFFF" >

<tr>
<th width="8%" bgcolor="#006699"><span class="style4">No</span></th>
<th width="26%" bgcolor="#006699"><span class="style4">Id Kategori</span></th>
<th width="43%" bgcolor="#006699"><span class="style4">Nama Kategori</span></th>
<th width="23%" bgcolor="#006699"><span class="style4">Aksi</span></th>
</tr>
<?PHP
$no=0;
 $sql="select * from kategori order by id_kategori";
 $res=mysql_query($sql,$con) or die(mysql_error());
 while($data=mysql_fetch_array($res))
	{
	$no++;
?>
<Tr>
<Td><div align="center"><span class="style9"><?php echo $no; ?></span></div></td>
<Td><span class="style9"><?php echo $data[id_kategori]; ?></span></td>
<Td><span class="style9"><?php echo $data[nm_kategori]; ?></span></td>
<td><div align="center" class="style9"><a href='Home.php?page=kategori&act=edit&id=<?php echo $data[id_kategori]; ?>'>Edit</a> | <a href='Home.php?page=kategori&act=hapus&id=<?php echo $data[id_kategori]; ?>'>Hapus</a> </div></td>
</tr>
<?php	
	}
?>
<?php 	
	}else{
	if($_GET[act]=='add')
		{
	?>
	<form name="Aa" method="post" action="">
	<table border='0' width='100%'>
	<Tr>
	<th colspan='2'>TAMBAH DATA KATEGORI</th>
	</tr>
	<Tr>
	<td width='15%'>Nama Kategori</td>
	<Td><input type="text" name="nmkategori" value=""> </td>
	</tr>
	<Tr>
	<Td colspan='2' align='center'><input type="submit" name="simpan" value="SIMPAN"> &nbsp;&nbsp;&nbsp; <input type="submit" name="kembali" value="BACK"> </td>
	</tr>
	</table>
	</form>
	<?php 
			if($_POST[kembali])
			{
			echo "<Script>window.location='Home.php?page=kategori'</script>";
			}
			if($_POST[simpan])
			{
			$sql="insert into kategori value('','$_POST[nmkategori]')";
			$res=mysql_query($sql,$con) or die(mysql_error());
				if($res)
					{
					echo "<script>alert('data tersimpan');window.location='Home.php?page=kategori'</script>";
					}
			}
		}
	if($_GET[act]=='edit')
		{
		$sql="select * from kategori where id_kategori='$_GET[id]'";
		$res=mysql_query($sql,$con) or die(mysql_error());
		$data=mysql_fetch_array($res);
		
	?>
	<form name="Aaa" method="post" action="">
	<table border='0' width='100%'>
	<Tr>
	<th colspan='2'>EDIT DATA KATEGORI</th>
	</tr>
	<Tr>
	<td width='15%'>Nama kategori</td>
	<Td><input type="text" name="nmkategori" value="<?php echo $data[nm_kategori]; ?>"><input type="hidden" name="idkategori" value="<?php echo $data[id_kategori]; ?>"> </td>
	</tr>
	<Tr>
	<Td colspan='2' align='center'><input type="submit" name="ubah" value="UBAH"> &nbsp;&nbsp;&nbsp; <input type="submit" name="kembali" value="BACK"> </td>
	</tr>
	</table>
	</form>
	<?php
			if($_POST[kembali])
			{
			echo "<Script>window.location='Home.php?page=kategori'</script>";
			}
			if($_POST[ubah])
			{
			$sql="update kategori set nm_kategori='$_POST[nmkategori]' where id_kategori='$_POST[idkategori]'";
			$res=mysql_query($sql,$con) or die(mysql_error());
				if($res)
					{
					echo "<script>alert('data berhasil di ubah');window.location='Home.php?page=kategori'</script>";
					}
			} 	
		}
	if($_GET[act]=='hapus')
		{
		$sql="delete from kategori where id_kategori='$_GET[id]'";
		$res=mysql_query($sql,$con) or die(mysql_error());
		if($res)
			{
			echo "<script>alert('data berhasil di hapus');window.location='Home.php?page=kategori'</script>";
			}
		}
	
	}

?>
</table>
<p align="center">
  <input name="button" type=button onclick=location.href='?page=kategori&amp;act=add' value='Tambah Kategori' />
</p>
</body>
</html>
