<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <style type="text/css">
<!--
.style1 {color: #0033CC}
-->
        </style>
</head>
    <body>
<form class="form-2" method="post" action="cek_login.php">
					<h2><span class="log-in">Form Login </span><span class="sign-up"></span></h2>
					<table width="398" border="0">
                      <tr>
                        <td width="137" height="36"><label for="login"><i class="icon-user"></i>Username</label></td>
                        <td width="251"><input type="text" name="user" placeholder="Username or email"></td>
                      </tr>
                      <tr>
                        <td height="38"><label for="level"><i class=""></i>	Level</label>						</td>
                        <td><select name="level"><option value=''>Pilih Level Login Anda !</option>
						<option value="user">Member</option>
						<option value="admin">Admin</option>
			
						</select></td>
                      </tr>
                      <tr>
                        <td height="43">	<label for="password"><i class="icon-lock"></i>Password</label>						</td>
                        <td><input type="password" name="password" placeholder="Password" class="showpassword"></td>
                      </tr>
                      <tr>
                        <td height="48">  </td>
                        <td><input type="submit" name="login" value="Log in"></td>
                      </tr>
					  <tr>
					    <td colspan="2" bgcolor="#FFFFFF">Anda Belum Punya Akun, Silahkan Registrasi <a href="Home.php?page=registrasi" class="log-twitter style1">Disini</a></td>
					  </tr>
                    </table>
					<p>&nbsp;</p>
					<p class="float">
						
						
				
	</form>

				