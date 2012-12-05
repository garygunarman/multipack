<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=category");
}
else{
	$prefix="../";
	$selected_tab="product";
	include($prefix."../static/connect_database.php");
	
	include($prefix."static/initial.php");
	
	$product_id = $_GET["product_id"];
	
	include($prefix."../static/connect_database.php");
	$get_info = mysql_query("
		SELECT * from tbl_product AS product INNER JOIN tbl_product_type AS p_type
		ON product.id = p_type.product_id
		WHERE product_id = '$product_id'
		ORDER BY type_order
	",$con);
	
	if (mysql_num_rows($get_info)!=null){
		for ($counter=1;$counter<=mysql_num_rows($get_info);$counter++){
			$get_info_array = mysql_fetch_array($get_info);
			if ($counter==1){
				$collection_id = $get_info_array["collection_id"];
				$product_category = $get_info_array["product_category"];
				$product_name = $get_info_array["product_name"];
				$product_size_type_id = $get_info_array["product_size_type_id"];
				$designer_id = $get_info_array["designer_id"];
			}
			$type_code[$counter] = $get_info_array["type_code"];
			$type_name[$counter] = $get_info_array["type_name"];
			$type_code[$counter] = $get_info_array["type_code"];
			$type_price[$counter] = $get_info_array["type_price"];
			$color_id[$counter] = $get_info_array["color_id"];
			
			$type_description[$counter] = $get_info_array["type_description"];
			$type_weight[$counter] = $get_info_array["type_weight"];
			$type_image[$counter] = $get_info_array["type_image"];
			$type_code[$counter] = $get_info_array["type_code"];
			$type_id[$counter] = $get_info_array["type_id"];
		}
		
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Edit Product |".$product_name;
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/product_details.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/add_product.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	
	<script>
	$(function() {
		$( ".sortable" ).sortable();
		$( ".sortable" ).disableSelection();
	});
	</script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/product_details.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="">
	<?php include($prefix."static/header.php");?>
	<form id="product_form" method="post" action="update_details.php" enctype="multipart/form-data">
		<div id="page_title_bar">
			<div id="page_title_bar_fill">
				<div id="page_title"><a href="../products"><input type="button" class="back_button left_ black_tiny_button tiny_button" value="" /></a><?php echo $product_name;?></div>
				<div id="button_bar">
					<!--
					<?php
					if ($status!="approved"){


					?>
					-->
					<input type="button" onclick="submitForm()" class="save_button image_button right_ h26_button green_button button" value="Save">
					<!--
					<?php
					}
					else{
					?>	
					<input type="button" onclick="changeStatus()" class="delete_dark_button image_button right_ h26_button grey_button button" value="Disapprove">
					<?php
					}
					?>
					-->
					<input type="hidden" name="order_number" value="<?php echo $order_number;?>" />
					<input type="hidden" name="status" value="<?php echo $status;?>" />
					<input type="hidden" name="action" id="action" value="" />
					<!--<input type="button" onclick="deleteBrand()" class="delete_button image_button right_ h26_button red_button button" value="Delete Brand">-->
				</div>
			</div>
		</div>
	<div class="main_body" id="adjust">
	
	
	
		
	
		
	<div class="fill_container" >
		
		
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">Product Details</div>
			<div class="image_size"></div>
			</div>
			
			
				
				<?php
					
						
						
						
						echo		'<div class="fill_row">';
						echo			'<div class="fill_label">Product Category</div>';
						
						echo			'<div class="form_2_auto">';
						echo 				'<select class="fill_combo_box" id="product_category" name="product_category">';
						echo                '<option value="top">Root Category</option>';
						listCategory(0,'top',$categories,$product_category);
						echo                '</select>';
						echo			'</div>';
						echo		'</div>';
						
						
						echo		'<div class="fill_row">';
						echo			'<div class="fill_label">Product Name</div>';
						
						echo			'<div class="form_2_auto">';
						echo				'<input type="text" class="fill_text_box" id="product_name" name="product_name" value="'.$product_name.'" />';
						
						echo			'</div>';
						echo		'</div>';
						
						echo		'<div class="fill_row">';
						echo			'<div class="fill_label">Size Group</div>';
						$get_size_type = mysql_query("
							SELECT * from tbl_size_type
							ORDER BY size_type_order
						",$con);
						if (mysql_num_rows($get_size_type)!=null){
							$size_type_id_list=array();
							$size_type_name_list=array();


							for ($size_type_count=1;$size_type_count<=mysql_num_rows($get_size_type);$size_type_count++){
								$get_size_type_array = mysql_fetch_array($get_size_type);
								array_push($size_type_id_list,$get_size_type_array["size_type_id"]);
								array_push($size_type_name_list,$get_size_type_array["size_type_name"]);
								//echo   '<div class="hidden" id="size_type_id_'.$get_size_type_array["size_type_name"].'">'.$get_size_type_array["size_type_id"].'</div>';
							}
						}

						echo			'<div class="form_2_auto">';
						echo 				'<select class="fill_combo_box" id="size_type_id" name="size_type_id" onchange="changeSize()">';
						$size_type_name_ = current($size_type_name_list);
						foreach ($size_type_id_list as $size_type_id_){

								echo        '<option value="'.$size_type_id_.'"';
								if ($size_type_id_ == $product_size_type_id){
									echo " selected=selected";
								}
								echo '>'.$size_type_name_.'</option>';

								$size_type_name_ = next($size_type_name_list);
						}

						echo                '</select>';
						echo			'</div>';
						echo        '<div class="void_row"></div>';
						echo		'</div>';
						
						//designer
						/*
						echo		'<div class="fill_row">';
						echo			'<div class="fill_label">Designer</div>';

						$get_designer = mysql_query("
							SELECT * from tbl_designer
							ORDER BY designer_name
						",$con);
						if (mysql_num_rows($get_designer)!=null){
							$designer_id_list=array();
							$designer_name_list=array();


							for ($designer_count=1;$designer_count<=mysql_num_rows($get_designer);$designer_count++){
								$get_designer_array = mysql_fetch_array($get_designer);
								array_push($designer_id_list,$get_designer_array["designer_id"]);
								array_push($designer_name_list,$get_designer_array["designer_name"]);
								
								
							}
						}

						echo			'<div class="form_2_auto">';
						echo 				'<select class="fill_combo_box" id="designer_id" name="designer_id" >';
						$designer_name_ = current($designer_name_list);
						echo '<option value="0">No Designer</option>';
						foreach ($designer_id_list as $designer_id_){

								echo        '<option value="'.$designer_id_.'" ';
								if ($designer_id_==$designer_id){
									echo "selected=selected";
								}
								echo '>'.$designer_name_.'</option>';

								$designer_name_ = next($designer_name_list);
						}

						echo                '</select>';
						echo			'</div>';
						echo        '<div class="void_row"></div>';
						echo		'</div>';
						
						*/
						
						echo '<div class="void_row space_row"></div>';
						for ($counter=1;$counter<=mysql_num_rows($get_info);$counter++){
							if ($counter>1){
								echo '<hr noshade size="1" class="field_hr"/>';
							}
							echo '<input type="hidden" name="type_id_'.$counter.'" value="'.$type_id[$counter].'" />';
							
							echo		'<div class="fill_row">';
							echo			'<div class="fill_label">Code</div>';

							echo			'<div class="form_2_auto">';
							echo				'<input type="text" class="fill_text_box" id="type_code_'.$counter.'" name="type_code_'.$counter.'" value="'.$type_code[$counter].'" />';

							echo			'</div>';
							echo		'</div>';
							
							echo		'<div class="fill_row">';
							echo			'<div class="fill_label">Price</div>';

							echo			'<div class="form_2_auto">';
							echo				'<input type="text" class="fill_text_box" id="type_price_'.$counter.'" name="type_price_'.$counter.'" value="'.$type_price[$counter].'" />';

							echo			'</div>';
							echo		'</div>';
							
							echo		'<div class="fill_row">';
							echo			'<div class="fill_label">Description</div>';

							echo			'<div class="form_2_auto">';
							echo				'<textarea class="fill_text_area" id="type_description_'.$counter.'" name="type_description_'.$counter.'">'.$type_description[$counter].'</textarea>';

							echo			'</div>';
							echo        '<div class="void_row"></div>';
							echo		'</div>';	
							
							echo		'<div class="fill_row">';
							echo			'<div class="fill_label">Specification</div>';

							echo			'<div class="form_2_auto">';
							echo				'<textarea class="fill_text_area" id="type_specification_'.$counter.'" name="type_specification_'.$counter.'">'.$type_specification[$counter].'</textarea>';

							echo			'</div>';
							echo 		'<div class="void_row"></div>';
							echo		'</div>';	
						
							/*
							echo		'<div class="fill_row seperate_top">';
							echo			'<div class="fill_label">Color Group</div>';
							
							$get_color = mysql_query("
								SELECT * from tbl_color
								ORDER BY color_name
							",$con);
							if (mysql_num_rows($get_color)!=null){
								$color_id_list=array();
								$color_name_list=array();
								
								
								for ($color_count=1;$color_count<=mysql_num_rows($get_color);$color_count++){
									$get_color_array = mysql_fetch_array($get_color);
									array_push($color_id_list,$get_color_array["color_id"]);
									array_push($color_name_list,$get_color_array["color_name"]);
									echo   '<div class="hidden" id="color_image_'.$get_color_array["color_id"].'">'.$get_color_array["color_image"].'</div>';
									echo   '<div class="hidden" id="color_name_'.$get_color_array["color_id"].'">'.$get_color_array["color_name"].'</div>';
								}
							}

							echo			'<div class="form_2_auto">';
							echo 				'<select class="fill_combo_box" id="color_id_'.$counter.'" name="color_id_'.$counter.'" onchange="changeColor('.$counter.')">';
							$color_name_ = current($color_name_list);
							foreach ($color_id_list as $color_id_){
									
									echo        '<option value="'.$color_id_.'" ';
									if ($color_id_==$color_id[$counter]){
										echo "selected=selected";
									}
									echo '>'.$color_name_.'</option>';
									
									$color_name_ = next($color_name_list);
							}
							
							echo                '</select>';
							echo			'</div>';
							echo        '<div class="void_row"></div>';
							echo		'</div>';*/				
		
							echo		'<div class="fill_row seperate_top">';
							echo			'<div class="fill_label">Color Name</div>';

							echo			'<div class="form_2_auto">';
							echo				'<input type="text" class="fill_text_box_file" id="type_name_'.$counter.'" name="type_name_'.$counter.'" value="'.$type_name[$counter].'" />';

							echo			'</div>';
							echo        '<div class="void_row"></div>';
							echo		'</div>';
							
							echo '<div class="fill_row">
							<div class="fill_label">Color Image <font color="#999999"><i> (15 x 15 px)</i></font></div>
							
							<div class="form_2_auto">
							<input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile(\'type_image_'.$counter.'\')" />
							<div class="form_7_auto">
								<input type="text" class="fill_text_box" id="image_filename_type_image_'.$counter.'" name="image_filename_type_image_'.$counter.'" value="'.$type_image[$counter].'" />

							</div>
							</div>
							<input type="file" class="fill_file" id="type_image_'.$counter.'" name="type_image_'.$counter.'" onchange="document.getElementById(\'image_filename_type_image_'.$counter.'\').value = this.value;"/>
							
							</div>
							';
							
							$get_image = mysql_query("
								SELECT * from tbl_product_image
								WHERE type_id = $type_id[$counter]
								ORDER BY image_order
							",$con);
							if (mysql_num_rows($get_image)!=null){
								$image_id_list=array();
								$img_src_list=array();
								
								
								for ($image_count=1;$image_count<=mysql_num_rows($get_image);$image_count++){
									$get_image_array = mysql_fetch_array($get_image);
									array_push($image_id_list,$get_image_array["image_id"]);
									array_push($img_src_list,$get_image_array["img_src"]);
									
								}
							}
							
							echo '<div class="fill_row seperate_top">
							<div class="fill_label_2">Images&nbsp;</div>
							<div class="image_size">(1280 x 960 px / 640 x 480 px)</div>
							</div>';

							echo '<ul class="sortable" id="sortable_'.$counter.'">';
									if($img_src_list!=null){
									$img_src_ = current($img_src_list);
									$img_id_ = current($image_id_list);
									}
									for ($image_counter=1;$image_counter<=5;$image_counter++){
										echo '<li list_id="'.$image_counter.'">';
										echo '<div class="image_row fill_row" id="row_'.$counter.'_'.$image_counter.'" onclick="selectRowImage('.$counter.','.$image_counter.')" >';
										echo '<input type="checkbox" id="check_'.$counter.'_'.$image_counter.'" class="hidden" onmouseover="downCheck()" onmouseout="upCheck()" onclick="selectRowCheck('.$counter.','.$image_counter.')"/>';
										echo '<input type="hidden" name="image_id_'.$counter.'_'.$image_counter.'" value="'.$img_id_.'" />';
										echo '	<div class="image_preview">';
										if ($img_src_!=""){
											echo '<img class="the_image_preview" src="'.$prefix."../".$img_src_.'" />';
										}
										echo '</div>';
										echo '	<div class="form_2_auto">';

										echo		'<div class="fill_row">';
										echo			'<div class="fill_label_image">Image</div>';
										echo			'<input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile(\'product_image_'.$counter.'_'.$image_counter.'\')" />';
										echo			'<div class="form_5_auto">';
										echo				'<input type="text" class="fill_text_box_file" id="image_filename_product_image_'.$counter.'_'.$image_counter.'" name="" value="'.$img_src_.'" />';

										echo			'</div>';
										echo		'</div>';



										echo	'</div>';
										echo '<input type="button" onclick="deleteImage('.$image_id_.')" class="delete_button image_button right_ h26_button red_button button" value="Clear Content">';
										echo				'<input type="file" class="fill_file" id="product_image_'.$counter.'_'.$image_counter.'" name="product_image_'.$counter.'_'.$image_counter.'" onchange="this.form.image_filename_product_image_'.$counter.'_'.$image_counter.'.value = this.value;"/>';
										echo	'<div class="void_row"></div>';
										echo '</div>';
										echo '</li>';
										if ($img_src_list!=null){
										$img_src_ = next($img_src_list);
										$img_id_ = next($image_id_list);
										}
									}
								echo '	</ul>';
								
								echo '<div id="stock_'.$counter.'" class="seperate_top">';
								
								if ($product_size_type_id==""){
									$product_size_type_id = $size_type_id_list[0];
									
								}
								
							
								$get_size = mysql_query("
									SELECT * from tbl_size
									WHERE size_type_id = '$product_size_type_id'
									ORDER BY size_order
								",$con);
								if (mysql_num_rows($get_size)!=null){
									$size_id_list=array();
									$size_name_list=array();


									for ($size_count=1;$size_count<=mysql_num_rows($get_size);$size_count++){
										$get_size_array = mysql_fetch_array($get_size);
										array_push($size_id_list,$get_size_array["size_id"]);
										array_push($size_name_list,$get_size_array["size_name"]);
										
									}
								}
								
								$get_stock = mysql_query("
									SELECT * from tbl_product_stock
									WHERE type_id = '$type_id[$counter]'
									
								",$con);
								$quantity=array();
								if (mysql_num_rows($get_stock)!=null){
									
									


									for ($stock_count=1;$stock_count<=mysql_num_rows($get_stock);$stock_count++){
										$get_stock_array = mysql_fetch_array($get_stock);
										$tmp = $get_stock_array["stock_name"];
										$quantity[$tmp] = $get_stock_array["stock_quantity"];
										
									}
								}

								
								
								$size_name_ = current($size_name_list);
								$size_counter=0;
								foreach ($size_id_list as $size_id_){
									echo		'<div class="fill_row">';
									echo			'<div class="fill_label">';
									if ($size_counter==0){
										echo 'Size';
									}
									echo            '</div>';
									echo			'<div class="form_2_auto">';
										echo '<div class="size_label">'.$size_name_.'</div>';
										echo '<input type="text" class="fill_small_text_box" name="stock_quantity_'.$counter.'[]" value="'.$quantity[$size_name_].'" />';
										echo '<input type="hidden" class="fill_small_text_box" name="stock_name_'.$counter.'[]" value="'.$size_name_.'" />';
										echo			'</div>';
										echo        '<div class="void_row"></div>';
										echo		'</div>';
										$size_name_ = next($size_name_list);
										$size_counter++;
								}

								echo '</div>';
								
								echo		'<div class="fill_row seperate_top">';
								echo			'<div class="fill_label">Weight</div>';

								echo			'<div class="form_2_auto">';
								echo				'<input type="text" class="fill_small_text_box" id="type_weight_'.$counter.'" name="type_weight_'.$counter.'" value="'.$type_weight[$counter].'" />';

								echo			'</div>';
								echo		'</div>';
								
								
								
								for ($counter2=1;$counter2<=5;$counter2++){
									echo '<input type="hidden" id="order_'.$counter.'_'.$counter2.'" name="order_'.$counter.'_'.$counter2.'" />';
								}
								
								
							
						}

				if(mysql_num_rows($get_info)==null){
					$counter=2;
				}		
				
				echo '<input type="hidden" name="total_field" id="total_field" value="'.($counter-1).'" />';
				echo '<input type="hidden" name="product_id" id="product_id" value="'.$product_id.'" />';
				echo '<input type="hidden" name="category_id" id="category_id" value="'.$category_id.'" />';
				echo '<div id="extended_'.$counter.'"><input type="button" id="add_type_button" class="right_ add_button image_button h26_button green_button button" value="Add Color"  onclick="addField('.$counter.')" /></div>';
				?>
			
			
			
			
			
			
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