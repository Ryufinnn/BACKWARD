<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: 18px;
	color: #000000;
}
.style2 {font-family: "Times New Roman", Times, serif}
.style6 {font-family: "Times New Roman", Times, serif; font-size: 16px; }
-->
</style>
</head>

<body>
<p class="previous style2">&nbsp;</p>
<table class="table table-condensed table-bordered table-hover" >
                    <thead>
                    	<td width="3%"><font face="Comic Sans MS, cursive" class="text-error text-center">No</font></td>
                        <td width="10%"><font face="Comic Sans MS, cursive" class="text-error text-center">Nama Penyakit</font></td>
                        <td width="30%"><font face="Comic Sans MS, cursive" class="text-error text-center">Keterangan</font></td>
                        
                    </thead>
  <?php 
  include_once("config/koneksi.php");
  $s = mysql_query("select * from master_penyakit order by id asc");
				$i = 1;
                    while($data=mysql_fetch_array($s)){
                        $kode=$data['idt'];
                        $nama=$data['master_penyakit'];
						$ket=$data['ket'];
						$solusi=$data['solusi'];
                    ?>
                    <tbody>
                    	<td><font face="Comic Sans MS, cursive" class="text-info text-center"><?php echo $i ?></font></td>
                        <td><font face="Comic Sans MS, cursive" class="text-error text-center"><?php echo "$nama";?></font></td>
                        <td align="justify"><font face="Comic Sans MS, cursive" class="text-info text-left"><?php echo "$solusi";?></font></td>
                       
                    </tbody>
                    <?php $i++; } ?>
                    </table>
					<hr>
					<br>
					<div align="center">
<img src="images/banner.jpg" width="600"></div>
</body>
</html>
