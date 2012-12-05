<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=email");
}
else{
	$prefix="../";
	include($prefix."../static/connect_database.php");
	$type = $_GET["type"];
	if ($type==""){
		$type="password";
	}
	$get_data = mysql_query("
		SELECT * from tbl_email
		WHERE type='$type'
	",$con);
	
	
	
	
	if (mysql_num_rows($get_data)!=null){
		
			$get_data_array = mysql_fetch_array($get_data);
			
			$fill=$get_data_array["fill"];
			
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Email | Reminder";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/email.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	<script type="text/javascript">
	
	</script>
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/email.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="adjustSidebar()">
	<?php include($prefix."static/header.php");?>
	<form method="post" action="update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Email</div>
			<div id="button_bar">
				
				<input type="submit" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				<input type="hidden" name="type" value="<?php echo $type;?>" />
			</div>
		</div>
	</div>
	<div class="main_body">
	<div class="sidebar">
		<a href="../email?type=contact"><div class="<?php if ($type=="contact"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_menu">Auto Reply Contact</div></a>
		<a href="../email?type=register"><div class="<?php if ($type=="register"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_subscribe">Auto Reply Registration</div></a>
		<a href="../email?type=subscribe"><div class="<?php if ($type=="subscribe"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_menu">Auto Reply Subscribe</div></a>
		<a href="../email?type=password"><div class="<?php if ($type=="password"){echo "sidebar_menu_selected";}?> sidebar_menu" id="slideshow_side_menu">Send Password</div></a>
		<a href="../email?type=reminder"><div class="<?php if ($type=="reminder"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_menu">Reminder</div></a>
		<a href="../email?type=rejection 1"><div class="<?php if ($type=="rejection 1"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_menu">Rejection 1</div></a>
		<a href="../email?type=rejection 2"><div class="<?php if ($type=="rejection 2"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_menu">Rejection 2</div></a>
		<a href="../email?type=rejection 3"><div class="<?php if ($type=="rejection 3"){echo "sidebar_menu_selected";}?> sidebar_menu" id="video_side_menu">Rejection 3</div></a>
	</div>
	
	<div class="form_2_auto">
		
	<div class="fill_container_sidebar">
		
		
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">Email Content</div>
			</div>
			
			<div class="fill_row">
			
			
			
			
			<?php
			// Include the CKEditor class.
			include_once $prefix."ckeditor/ckeditor.php";

			// Create a class instance.
			$CKEditor = new CKEditor();
			
			$config['toolbar'] = 'Basic';
			// Path to the CKEditor directory.
			$CKEditor->basePath = $prefix.'ckeditor/';
			
			
			

			// Replace a textarea element with an id (or name) of "textarea_id".
			$CKEditor->editor("fill", $fill, $config, $events);
			?>
			
			
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