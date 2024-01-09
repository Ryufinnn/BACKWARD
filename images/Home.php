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
<title>Design With Nilla Rahmayati</title>
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
<style type="text/css">
<!--
.style2 {color: #000033}
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
    body { font-family:tahoma; font-size:12px; }
    #container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
    input[type="text"],input[type="email"],select { width:200px; }
    input[type="text"],input[type="email"], textarea,select { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="date"] { width:200px; }
    input[type="date"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="search"] { width:200px; }
    input[type="search"], textarea,select { padding:5px; margin:2px 0px; border: 1px solid #777; }
    input[type="submit"], input[type="reset"],input[type="button"] { padding: 3px 15px; margin:2px 0px; font-weight:bold; cursor:pointer; }
 	#error { border:1px solid red; background:#ffc0c0; padding:5px; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div id="wrapper">
<!--------------- #header --------------->
<div class="style2" id="header">
<div id='header'><img src="images/header.png" width="1197" height="195" /></div>
</div>
<!--------------- #menu --------------->

<link href="nav-style.css" rel="stylesheet" type="text/css" />

<ul class="menu">
<li><a href='./'> <img src="images/home.png" width='15' height='15' > Home</a></li>
<li><a href="Home.php?page=profil">Profil</a></li>
<li><a href="Home.php?page=beritaterkini">Berita</a></li>
<li><a href=""><i class="icon-daftar"></i> Kategori Berita</a>
<ul>
<li><a href="Home.php?page=sejarah">Sejarah</a></li>
<li><a href="Home.php?page=kesenian">Kesenian</a></li>
<li><a href="Home.php?page=artikel">Artikel</a></li>
<li><a href="Home.php?page=budaya">Budaya</a></li>
</ul>
</li>
<li><a href="Home.php?page=Galery">Galery</a></li>
<li><a href="Home.php?page=Contact">Contact</a></li>
<?php
if(empty($_SESSION[username])){
?>
<li><a href='Home.php?page=login'>Login</a></li>
<?php
}else{
?>
<li><a href=""><i class="icon-daftar"></i> Manajemen Berita</a>
<ul>
<li><a href="Home.php?page=daerah">Data Daerah</a></li>
<li><a href="Home.php?page=kategori">Data Kategori</a></li>
<li><a href="Home.php?page=berita">Data Berita</a></li>
<li><a href="Home.php?page=requestberita">Data Request</a></li>
</ul>
</li>
<li><a href='setting_galery.php'>setting galery</a></li>
<li><a href='exit.php'>Logout</a></li>
<?php include "content.php"; ?>
<?php
}
?>
</ul>

<!--------------- #content --------------->
<table border='0'>
<tr>
<td>
<!--------------- #sidebar --------------->
<div id="content">

  <p align="center" class="style4"><span class=jam>
    <embed src='clock.swf'
			quality='high' width='300' height='180'
			type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi? P1_Prod_Version=ShockwaveFlash'>     
  </span>NDER</p>
  <div class="myaccount">
    <div class="small_heading style5">
      <?php      
$tgl_skrg=date("d");
$bln_skrg=date("n");
$thn_skrg=date("Y");
echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
?>
    </div>
    </div>
  <p><br/>
    
    </p>
</div>
</td>
<td>
<div id="sidebar">
<?php
if($_GET[page]=='login'){
include"login.php";
}
else if($_GET[page]=='kategori'){
include ("kategori.php");
}
else if($_GET[page]=='daerah'){
include"daerah.php";
}
else if($_GET[page]=='berita'){
include"berita.php";
}
else if($_GET[page]=='requestberita'){
include"requestberita.php";
}
else if($_GET[page]=='beritaterkini'){
include"news.php";
}
else if($_GET[page]=='sejarah'){
include"news_sejarah.php";
}
else if($_GET[page]=='kesenian'){
include"news_kesenian.php";
}
else if($_GET[page]=='budaya'){
include"news_budaya.php";
}
else if($_GET[page]=='artikel'){
include"news_artikel.php";
}
else if($_GET[page]=='Contact'){
include"contact.php";
}
else if($page='home'){
?>
  <div class="previous">
    <p align="center" class="style6">KEBUDAYAAN MINANGKABAU </p>
    <p align="center"><img src="images/1.jpg" alt="1" width="812" height="253" longdesc="images/1.jpg"></p>
    <p align="justify" class="style7">	Nama  Minangkabau berasal dari  dua kata, minang dan kabau. Nama itu dikaitkan  dengan suatu legenda khas Minang yang dikenal di  dalam tambo. &#13;Dari  tambo tersebut, konon  pada suatu masa ada satu kerajaan asing (biasa ditafsirkan sebagai Majapahit) yang datang dari laut  akan melakukan penaklukan. Untuk mencegah pertempuran, masyarakat setempat  mengusulkan untuk mengadu kerbau. Pasukan asing tersebut menyetujui dan  menyediakan seekor kerbau yang besar dan agresif, sedangkan masyarakat setempat  menyediakan seekor anak kerbau yang lapar. Dalam pertempuran, anak kerbau yang  lapar itu menyangka kerbau besar tersebut adalah induknya. Maka anak kerbau itu  langsung berlari mencari susu dan menanduk hingga mencabik-cabik perut kerbau  besar tersebut. Kemenangan itu menginspirasikan masyarakat setempat memakai  nama Minangkabau,  yang berasal dari ucapan  &quot;Manang  kabau&quot; (artinya menang  kerbau). </p>
    </div>
<?php 
} 
?>
</div>
</td>

</tr>
</table>
<!--------------- #footer --------------->
<center>
<div id="footer" align="center">
Copyright &copy; 2014 by: <a href="#">Nilla Rahmayati</a></div>
</div>
</center>
</div>
</body>
</html>
