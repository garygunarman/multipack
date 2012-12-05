<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=help");
}
else{
	$type=$_GET["type"];
	if ($_GET["type"]==""){
		$type="ordering";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $prefix="../";?>
<head>	
		<?php
			$page_title = " help";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/help.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/help.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		include($prefix."../static/connect_database.php");
		
		
	?>
</head>

<body onload="">
	<?php include($prefix."static/header.php");?>
	<form method="post" action="update.php" enctype="multipart/form-data">
		<input type="hidden" name="type" value="<?php echo $type;?>" />
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Help</div>
			<div id="button_bar">
				
				<input type="submit" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				
			</div>
		</div>
	</div>
	<?php
	$get_data = mysql_query("
		SELECT * from tbl_help
		WHERE type = '$type'
		
	",$con);
	
	if (mysql_num_rows($get_data)!=null){
		$get_data_array = mysql_fetch_array($get_data);
		$description = $get_data_array["fill"];
		
	}
	?>
	<div class="main_body">
		<div class="sidebar">
			<a href="?type=ordering"><div class="
				<?php
				if ($type == "ordering"){
					echo 'sidebar_menu_selected';
				}
			 	?>
			sidebar_menu" id="slideshow_side_menu">Ordering</div></a>
			<a href="?type=payment"><div class="
				<?php
				if ($type == "payment"){
					echo 'sidebar_menu_selected';
				}
			 	?>
			sidebar_menu" id="video_side_menu">Payment</div></a>
			<a href="?type=delivery"><div class="<?php
			if ($type == "delivery"){
				echo 'sidebar_menu_selected';
			}
		 	?>
			sidebar_menu" id="banner_side_menu">Delivery</div></a>
		</div>
		
	<div class="form_2_auto">
		<?php if($_GET["success"]!=null||$_GET["error"]!=null){?>
		<div class="<?php if ($_GET["success"]!=null){ echo "green_notification";} else if ($_GET["error"]!=null){ echo "red_notification";}?> notification">
			<?php if ($_GET["success"]==true){
				echo "Changes has been saved";
			}?>
		</div>
		<?php } ?>
		
	<div class="fill_container_sidebar">
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title"><?php echo ucfirst($type);?> Information</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Description</div>
			<div class="form_1_auto">
				<?php
				// Include the CKEditor class.
				include_once $prefix."ckeditor/ckeditor.php";
				

				// Create a class instance.
				$CKEditor = new CKEditor();

				$config['toolbar'] = 'abouttoolbar';
				// Path to the CKEditor directory.
				$CKEditor->basePath = $prefix.'ckeditor/';





				//CKFinder::SetupCKEditor($CKEditor, $prefix.'ckfinder/');


				// Replace a textarea element with an id (or name) of "textarea_id".
				$CKEditor->editor("description", $description, $config, $events);
				?>
			</div>
			</div>
			
			
			
			<div class="void_row"></div>
		</div>
		
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