<?php
error_reporting(0);
  session_start();	
  require ("config/koneksi.php"); 				//koneksi
  include "config/fungsi_kalender.php";		//fungsi kalender
  include "config/library.php";				//fungsi library
  include "config/fungsi_indotgl.php";		//membuat format tangga indonesia
  require ("config/autonumber.php");           // membuat auto number
  require ("config/tglindo.php"); 				//koneksi
  
?>
<html>
<head>
<title>Sistem Pakar</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/stylecombo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	
function harusangka(jumlah){ // fungsi untuk harus angka pada text
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}
</script>
<style type="text/css"
<!--
.style2 {color: #000033}
.style4 {
	font-family: "Courier New", Courier, monospace;
	color: #FFFFFF;
}
body {
	background-image: url(images/aa.jpg);
	background-color: #FFFFFF;
}
.style5 {color: #0099FF}
.style6 {color: #FF0000}
.style7 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
<style type="text/css">
    body {
	font-family:tahoma;
	font-size:12px;
	background-image: url(img_galeri/a.gif);
}
    #container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
    input[type="text"],input[type="email"],select { width:200px; }
    input[type="text"],input[type="email"], textarea,select { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="date"] { width:200px; }
    input[type="date"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="search"] { width:200px; }
    input[type="search"], textarea,select { padding:5px; margin:2px 0px; border: 1px solid #777; }
    input[type="submit"], input[type="reset"],input[type="button"] { padding: 3px 15px; margin:2px 0px; font-weight:bold; cursor:pointer; }
 	#error { border:1px solid red; background:#ffc0c0; padding:5px; }
.style1 {color: #0000FF}
.style2 {font-family: "Times New Roman", Times, serif}
.style6 {font-style: italic}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div id="wrapper">
<!--------------- #header --------------->
<div class="style2" id="header">
<div id='header'><img src="images/logo1.jpg" width="1197" height="200" /></div>
</div>
<!--------------- #menu --------------->

<link href="nav-style.css" rel="stylesheet" type="text/css" />

<ul class="menu">
<li><a href='./'> <img src="images/home.png" width='15' height='15' > Home</a></li>
<?php
if(empty($_SESSION[id_acount])){
?>

<li><a href="Home.php?page=profil">Pencegahan</a></li>

<li><a href="Home.php?page=login_user"><i class="icon-daftar"></i> Login</a>
</li>
<li><a href="Home.php?page=petunjuk"><i class="icon-daftar"></i> Petunjuk</a>

</li>
 
<li><a href="Home.php?page=Contact">Kontak</a></li>


<?php
}else{
?>
<li><a href="Home.php?page=profil">Pencegahan</a></li>

<li><a href="Home.php?page=pilih_penyakit"><i class="icon-daftar"></i> Konsultasi</a>
</li>
<li><a href="Home.php?page=petunjuk"><i class="icon-daftar"></i> Petunjuk</a>

</li>
 
<li><a href="Home.php?page=Contact">Kontak</a></li>
<li><a href='exit.php'>Logout</a></li>
<?php include "content.php"; ?>
<?php
}
?>
</ul>

<!--------------- #content --------------->
<table border='0'>
<tr>
<td width="332">
<!--------------- #sidebar --------------->
<div id="content">

  <p align="center" class="style4"><span class=jam>
    <embed src='clock.swf'
			quality='high' width='243' height='180'
			type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi? P1_Prod_Version=ShockwaveFlash'>     
  </span></p>
  <div class="myaccount">
    <div class="small_heading style5">
      <p>
        <?php      
$tgl_skrg=date("d");
$bln_skrg=date("n");
$thn_skrg=date("Y");
echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
?>
     </div>
	 <br/>
    
    </p>
</div>
</td>
<td width="896">
<div id="sidebar">
<?php
if($_GET[page]=='login'){
include"login.php";
}

else if($_GET[page]=='Contact'){
include"contact.php";
}
else if($_GET[page]=='profil'){
include"profil.php";
}
else if($_GET[page]=='cek'){
include"cekkonsul.php";
}
else if($_GET[page]=='setgallery'){
include"setting_gallery.php";
}
else if($_GET[page]=='registrasi'){
include"registrasi.php";
}
else if($_GET[page]=='petunjuk'){
include"cara.php";
}
else if($_GET[page]=='konsultasi'){
include"konsulD.php";
}
else if($_GET[page]=='pilih_penyakit'){
include"konsultasi.php";
}
else if($_GET[page]=='login_user'){
include"login_user.php";
}

else if($page='home'){
?>
  <div class="previous style2">
    <p align="center" class="style6 style1">&nbsp;</p>
	<table width="100%" border="1">
  <tr>
    
    <td><img src="images/polio.jpg" ></td>
   
  </tr>
</table>
<hr>
    Sistem pakar adalah sistem yang berusaha mengadopsi pengetahuan manusia   ke komputer yang dirancang untuk memodelkan kemampuan menyelesaikan   masalah seperti layaknya seorang pakar. Dengan sistem pakar ini, orang   awam pun dapat menyelesaikan masalahnya atau hanya sekedar mencari suatu   informasi berkualitas yang sebenarnya hanya dapat diperoleh dengan   bantuan para ahli di bidangnya. Sistem pakar ini juga akan dapat   membantu aktivitas para pakar sebagai asisten yang berpengalaman dan   mempunyai asisten yang berpengalaman dan mempunyai pengetahuan yang   dibutuhkan. Dalam penyusunannya, sistem pakar mengkombinasikan   kaidah-kaidah penarikan kesimpulan (<em>inference rules) </em>dengan basis   pengetahuan tertentu yang diberikan oleh satu atau lebih pakar dalam   bidang tertentu. Kombinasi dari kedua hal tersebut disimpan dalam   komputer, yang selanjutnya digunakan dalam proses pengambilan keputusan   untuk penyelesaian masalah tertentu.
<div align="center">
    <?php 
} 
?>
  </div>
</div>
</td>

</tr>
</table>
<!--------------- #footer --------------->
<center>
<div id="footer" align="center">
Copyright &copy; 2017 by: <a href="#">Sistem Pakar </a></div>
</div>
</center>
</div>
</body>
</html>
