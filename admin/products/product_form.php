<?php
$prefix="../";
$counter = $_POST["counter"];
$type_price[$counter] = $_POST["price"];
$type_description[$counter] = $_POST["description"];
$product_size_type_id = $_POST["size_type_id"];
$type_weight[$counter] = $_POST["weight"];
include("../../static/connect_database.php");

echo '</div>';

echo '<hr class="field_hr" noshade size="1"/>';
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
		echo '<div class="hidden" id="color_name_'.$get_color_array["color_id"].'">'.$get_color_array["color_name"].'</div>';
	}
}

echo			'<div class="form_2_auto">';
echo 				'<select class="fill_combo_box" id="color_id_'.$counter.'" name="color_id_'.$counter.'" onchange="changeColor('.$counter.')">';
$color_name_ = current($color_name_list);
foreach ($color_id_list as $color_id_){
		
		echo        '<option value="'.$color_id_.'">'.$color_name_.'</option>';
		
		$color_name_ = next($color_name_list);
}

echo                '</select>';
echo			'</div>';
echo        '<div class="void_row"></div>';
echo		'</div>';				
*/

echo		'<div class="fill_row">';
echo			'<div class="fill_label">Color Name</div>';

echo			'<div class="form_2_auto">';
echo				'<input type="text" class="fill_text_box_file" id="type_name_'.$counter.'" name="type_name_'.$counter.'" value="'.$type_name[$counter].'" />';

echo			'</div>';
echo        '<div class="void_row"></div>';
echo		'</div>';

echo '<div class="fill_row">
<div class="fill_label">Color Image <font color="#999999"><i> (15 x 15 px)</i></font></div>

<div class="form_2_auto">
<input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile(\'type_image\')" />
<div class="form_7_auto">
	<input type="text" class="fill_text_box" id="image_filename_type_image_'.$counter.'" name="image_filename_type_image_'.$counter.'" value="'.$type_image[$counter].'" />

</div>
</div>

</div>
<input type="file" class="fill_file" id="type_image_'.$counter.'" name="type_image_'.$counter.'" onchange="this.form.image_filename_logo.value = this.value;"/>

</div>';



echo '<div class="fill_row seperate_top">
<div class="fill_label_2">Images&nbsp</div>
<div class="image_size">(1024 x 443 px)</div>
</div>';

	echo '<ul class="sortable" id="sortable_'.$counter.'">';

			
			for ($image_counter=1;$image_counter<=5;$image_counter++){
				echo '<li list_id="'.$image_counter.'">';
				echo '<div class="image_row fill_row" id="row_'.$counter.'_'.$image_counter.'" onclick="selectRowImage('.$counter.','.$image_counter.')" >';
				echo '<input type="checkbox" id="check_'.$counter.'_'.$image_counter.'" class="hidden" onmouseover="downCheck()" onmouseout="upCheck()" onclick="selectRowCheck('.$counter.','.$image_counter.')"/>';
				echo '<input type="hidden" name="image_id_'.$counter.'_'.$image_counter.'" value="" />';
				echo '	<div class="image_preview">';
				if ($img_src_!=""){
					echo '<a href="image_crop.php?brand_id='.$brand_id.'&brand_name='.$brand_name.'" target="_blank"><img class="the_image_preview" src="../../'.$img_src_.'" /></a>';
				}
				echo '</div>';
				echo '	<div class="form_2_auto">';

				echo		'<div class="fill_row">';
				echo			'<div class="fill_label_image">Image</div>';
				echo			'<input type="button" class="left_ h22_button grey_button button" value="Browse File" onclick="selectFile(\'product_image_'.$counter.'_'.$image_counter.'\')" />';
				echo			'<div class="form_5_auto">';
				echo				'<input type="text" class="fill_text_box_file" id="image_filename_product_image_'.$counter.'_'.$image_counter.'" name="" value="" />';

				echo			'</div>';
				echo		'</div>';



				echo	'</div>';
				echo '<input type="button" onclick="" class="delete_button image_button right_ h26_button red_button button" value="Clear Content">';
				echo				'<input type="file" class="fill_file" id="product_image_'.$counter.'_'.$image_counter.'" name="product_image_'.$counter.'_'.$image_counter.'" onchange="this.form.image_filename_product_image_'.$counter.'_'.$image_counter.'.value = this.value;"/>';
				echo	'<div class="void_row"></div>';
				echo '</div>';
				echo '</li>';
				
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
	
	
	$counter++;
	echo '<div id="extended_'.$counter.'"><input type="button" id="add_type_button" class="right_ add_button image_button h26_button green_button button" value="Add Color" onclick="addField('.$counter.')" />';
?>