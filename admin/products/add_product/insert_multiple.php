<?php
date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d');


$type_code = current($type_code_array);
$type_name = current($type_name_array);
$type_price = current($type_price_array);
$type_description = current($type_description_array);
$type_specification = current($type_specification_array);
$type_weight = current($type_weight_array);
$color_image = current($color_image_array);
$product_category = current($product_category_array);
//$color_id = current($color_id_array);
$type_image = current($type_image_array);
$product_size_type_id = current($product_size_type_id_array);
//$designer_id = current($designer_id_array);
$product_stock = current($product_stock_array);

foreach ($product_name_array as $product_name){
	$get_id = mysql_query("
		SELECT * from tbl_product
		WHERE product_name = '$product_name'
		ORDER BY id DESC
	",$con);

	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$product_id = $get_id_array["id"];
		
	}
	else{
		$get_order = mysql_query("
			SELECT * from tbl_product
			ORDER BY product_order DESC
		",$con);

		if (mysql_num_rows($get_order)!=null){
			$get_order_array = mysql_fetch_array($get_order);
			$product_order = $get_order_array["product_order"]*1+1;
		}
		
		
		mysql_query("
			INSERT INTO tbl_product(product_category, product_name,product_size_type_id,product_date_added,product_order)
			VALUES('$product_category', '$product_name','$product_size_type_id','$date','$product_order')

		",$con);

		$get_id = mysql_query("
			SELECT * from tbl_product
			WHERE product_category = '$product_category' AND product_name = '$product_name' AND product_size_type_id = '$product_size_type_id'
			ORDER BY id DESC
		",$con);

		if (mysql_num_rows($get_id)!=null){
			$get_id_array = mysql_fetch_array($get_id);
			$product_id = $get_id_array["id"];
		}
	}
	
	//type
	mysql_query("
		INSERT INTO tbl_product_type(type_code,type_name,type_price,type_image,type_description,type_specification,color_id,type_weight,product_id)
		VALUES ('$type_code','$type_name','$type_price','$color_image','$type_description','$type_specification','$color_id','$type_weight','$product_id')
		
	",$con);
	
	$sql_ = "SELECT * from tbl_product_type
	WHERE type_code='$type_code' AND type_name='$type_name' AND type_description='$type_description' AND type_price='$type_price'
	ORDER BY type_id DESC";
	
	//echo $sql_;
	$get_id2 = mysql_query($sql_
	,$con);
	
	if (mysql_num_rows($get_id2)!=null){
		$get_id2_array = mysql_fetch_array($get_id2);
		$type_id = $get_id2_array["type_id"];
	}
	
	
	//image
	$image_order=1;
	foreach ($type_image as $img_src){ 
		if ($img_src!=""){
		$img_src = "files/uploads/products/".$date."/".$img_src;
		mysql_query("
			INSERT INTO tbl_product_image(type_id,img_src,image_order)
			VALUES ('$type_id','$img_src','$image_order')

		",$con);
		}
		$image_order++;
		
	}
	
	//stock
	foreach ($product_stock as $stock_name => $stock_quantity){
		if ($stock_quantity==""||$stock_quantity=="0"){
			$stock_sold_out = 1;
		}
		else{
			$stock_sold_out = 0;
		}
		
		$check = mysql_query("
			SELECT * from tbl_product_stock
			WHERE type_id='$type_id' AND stock_name='$stock_name'
			
		",$con);
		
		if (mysql_num_rows($check)!=null){
			$check_array = mysql_fetch_array($check);
			$stock_id = $check_array["stock_id"];
			
			mysql_query("
				UPDATE tbl_product_stock
				SET stock_quantity='$stock_quantity', stock_sold_out = '$stock_sold_out'
				WHERE stock_id='$stock_id'
			",$con);
		}
		else{
			//echo $stock_name.$stock_quantity.$type_id.'<br/>';
			mysql_query("
				INSERT INTO tbl_product_stock(type_id,stock_name,stock_quantity,stock_sold_out)
				VALUES ('$type_id','$stock_name','$stock_quantity','$stock_sold_out')

			",$con);
		}
	}
	
	
	$type_code = next($type_code_array);
	$type_name = next($type_name_array);
	$type_price = next($type_price_array);
	$type_description = next($type_description_array);
	$type_specification = next($type_specification_array);
	$type_weight = next($type_weight_array);
	$color_image = next($color_image_array);
	$product_category = next($product_category_array);
	//$color_id = next($color_id_array);
	$type_image = next($type_image_array);
	$product_size_type_id = next($product_size_type_id_array);
	//$designer_id = next($designer_id_array);
	$product_stock = next($product_stock_array);
}
?>