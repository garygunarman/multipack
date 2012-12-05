<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=home");
}
else{
	$prefix="../../";
	include($prefix."../static/connect_database.php");
	$id_ = $_GET["id"];
	
	
	$get_data = mysql_query("
		SELECT * from tbl_home
		WHERE id ='$id_'
	",$con);
	
	
	
	if (mysql_num_rows($get_data)!=null){
		
			$get_data_array = mysql_fetch_array($get_data);
			
			$filename=$get_data_array["filename"];
			$file=$prefix."../".$get_data_array["filename"];
			
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Image Crop";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/image_crop.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/jcrop/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/jcrop/jquery.Jcrop.min.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/jcrop/jquery.color.js"></script>
	
	
	
	
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/image_crop.css" />
	<link rel="stylesheet" href="<?php echo $prefix;?>style/jcrop/jquery.Jcrop.css" type="text/css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="cropInitialization()">
	<?php include($prefix."static/header.php");?>
	<form id="image_form" method="post" action="save_crop.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title"><a href="../slideshow"><input type="button" class="back_button left_ black_tiny_button tiny_button" value="" /></a>Crop Image</div>
			<div id="button_bar">
				
				<input type="button" onclick="uploadSubmit()" id="submit_button" class="save_button image_button right_ h26_button green_button button"  value="Save Changes">
				
				
			</div>
			
		</div>
	</div>
	<div class="main_body">
	
	
	
			
		
	<div class="fill_container">
		
		
		<div class="fill_group">
			<?php
				echo '<img id="the_image" src="'.$file.'" />';
			?>
			
			<script language="Javascript">
			    jQuery(function($) {
			        $('#the_image').Jcrop(
						{onSelect: showCoords,
				        onChange: showCoords,
						aspectRatio: 1024/443}
				);
			    });
			</script>
			
			<input type="hidden" id="x_coordinate" name="x_coordinate" value=""/>
			<input type="hidden" id="y_coordinate" name="y_coordinate" value=""/>
			<input type="hidden" id="x2_coordinate" name="x2_coordinate" value=""/>
			<input type="hidden" id="y2_coordinate" name="y2_coordinate" value=""/>
			<input type="hidden" id="width" name="width" value="" />
			<input type="hidden" id="height" name="height" value="" />
			<input type="hidden" id="id_" name="id_" value="<?php echo $id_;?>" />
		</div>
	</div>
	</div>
	</form>
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>