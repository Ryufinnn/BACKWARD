<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
    <script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
 <?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect("$host","$user","$pass");
mysql_select_db("dbkanker");
?>   
	<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
    </style>
	</head>
    <body>
    <?php
	$user=$_SESSION['id_acount'];
	?>
<form class="form-22" method="post" action="">
<?php
$q="select * from acount where id_acount='".$user."'";
$res=mysql_query($q,$con) or die (mysql_error());
$data=mysql_fetch_array($res);
$namalengkap= "$data[nm_depan] ";
$email=$data['email'];
if($data['foto'] == '')
	{
	$fotoe="foto_acount/nofoto.jpg";
	}else{
	$fotoe="foto_acount/$data[foto]";
	}

?>
					<center>
					  <span class="log-in style1">Selamat Datang,				      </span>
                                                                                     <br>                                          
					<span class="sign-up style1"><?php echo $namalengkap;?></span>
					 </center>
                 
                  
                   
                   
                    <br>
					<p class="clearfix"> 
						
						<input type="submit" name="logout" value="Log Out">
					</p>
	</form>​​
       <?php
	   if($_POST[logout])
	   	{
		$sql="update acount set aktif='0' WHERE id_acount='$_SESSION[id_acount]'";
		$res=mysql_query($sql,$con) or die(mysql_error());
		session_destroy();
		$ss=$_SESSION['namalengkap'];
		echo "<script>alert('$ss telah logout');window.location='index.php'</script>";
		}
	   ?>
    </body>
</html>
