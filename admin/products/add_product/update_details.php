<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=products");
}
else{
$product_id=$_POST["product_id"];
$product_category=$_POST["product_category"];
$product_name=$_POST["product_name"];
$size_type_id=$_POST["size_type_id"];
$total_field=$_POST["total_field"];
$category_id = $_POST["category_id"];
$designer_id = $_POST["designer_id"];

date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d');

include("../../../static/connect_database.php");
$get_order = mysql_query("
	SELECT * from tbl_product
	ORDER BY product_order DESC
",$con);

if (mysql_num_rows($get_order)!=null){
	$get_order_array = mysql_fetch_array($get_order);
	$product_order = $get_order_array["product_order"]*1+1;
}


mysql_query("
	INSERT INTO tbl_product(product_category, product_name,product_size_type_id,product_date_added,product_order,designer_id)
	VALUES('$product_category', '$product_name','$size_type_id','$date','$product_order','$designer_id')

",$con);




$get_id = mysql_query("
	SELECT * from tbl_product
	WHERE product_category = '$product_category' AND product_name = '$product_name' AND product_size_type_id = '$size_type_id'
	ORDER BY id DESC
",$con);

if (mysql_num_rows($get_id)!=null){
	$get_id_array = mysql_fetch_array($get_id);
	$product_id = $get_id_array["id"];
}

for ($counter=1;$counter<=$total_field;$counter++){
	$type_id="";
	$type_id = $_POST["type_id_".$counter];
	$type_code = $_POST["type_code_".$counter];
	$type_price = $_POST["type_price_".$counter];
	$type_description = $_POST["type_description_".$counter];
	$color_id = $_POST["color_id_".$counter];
	$type_name = $_POST["type_name_".$counter];
	$type_weight = $_POST["type_weight_".$counter];
	
	if ($type_id!=""){
	mysql_query("
		UPDATE tbl_product_type
		SET type_code = '$type_code', type_name = '$type_name', type_price = '$type_price', type_description = '$type_description', color_id = '$color_id' , type_weight = '$type_weight', type_order= '$counter'
		WHERE type_id = '$type_id'
	",$con);

	
	}
	else{
		
		
			mysql_query("
				INSERT INTO tbl_product_type(type_code,type_name,type_price,type_description,color_id,type_weight,product_id,type_order)
				VALUES ('$type_code','$type_name','$type_price','$type_description','$color_id','$type_weight','$product_id','$counter')

			",$con);
		
		$get_id2 = mysql_query("
			SELECT * from tbl_product_type
			WHERE type_code='$type_code' AND type_name='$type_name' AND type_description='$type_description' AND type_price='$type_price'
			ORDER BY type_id DESC
		",$con);
		
		if (mysql_num_rows($get_id2)!=null){
			$get_id2_array = mysql_fetch_array($get_id2);
			$type_id = $get_id2_array["type_id"];
		}
	}
	//echo $type_id;
	//echo $_FILES["type_image_".$counter]["tmp_name"];
	if ($_FILES["type_image_".$counter]["tmp_name"]!=null){
		
		$tmp_name = $_FILES["type_image_".$counter]["tmp_name"];
		$name = $product_name."_".$type_name."_".$date."_".$_FILES["type_image_".$counter]["name"];
		$error = $_FILES["type_image_".$counter]["error"];
		//$link = $_POST["product_image_".$counter."_".$image_counter];

		if ($error == 0){
			move_uploaded_file($tmp_name,"../../../files/uploads/color/$name");
			$img_src="files/uploads/color/$name";
		}


		
		
			mysql_query("
				UPDATE tbl_product_type
				SET type_image='$img_src'
				WHERE type_id='$type_id'
			",$con);
		
	}
	else{
		
		$img_src=$_POST["image_filename_type_image_".$counter];
	


	
	
		mysql_query("
			UPDATE tbl_product_type
			SET type_image='$img_src'
			WHERE type_id='$type_id'
		",$con);
	}
	
	//echo $img_src;
	
	for ($counter2=1;$counter2<=4;$counter2++){
		$i = $_POST["order_".$counter."_".$counter2];
		
		$image_id = "";
		$image_id = $_POST["image_id_".$counter."_".$i];
		$image_order = $counter2;
		
		if ($image_id==""){
			if ($_FILES["product_image_".$counter."_".$i]["tmp_name"]!=null){

				$tmp_name = $_FILES["product_image_".$counter."_".$i]["tmp_name"];
				$name = $product_name."_".$type_name."_".$date."_".$_FILES["product_image_".$counter."_".$i]["name"];
				$error = $_FILES["product_image_".$counter."_".$i]["error"];
				//$link = $_POST["product_image_".$counter."_".$image_counter];
				
				if ($error == 0){
					move_uploaded_file($tmp_name,"../../../files/uploads/product_image/$name");
					$img_src="files/uploads/product_image/$name";
				}
				
				$tg = new thumbnailGenerator;
				$tg->generate('../../../files/uploads/product_image/'.$name, 260, 195, '../../../files/uploads/product_image/thumb_260x195/'.$name);

				mysql_query("
					INSERT INTO tbl_product_image(type_id,img_src,image_order)
					VALUES ('$type_id','$img_src','$image_order')

				",$con);
				
				//echo " ".$type_id.$img_src.$image_order;
				
				
			} 
			
		} //image_id
		else{
			
			if ($_FILES["product_image_".$counter."_".$i]["tmp_name"]!=null){
				
				$tmp_name = $_FILES["product_image_".$counter."_".$i]["tmp_name"];
				$name = $product_name."_".$type_name."_".$date."_".$_FILES["product_image_".$counter."_".$i]["name"];
				$error = $_FILES["product_image_".$counter."_".$i]["error"];
				//$link = $_POST["product_image_".$counter."_".$image_counter];

				if ($error == 0){
					move_uploaded_file($tmp_name,"../../../files/uploads/product_image/$name");
					$img_src="files/uploads/product_image/$name";
				}


				$tg = new thumbnailGenerator;
				$tg->generate('../../../files/uploads/product_image/'.$name, 260, 195, '../../../files/uploads/product_image/thumb_260x195/'.$name);
				
					mysql_query("
						UPDATE tbl_product_image
						SET img_src='$img_src'
						WHERE image_id='$image_id'
					",$con);
				
			}
		
			mysql_query("
				UPDATE tbl_product_image
				SET image_order='$image_order'
				WHERE image_id='$image_id'
			",$con);
		}
	}
	
	$stock_quantity_array = array();
	$stock_quantity_array = $_POST["stock_quantity_".$counter];
	$stock_name_array = array();
	$stock_name_array = $_POST["stock_name_".$counter];
	
	$stock_name = current($stock_name_array);
	foreach ($stock_quantity_array as $stock_quantity){
		//echo $type_id.$stock_quantity.$stock_name;
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
			//echo $stock_id.$stock_sold_out;
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
		$stock_name = next($stock_name_array);
	}
}




include("../../static/check_sold_out.php");

$url=$_POST["url"];



header("location:../../products");

}
?>