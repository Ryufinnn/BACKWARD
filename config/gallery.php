
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!-- Gallery Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false
    });
});
</script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-prettyPhoto.js"></script>
<div class='box-title'>
</div>
    <div id="sidebar">
      <!-- ####################################################################################################### -->
      <div id="gallery"> 
	  
        <ul>
  <?php
		$sql=mysql_query("select * from galery order by id_gallery asc");
		while($r=mysql_fetch_array($sql)){
         echo"<li><a href='images/post/$r[gbr_gallery]' rel='prettyPhoto[gallery1]' title='$r[judul]'><img src='images/post/$r[gbr_gallery]' alt='' /></a></li>";
        }
		?>

          <div align="left"></div>
        </ul>
      </div>
    </div>
