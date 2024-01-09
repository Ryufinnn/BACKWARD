<form method='post' action='proses_registrasi.php'>
<table width='774' class='altrowstable1' >
<h3>Daftar Konsultasi</h3><hr>
<tr><td>Nama 		</td><td><input type='text' name='nm_depan'></td></tr>
<tr><td>Username			</td><td><input type='text' name='email'></td></tr>
<tr><td>Password		</td><td><input type='password' name='pass'></td></tr>
<tr><td>Jenis Kelamin		</td><td><select name='jk'><option value=''>Pilih Jenis Kelamin</option><option value='Laki-Laki'>Laki-Laki</option><option value='Perempuan'>Perempuan</option></td></tr>

<tr><td>Alamat</td><td><textarea cols="80" rows="10" name="alamat" cols="" rows=""></textarea></td></tr>
<tr><td>No Hp	</td><td><input type='text' name='nm_belakang'></td></tr>



<tr><td>Tanggal Lahir		</td><td>
							<select name='tgl'>
							<option value=''>Tanggal</option>
							<?
							for($i=1;$i<=31;$i++){
							echo"<option value='$i'>$i</option>";
							}
							?>										
							</select>
							
							<select name='bln'>
							<option value=''>Bulan</option>
							<?
							$nm_bulan=array(1 =>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November','Desember');
							for($i=1;$i<=12;$i++){
							echo"<option value='$i'>$nm_bulan[$i]</option>";
							}
							?>										
							</select>
							
							<select name='thn'>
							<option value=''>Tahun</option>
							<?
							for($i=1990;$i<=2015;$i++){
							echo"<option value='$i'>$i</option>";
							}
							?>										
							</select>
							</td></tr>
<tr><td></td><td> &nbsp;<br><button>Daftar</button></td></tr>
</tr>
</table>
</form>
