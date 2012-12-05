<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=category");
}
else{
	$prefix="../../";
	$selected_tab="category";
	$url = "../../category";
	include($prefix."../static/connect_database.php");
	
	include($prefix."static/initial2.php");
	
	$category_id = $_GET["category_id"];
	
	if ($category_id!=""&&$category_id!="top"){
	$get_list =mysql_query("
		SELECT * from tbl_category AS category INNER JOIN tbl_category_relation AS relation
		ON category.category_id = relation.category_child
		WHERE category_id = '$category_id' && relation_level = 1
		

	",$con);
	
	if (mysql_num_rows($get_list)!=null){
		
	
		
			$get_list_array=mysql_fetch_array($get_list);
			$category_parent = $get_list_array["category_parent"];
			$category_name = $get_list_array["category_name"];
	}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Add Category";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/category.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	
	<script>
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
	</script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/category.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initializationSidebarTable()">
	<?php include($prefix."static/header.php");?>
	<form id="category_form" method="post" action="update.php" enctype="multipart/form-data">
		<input type="hidden" name="url" id="url" value="<?php echo $url;?>" />
		<input type="hidden" name="category_id" id="category_id" value="<?php echo $category_id;?>" />
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			
			<div id="page_title">Add Category</div>
			<div id="button_bar">
				<input type="submit" id="submit_button" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				
				<!--<input type="button" id="submit_button" onclick="saveAll()" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				<input type="button" onclick="saveOrder()" class="save_button image_button right_ h26_button green_button button" value="Save Order">
				<input type="button" onclick="deleteSlideshow()" class="delete_button image_button right_ h26_button red_button button" value="Delete">-->
				
			</div>
		</div>
	</div>
	<div class="main_body" id="adjust">
	<?php //include($prefix."static/sidebar.php");?>
	
	
		<div class="admin_panel_sidebar hidden">
			
			
			<div class="panel_menu_right" id="button_panel_menu_right"><input type="submit" class="right_ green_tiny_button tiny_button" id="go_button" value="GO" onclick="submitForm('sortable')"/></div>
			
			
			<div class="panel_menu_right">
				<input type="hidden" name="action" id="action" value="">
					
			</div>
			<div class="panel_label_right">Actions</div>
		</div>	
	<?php //include($prefix."static/tabs.php");?>
		
	<div class="fill_container" >
		
		
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">Add Category</div>
			<div class="image_size"></div>
			</div>
			
			
				
				<?php
					
						
						
						
						echo		'<div class="fill_row">';
						echo			'<div class="fill_label">Parent Category</div>';
						
						echo			'<div class="form_2_auto">';
						echo 				'<select class="fill_combo_box" id="category_parent" name="category_parent">';
						echo                '<option value="top"';
						if ($category_parent=="top"){
							echo " selected=selected";
						}
						echo '>Root Category</option>';
						listCategory(0,'top',$categories,$category_parent);
						echo                '</select>';
						echo			'</div>';
						echo		'</div>';
						
						
						echo		'<div class="fill_row">';
						echo			'<div class="fill_label">Category Name</div>';
						
						echo			'<div class="form_2_auto">';
						echo				'<input type="text" class="fill_text_box_file" id="category_name" name="category_name" value="'.$category_name.'" />';
						
						echo			'</div>';
						echo		'</div>';
						

						

						
				?>
			
			
			
			
			
			
			<div class="void_row"></div>
		</div>
		
		<?php
		for ($counter=1;$counter<=5;$counter++){
			echo '<input type="hidden" id="order_'.$counter.'" name="order_'.$counter.'" />';
		}
		?>
	</div>
	
	</div>
	</form>
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>