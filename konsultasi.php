<?php
include "config/koneksi.php";
$key=$_REQUEST['key'];
$id_gejala=$_REQUEST['id_gejala'];
?>

			
				
			<br><br>
			<form action="Home.php?page=konsultasi" method="post">
				
					<p>Kode Penyakit:</p>
					<select name="penyakit" class="form-control">
						<?php 
						$qrypen = mysql_query("SELECT * FROM master_penyakit");
						while($rkop = mysql_fetch_array($qrypen)){
							echo("<option value=\"$rkop[id]\">P00$rkop[id] - $rkop[master_penyakit]</option>");
						}
						?>
					</select>
				
				<input name="submit" type="submit" value=" Pilih Gejala " />
			</form>
			
			
			
			