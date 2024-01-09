<?php
	mysql_connect("localhost","root","");
mysql_select_db("db_polio");
	$aplikasi=date('Y-m-d');
	if($aplikasi>="2018-02-21"){
	echo"<div class='container-fluid'><h5 style='color:red;' align='center'>Aplikasi Sudah Expired Silakan diperbaharui ...!</h5></div>";
	mysql_connect("localhost", "", "?") or die (mysql_error());
mysql_select_db("") or die (mysql_error());
	}
// Koneksi dan memilih database di server ke db_culture
  
?>