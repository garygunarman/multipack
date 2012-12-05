<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=orders");
}
else{
	$prefix="../../";
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Add Size";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/size_detail.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/size_detail.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="">
	<?php include($prefix."static/header.php");?>
	<form method="post" id="size_form" action="update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title"><a href="<?php echo $prefix;?>size"><input type="button" class="back_button left_ black_tiny_button tiny_button" value="" /></a>Add Size Group</div>
			<div id="button_bar">
				<input type="submit" id="submit_button" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				
				
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
			<div class="fill_label">Size Type Name <font color="#d82424">*</font></div>
			<div class="form_1_auto">
			<input type="text" class="fill_text_box" id="size_type_name" name="size_type_name" value="<?php echo $size_type_name;?>" />
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Sizes </div>
			<div class="form_1_auto">
			<input type="text" class="fill_text_box" id="sizes" name="sizes" value="<?php echo $sizes;?>" />
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Sizes SKU </div>
			<div class="form_1_auto">
			<input type="text" class="fill_text_box" id="sizes_sku" name="sizes_sku" value="<?php echo $sizes_sku;?>" />
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