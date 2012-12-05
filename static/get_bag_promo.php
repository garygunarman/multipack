<?php
date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');

$promo = "	SELECT * from tbl_promo_item
	WHERE product_type_id = '$type_id' AND promo_start_datetime<='$date' AND promo_end_datetime>='$date'";


$get_promo = 	mysql_query($promo,$con);
	$promo_id=array();
	$promo_value=array();

	if (mysql_num_rows($get_promo)!=null){
		for ($counter3=0;$counter3<mysql_num_rows($get_promo);$counter3++){
		$get_promo_array = mysql_fetch_array($get_promo);
		array_push($promo_id,$get_promo_array["promo_id"]);
		array_push($promo_value,$get_promo_array["promo_value"]);
		}
	}
	
	if (in_array('1',$promo_id)){
		$x = array_search('1',$promo_id);

		$product_type_array["type_price"]=$product_type_array["type_price"]-($product_type_array["type_price"]*$promo_value[$x]/100);
		//$type_sale_amount_="IDR ".number_format($type_sale_amount_,0,",",".");
	}	
	else if (in_array('2',$promo_id)){
		$x = array_search('2',$promo_id);
		$product_type_array["type_price"]=$product_type_array["type_price"]-$promo_value[$x];
		//$type_sale_amount_="IDR ".number_format($type_sale_amount_,0,",",".");
	}


?>