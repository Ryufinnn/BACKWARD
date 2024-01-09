<?php include "config/koneksi.php";?>

<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 18px;
}
.style3 {
	
	font-size: 13px;
	font-family:Arial, Helvetica, sans-serif;
	color:#000000
	 ;
}

-->
</style>
<br><br>
<p>Hasil Konsultasi</p> <hr>
<?php

$sql_user = mysql_query("select * from acount where id_acount='$_SESSION[id_acount]'");
						$detail_user = mysql_fetch_array($sql_user);
						if(mysql_num_rows($sql_user) > 0){
							$nama	= $detail_user['nm_depan'];
							$umur	= $detail_user['alamat'];
							$jk	= $detail_user['jk'];
							
							echo   "<span class='style3'>Nama : <b class='text-info'>$nama</b>
									<br>
									Jenis Kelamin: <b class='text-info'>$jk</b>
									<br>
									Alamat: <b class='text-info'>$umur</b></span>
									";
						}
						?>

<p></img>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if (isset($id_gejala))
{
	$pjg_array=count($id_gejala);
	for($k=0;$k<$pjg_array;$k++)
	{
		$ok=$ok+$id_gejala[$k];
	}
	$strsql_temuan="select * from master_penyakit where nilai_temuan='$ok' or nilai_temuan1='$ok' or nilai_temuan2='$ok' or nilai_temuan3='$ok' or nilai_temuan4='$ok' or nilai_temuan5='$ok'";
	$hasil_temuan=mysql_query($strsql_temuan);

	echo "</br>";
	if(mysql_num_rows($hasil_temuan)<1){
	echo"<span class='style3'>Aplikasi sistem pakar ini menyatakan bahwa anda tidak terdiagnosa Penyakit Polio,Jika anda ingin konsultasi kembali  <b><a href='Home.php?page=pilih_penyakit'>Klik disini </a></b></span> ";
	}else{
	
	while($row_temuan=mysql_fetch_array($hasil_temuan))
	{
	echo " <span class='style3'>Anda Terdiagnosa Penyakit:&nbsp;</span>";
	echo "<table width='600' border='0'>
				<span class='style3'><tr><span class='style3'><b>$row_temuan[master_penyakit]</b></span><td  align='justify'>   </br><span class='style3'> Keterangan: $row_temuan[definisi] </br>  </br> Solusi: $row_temuan[solusi]</br></br>  </td></tr>
				</table> <br><br>";
	}
	
	}
	
	
}
?>
<a href="javascript:window:print()"><span class='style3'> Cetak Hasil Konsultasi </span></a>
	<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td><span class='style3'>Padang, $tgl </span></td></tr>";
echo "<tr><td></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";

echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "</table>";

?>
