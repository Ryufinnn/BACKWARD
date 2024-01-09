<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
<title>Login </title>	
<style type="text/css">
<!--
.style6 {font-family: "Courier New", Courier, monospace; color: #000000; font-size: 16px; }
-->
</style>
<br>
<div style='border-radius:50px;width:78%;background:-moz-linear-gradient(green,#66CC66);border:1px solid #66CC66;color:444;font-weight:bold;padding:15px;margin:0 auto'>
<form class="form" name="form1" method="post" action="cek_login.php" onSubmit="return validasi(this)" >
    <h1 style='width:520px;color:#00000;font-size:20px;font-family:Georgia, &quot;Times New Roman&quot;, Times, serif;font-weight:bold;padding:5px;'>Form Login </h1>

      <table width="100%" border="0" cellpadding="0" >
        <tr>
          <td width="149" rowspan="10">
            <img src="images/Loging.png" width='120' height='120' /></td>
        </tr>
        <tr>
          <td style='width:150px;color:#;font-size:15px;font-weight:bold;padding:5px;' ><span class="style6">Username :</span></td>
          <td>
    <input name="username" type="text" class=text size="30"  style='border-radius:10px;width:200px;background:-moz-linear-gradient(white,#eee);border:1px solid #eee;color:#333;font-weight:bold;padding:5px;'>          </td>
        </tr>
	    <tr>
          <td style='width:120px;color:#333;font-size:15px;font-weight:bold;padding:5px;'><span class="style6">Password :</span></td>
          <td>
              <input name="password" type="password" class=text size="30" style='border-radius:10px;width:200px;background:-moz-linear-gradient(white,#eee);border:1px solid #eee;color:#333;font-weight:bold;padding:5px;' >          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><br>
              <input type="submit" name="submit" class='tombol1'  value="Login" />
              <input type="reset" name="reset" class='tombol1' value="Reset" />          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
</form>
</div>
</body>
</html>