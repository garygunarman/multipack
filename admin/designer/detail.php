<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=designer");
}
else{
	$prefix="../";
	$designer_id=$_GET["designer_id"];
	$designer_name=$_GET["designer_name"];
	include($prefix."../static/connect_database.php");
	
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Designer Detail | ".$designer_name;
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/designer_detail.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/designer_detail.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="">
	<?php include($prefix."static/header.php");?>
	<form method="post" id="designer_form" action="update_detail.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title"><a href="../designer"><input type="button" class="back_button left_ black_tiny_button tiny_button" value="" /></a><?php echo $designer_name;?></div>
			<div id="button_bar">
				<input type="button" onclick="uploadSubmit()" id="submit_button" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				<input type="button" onclick="deleteDesigner()" class="delete_button image_button right_ h26_button red_button button" value="Delete">
				<input type="hidden" name="designer_id" value="<?php echo $designer_id;?>" />
				<input type="hidden" name="status" value="<?php echo $status;?>" />
				<input type="hidden" name="action" id="action" value="" />
				<!--<input type="button" onclick="deleteBrand()" class="delete_button image_button right_ h26_button red_button button" value="Delete Brand">-->
			</div>
		</div>
	</div>
	
	<div class="main_body">
	<div class="fill_container">
		<div class="fill_group">
			
			
			<div class="fill_row">
			<div class="fill_label">Designer Name <font designer="#d82424">*</font></div>
			<div class="form_1_auto">
			<input type="text" class="fill_text_box" id="designer_name" name="designer_name" value="<?php echo $designer_name;?>" />
			</div>
			</div>
			
			
			
			
			<div class="void_row"></div>
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