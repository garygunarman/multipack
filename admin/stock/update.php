<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=stock");
}
else{
$input_count=$_POST["input_count"];
$index_type=$_POST["index_type"];
$category_id = $_POST["category_id"];

//echo $input_count;

date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');

include("../../static/connect_database.php");

$last_type_id="";
$last_size_type_id="";
$last_product_id="";
for ($stock_counter=1;$stock_counter<=$input_count;$stock_counter++){
	$type_id="";
	$type_id = $_POST["id_".$stock_counter];
	$stock_name = $_POST["size_".$stock_counter];
	$input = $_POST["input_".$stock_counter];
	if ($input==0){
		$stock_sold_out=1;
	}
	else{
		$stock_sold_out=0;
	}
	$product_id = $_POST["product_id_".$stock_counter];
	$size_type_id = $_POST["size_type_id_".$stock_counter];
	
	
	//echo $type_id." ".$product_id."_".$stock_name." ".$input;
	//echo '<br/>';
	

	mysql_query("
		UPDATE tbl_product_stock
		SET stock_quantity = '$input', stock_sold_out = '$stock_sold_out'
		WHERE type_id = '$type_id' AND stock_name = '$stock_name'
	",$con);
	
	if ($type_id!=$last_type_id&&$stock_counter!=1){
		
		
			$size_type_id = $last_size_type_id;
			$product_id = $last_product_id;
			
			include("../static/check_sold_out.php");
			//echo "true ".$size_type_id." ".$product_id;
			//echo "<br/>";
			
		
	}
		
		
	$last_product_id = $_POST["product_id_".$stock_counter];
	$last_type_id = $_POST["id_".$stock_counter];
	$last_size_type_id = $_POST["size_type_id_".$stock_counter];
	}
	

if ($index_type==1){
	header("location:index.php?success=true&category_id=".$category_id);
}
else{
	header("location:index2.php?success=true&category_id=".$category_id);
}
}
?>