<?php
$product_size_type_id = $_POST["size_type_id"];
$counter = $_POST["counter"];
include("../../static/connect_database.php");
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
		echo '<input type="text" class="fill_small_text_box" name="stock_quantity_'.$counter.'[]" value="" />';
		echo '<input type="hidden" class="fill_small_text_box" name="stock_name_'.$counter.'[]" value="'.$size_name_.'" />';
		
		echo			'</div>';
		echo        '<div class="void_row"></div>';
		echo		'</div>';
		$size_name_ = next($size_name_list);
		$size_counter++;
}
?>