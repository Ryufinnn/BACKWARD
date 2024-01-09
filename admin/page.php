<?php
include "header.php"; 
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {
	font-size: 14px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style4 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
	font-family: "Comic Sans MS";
}

.style19 {color: #006600}
.style29 {
	font-family: Jokerman;
	color: #000000;
}
.style33 {
	font-family: "Comic Sans MS";
	font-weight: bold;
	font-size: 18px;
	color: #FFFFFF;
}
.style34 {color: #CCCCC}
.style35 {font-size: 24px}
.style36 {font-weight: bold; color: #000000;}
.style37 {
	font-family: "Comic Sans MS";
	font-weight: bold;
	font-size: 16px;
}
.style38 {font-family: Jokerman}
.style40 {color: #000000; font-weight: bold; font-size: 20px; font-family: "Comic Sans MS"; }
.style41 {font-size: 20px}
-->
</style>

  <?php if($_GET['hal']==1) { include "pertanyaan.php"; }
		    if($_GET['gejala']=='entry') { include "gejala.php"; }
			if($_GET['gejala']=='simpan') { include "pgejala.php"; }
			if($_GET['gejala']=='edit') { include "updategejala.php"; }
			if($_GET['gejala']=='pedit') { include "prosesupdategejala.php"; }
			if($_GET['gejala']=='hapus') { include "deletegejala.php"; }
			
		    if($_GET['hal']==2) { include "solusi.php"; }
			if($_GET['penyakit']=='entry') { include "penyakit.php"; }
			if($_GET['penyakit']=='simpan') { include "ppenyakit.php"; }
			if($_GET['penyakit']=='edit') { include "updatepenyakit.php"; }
			if($_GET['penyakit']=='pedit') { include "prosesupdatepenyakit.php"; }
			if($_GET['penyakit']=='hapus') { include "deletepenyakit.php"; }
			
			if($_GET['hal']==3) { include "listpencegahan.php"; }
			if($_GET['pencegahan']=='entry') { include "pencegahan.php"; }
			if($_GET['pencegahan']=='simpan') { include "ppencegahan.php"; }
			if($_GET['pencegahan']=='edit') { include "updatepencegahan.php"; }
			if($_GET['pencegahan']=='pedit') { include "prosesupdatepencegahan.php"; }
			if($_GET['pencegahan']=='hapus') { include "deletepencegahan.php"; }
			
			if($_GET['hal']==4) { include "registrasi.php"; }
			if($_GET['user']=='detail') { include "detailuser.php"; }
			if($_GET['user']=='hapus') { include "deleteuser.php"; }
			
			if($_GET['hal']==5) { include "solusi.php"; }
			if($_GET['relasi']=='entry') { include "relasi.php"; }
			if($_GET['relasi']=='simpan') { include "saverelasi.php"; }
			if($_GET['relasi']=='edit') { include "updaterelasi.php"; }
			if($_GET['relasi']=='pedit') { include "prosesupdaterelasi.php"; }
			if($_GET['relasi']=='hapus') { include "deleterelasi.php"; }
			
			if($_GET['hal']==6) { include "pertanyaan.php"; }
			if($_GET['pesan']=='balas') { include "balas.php"; }
			if($_GET['pesan']=='kirim') { include "pbalas.php"; }
			if($_GET['pesan']=='hapus') { include "deletepesan.php"; }
			if($_GET['hal']=='') { include "home.php"; }
			 ?>


