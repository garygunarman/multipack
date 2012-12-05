<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=orders");
}
else{
	$prefix="../";
	$user_id=$_GET["user_id"];
	include($prefix."../static/connect_database.php");
	include($prefix."static/get_user_details.php");
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " User Detail | ".$user_first_name." ".$user_last_name;
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/user_detail.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/user_detail.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="">
	<?php include($prefix."static/header.php");?>
	<form method="post" id="brand_form" action="update_detail.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title"><a href="../users"><input type="button" class="back_button left_ black_tiny_button tiny_button" value="" /></a><?php echo $user_first_name." ".$user_last_name;?></div>
			<div id="button_bar">
				<!--
				<?php
				if ($status!="approved"){
					
				
				?>
				<input type="button" onclick="changeStatus()" class="save_button image_button right_ h26_button green_button button" value="Approve">
				<?php
				}
				else{
				?>	
				<input type="button" onclick="changeStatus()" class="delete_dark_button image_button right_ h26_button grey_button button" value="Disapprove">
				<?php
				}
				?>
				-->
				<input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
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
			<div class="fill_title">PERSONAL DETAILS</div>
			</div>
			<div class="fill_row">
			<div class="fill_label">First Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_first_name;?></div>
			</div>
			</div>
			
			
			<div class="fill_row">
			<div class="fill_label">Last Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_last_name;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Email</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_email;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Mobile Phone</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_phone;?></div>
			</div>
			</div>
			
			
			<div class="void_row"></div>
		</div>
		
		
		<div class="void_row space_row"></div>
		
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">SHIPPING DETAILS</div>
			</div>
			<div class="fill_row">
			<div class="fill_label">First Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_first_name;?></div>
			</div>
			</div>
			
			
			<div class="fill_row">
			<div class="fill_label">Last Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_last_name;?></div>
			</div>
			</div>
		
			
			<div class="fill_row">
			<div class="fill_label">Phone</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_phone;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Address</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_address;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Country</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_country;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Province</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_province;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">City</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_city;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Postal Code</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $user_postal_code;?></div>
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