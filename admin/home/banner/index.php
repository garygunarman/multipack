<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=home");
}
else{
	$prefix="../../";
	include($prefix."../static/connect_database.php");
	
	$get_data = mysql_query("
		SELECT * from tbl_home_featured
		WHERE type='blog'
	",$con);
	
	
	
	if (mysql_num_rows($get_data)!=null){
		
			$get_data_array = mysql_fetch_array($get_data);
			
			$filename_blog=$get_data_array["filename"];
			$file_blog=$prefix."../".$get_data_array["filename"];
			$link_blog=$get_data_array["link"];
			//$order[$counter]=$get_data_array["order"];
		
	}
	
	$get_data = mysql_query("
		SELECT * from tbl_home_featured
		WHERE type='gallery'
	",$con);
	
	
	
	if (mysql_num_rows($get_data)!=null){
		
			$get_data_array = mysql_fetch_array($get_data);
			
			$filename_gallery=$get_data_array["filename"];
			$file_gallery=$prefix."../".$get_data_array["filename"];
			
			$link_gallery=$get_data_array["link"];
			//$order[$counter]=$get_data_array["order"];
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Home | Featured Banner";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/home_banner.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/home_banner.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="adjustSidebar()">
	<?php include($prefix."static/header.php");?>
	<form id="image_form" method="post" action="update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Home</div>
			<div id="button_bar">
				
				<input type="button" onclick="uploadSubmit()" id="submit_button" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				
			</div>
		</div>
	</div>
	<div class="main_body">
	<div class="sidebar">
		<a href="../slideshow"><div class="sidebar_menu" id="slideshow_side_menu">Slideshow</div></a>
		<a href="../video"><div class="sidebar_menu" id="video_side_menu">Video</div></a>
		<a href="../banner"><div class="sidebar_menu_selected sidebar_menu" id="banner_side_menu">Featured Banners</div></a>
	</div>
	
	<div class="form_2_auto">
		
		
	<div class="fill_container_sidebar">
		
		
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">Featured Blog</div>
			<div class="image_size">(1024 x 443 px)</div>
			</div>
			
			<ul id="sortable">
				
				<?php
					for ($counter=1;$counter<=1;$counter++){
						echo '<li list_id="'.$id[$counter].'">';
						echo '<div class="borderless_row image_row fill_row" id="row_blog" >';
						
						echo '	<div class="image_preview">';
						if ($file_blog!=null){
							echo '<a href="image_crop.php?type=blog" target="_blank"><img class="the_image_preview" src="'.$file_blog.'" /></a>';
						}
						echo '</div>';
						echo '	<div class="form_3_auto">';

						echo		'<div class="fill_row">';
						echo			'<div class="fill_label_image">Image</div>';
						echo			'<input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile(\'image_file_blog\')" />';
						echo			'<div class="form_5_auto">';
						echo				'<input type="text" class="fill_text_box_file" id="image_filename_blog" name="" value="'.$filename_blog.'" />';
						
						echo			'</div>';
						echo		'</div>';

						echo		'<div class="fill_row">';

						echo			'<div class="fill_label_image">Link</div>';
						echo			'<div class="form_4_auto">';
						echo				'<input type="text" class="fill_text_box" id="link_blog" name="link_blog" value="'.$link_blog.'" />';
						echo			'</div>';
						echo		'</div>';

						echo	'</div>';
						echo				'<input type="file" class="fill_file" id="image_file_blog" name="image_file_blog" onchange="this.form.image_filename_blog.value = this.value;"/>';
						echo	'<div class="void_row"></div>';
						echo '</div>';
						echo '</li>';
					}
				?>
			
			
			
			
			</ul>
			
			<div class="void_row"></div>
		</div>
		
		
		
		
	</div>
	
	<div class="fill_container_sidebar" id="gallery_container">


		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">Featured Gallery</div>
			<div class="image_size">(1024 x 443 px)</div>
			</div>

			<ul id="sortable">

				<?php
					for ($counter=1;$counter<=1;$counter++){
						echo '<li list_id="'.$id[$counter].'">';
						echo '<div class="borderless_row image_row fill_row" id="row_gallery" >';

						echo '	<div class="image_preview">';
						if ($file_gallery!=null){
							echo '<a href="image_crop.php?type=gallery" target="_blank"><img class="the_image_preview" src="'.$file_gallery.'" /></a>';
						}
						echo '</div>';
						echo '	<div class="form_3_auto">';

						echo		'<div class="fill_row">';
						echo			'<div class="fill_label_image">Image</div>';
						echo			'<input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile(\'image_file_gallery\')" />';
						echo			'<div class="form_5_auto">';
						echo				'<input type="text" class="fill_text_box_file" id="image_filename_gallery" name="" value="'.$filename_gallery.'" />';

						echo			'</div>';
						echo		'</div>';

						echo		'<div class="fill_row">';

						echo			'<div class="fill_label_image">Link</div>';
						echo			'<div class="form_4_auto">';
						echo				'<input type="text" class="fill_text_box" id="link_gallery" name="link_gallery" value="'.$link_gallery.'" />';
						echo			'</div>';
						echo		'</div>';

						echo	'</div>';
						echo				'<input type="file" class="fill_file" id="image_file_gallery" name="image_file_gallery" onchange="this.form.image_filename_gallery.value = this.value;"/>';
						echo	'<div class="void_row"></div>';
						echo '</div>';
						echo '</li>';
					}
				?>




			</ul>

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