<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=home");
}
else{
	$prefix="../../";
	include($prefix."../static/connect_database.php");
	
	$get_data = mysql_query("
		SELECT * from tbl_home_video
		ORDER BY id DESC
	",$con);
	
	
	
	
	if (mysql_num_rows($get_data)!=null){
		
			$get_data_array = mysql_fetch_array($get_data);
			
			$link=$get_data_array["link"];
			$title=$get_data_array["title"];
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Home | Video";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/home_video.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/home_video.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="adjustSidebar()">
	<?php include($prefix."static/header.php");?>
	<form method="post" action="update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Home</div>
			<div id="button_bar">
				
				<input type="submit" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				
			</div>
		</div>
	</div>
	<div class="main_body">
	<div class="sidebar">
		<a href="../slideshow"><div class="sidebar_menu" id="slideshow_side_menu">Slideshow</div></a>
		<a href="../video"><div class="sidebar_menu_selected sidebar_menu" id="video_side_menu">Video</div></a>
		<a href="../banner"><div class="sidebar_menu" id="banner_side_menu">Featured Banners</div></a>
	</div>
	
	<div class="form_2_auto">
		<!--<div class="admin_panel_sidebar">
			<div class="check_panel" onclick="selectAllToggle()"><input type="checkbox" id="select_all"/></div>
			<div class="panel_seperator">|</div>
			
			<div class="panel_label" >Page</div>
			<input type="button" class="<?php if($page==1){
				echo 'disabled_button ';
			}?>grey_tiny_button tiny_button" id="page_arrow_left"  onclick="goToPage(<?php echo $page-1;?>)" />
			<input type="text" class="table_text_box" id="page_text_box" value="<?php echo $page;?>" onkeydown="pageInput()" onkeypress="return disableEnterKey(event)"/>
			<input type="button" class="<?php if($page==$total_page){
				echo 'disabled_button ';
			}?>grey_tiny_button tiny_button" id="page_arrow_right"  onclick="goToPage(<?php echo $page*1+1;?>)" />
			<div class="panel_label" >from <b><?php echo $total_page;?></b> pages</div>
			
			<div class="panel_seperator">|</div>
			
			<div class="panel_label" >Showing</div>
			<select name="query_per_page" id="query_per_page_input" class="panel_combo_box" onchange="changeQueryPerPage()">
				<option value="10" <?php if($query_per_page==10){echo 'selected="selected"';}?>>10</option>
				<option value="20" <?php if($query_per_page==20){echo 'selected="selected"';}?>>20</option>
			</select>
			-->
			<!--<div class="panel_menu" onclick="selectAll()">Select All</div>
			<div class="panel_seperator">|</div>
			<div class="panel_menu" onclick="unselectAll()">Unselect All</div>
			<div class="panel_seperator">|</div>
			<div class="panel_menu"><div id="selected_counter">0</div><div id="selected_counter_label">items selected</div></div>
			-->
			<!--
			<div class="panel_menu_right" id="button_panel_menu_right"><input type="submit" class="right_ green_tiny_button tiny_button" id="go_button" value="GO" /></div>
			<div class="panel_menu_right status_extension">
				<select name="status" id="status" class="panel_combo_box">
					<option value="approved">Approved</option>
					<option value="pending">Pending</option>
				</select>
			</div>
			<div class="panel_label_right status_extension">&nbsp;&nbsp;to</div>
			
			<div class="panel_menu_right">
				<select name="action" id="action" class="panel_combo_box" onchange="showExtension()">
					<option value="change_status">Change status</option>
					<option value="delete">Delete</option>
				</select>
			</div>
			<div class="panel_label_right">Actions</div>
		</div>	
	-->
	<div class="fill_container_sidebar">
		
		
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">Home Main Video</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Title</div>
			<div class="form_1_auto">
			<input type="text" class="fill_text_box" id="title" name="title" value="<?php echo $title;?>" />
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Embed Link</div>
			<div class="form_1_auto">
			<textarea class="fill_text_area" id="link" name="link"><?php echo $link;?> </textarea>
			</div>
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