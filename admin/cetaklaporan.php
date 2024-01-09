
<body onLoad="javascript:window:print()">
<?php

include '../config/koneksi.php';
//-----------------------Header----------------------------\\
$tgl1 = date('M Y');

?>
<style type="text/css">
<!--
.style2 {
	color: #0066FF;
	font-size: 18px;
}
-->
</style>


<h2 align="center">LAPORAN DATA PASIEN</h2><hr>
<p align="center">Bulan : <?php echo "$tgl1";?></p>
<table id='theList' border=1 width='100%'>
  <tr>
    <th>No.</th>
	<th>ID Pasien</th>
    <th>Nama Pasien</th>
    
    <th>Jenis Kelamin</th>
	<th>No Hp</th>
    <th>Alamat</th>
	
  </tr>
  <?php
$sql = mysql_query("select * from acount order by id_acount asc");
$no=1;
while($r = mysql_fetch_array($sql)){

?>
  <tr>
    <td class='td' align='center'><?echo$no;?></td>
	
    <td class='td'>P-0<?echo"$r[id_acount]";?></td>
    <td class='td' width='30%' ><?echo"$r[nm_depan]";?></td>
    <td class='td'><?echo$r[jk];?></td>
    <td class='td'><?echo$r[nm_belakang];?></td>
    <td class='td'><?echo$r[alamat];?></td>
  </tr>
  <?
$no++;
}
?>
</table>
<br><br><br>
	<?php
echo "<table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Padang, $tgl</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";

echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td>(................................)</td></tr></table>";

?>
