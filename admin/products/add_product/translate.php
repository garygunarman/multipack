<?php
$product_name_array = array();
$type_code_array = array();
$type_name_array = array();
$type_price_array = array();
$type_description_array = array();
$type_specification_array = array();
$type_weight_array = array();
$color_image_array = array();
$product_category_array = array();
//$color_id_array = array();
$type_image_array = array();
$product_size_type_id_array = array();
$product_stock_array = array();
//$designer_id_array = array();

$counter=0;
foreach ($array_data as $one_row){
	
	
	//$size_type[$counter] = $one_row["size_type"];
	//$quantity[$counter] = $one_row["quantity"];
	
	
	array_push($type_code_array,$one_row["type_code"]);
	array_push($product_name_array,$one_row["product_name"]);
	array_push($type_name_array,$one_row["type_name"]);
	array_push($type_price_array,$one_row["type_price"]);
	array_push($type_description_array,addslashes($one_row["type_description"]));
	array_push($type_specification_array,addslashes($one_row["type_specification"]));
	array_push($type_weight_array,$one_row["type_weight"]);
	
	
	
	//image
	$image_array = array ($one_row["image1"],$one_row["image2"],$one_row["image3"],$one_row["image4"],$one_row["image5"]);
	array_push($type_image_array,$image_array);
	
	
	//category
	$category_name = $one_row["product_category"];
	$get_id = mysql_query("
		SELECT * from tbl_category
		WHERE category_name = '$category_name'
		ORDER BY category_id DESC
	",$con);

	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$category_id = $get_id_array["category_id"];
		array_push($product_category_array,$category_id);
	}
	else{
		array_push($product_category_array,"");
	}
	
	
	//color
	/*$color_name = $one_row["color_group"];
	$get_id = mysql_query("
		SELECT * from tbl_color
		WHERE color_name = '$color_name'
		ORDER BY color_id DESC
	",$con);

	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$color_id_ = $get_id_array["color_id"];
		array_push($color_id_array,$color_id_);
		$color_image = $get_id_array["color_image"];
	}
	else{
		array_push($color_id_array,"");
		$color_image="";
	}
	*/
	//if ($one_row["color_image"]!="default"){
		array_push($color_image_array,"files/uploads/products/".$one_row["color_image"]);
	//}
	//else{
	//	array_push($color_image_array,$color_image);
	//}
	
	
	//size
	$size_type_name = $one_row["size_type"];
	$get_id = mysql_query("
		SELECT * from tbl_size_type
		WHERE size_type_name = '$size_type_name'
		ORDER BY size_type_id DESC
	",$con);

	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$size_type_id_ = $get_id_array["size_type_id"];
		array_push($product_size_type_id_array,$size_type_id_);
		//echo $size_type_id_;
	}
	else{
		array_push($product_size_type_id_array,"");
		
	}
	
	//designer
	/*$designer_name = $one_row["designer_name"];
	$get_id = mysql_query("
		SELECT * from tbl_designer
		WHERE designer_name = '$designer_name'
		ORDER BY designer_id DESC
	",$con);

	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$designer_id_ = $get_id_array["designer_id"];
		array_push($designer_id_array,$designer_id_);
		
	}
	else{
		array_push($designer_id_array,"");
		
	}
	*/
	
	//quantity
	$tmp_array = array();
	$tmp_array = explode(",",$one_row["quantity"]);
	
	foreach ($tmp_array as $tmp){
		$tmp2 = array();
		$tmp2 = explode(":",$tmp);
		$stock_name = $tmp2[0];
		$stock_quantity = $tmp2[1];
		$product_stock_array[$counter][$stock_name] = $stock_quantity;
		
		//echo $stock_name.$stock_quantity;
	}
	
	$counter++;
}
?>