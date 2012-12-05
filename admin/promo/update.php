<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=promo");
}
else{

$action=$_POST["action"];

include("../../static/connect_database.php");
$id_array = array();
$id_array = $_POST["id_"];
$product_id_array = array();
$product_id_array = $_POST["product_id_"];
$url=$_POST["url"];
$page=$_POST["page"];
$query_per_page=$_POST["query_per_page"];
$search=$_POST["search"];
$sort_by=$_POST["sort_by"];
$category_id = $_POST["category_id"];



if ($action=="add"){
	//$product_id = current($product_id_array);
	//print_r($id_array);
	$promo_id = $_POST["promo_id"];
	$promo_start_datetime = $_POST["promo_start_datetime"];
	$promo_end_datetime = $_POST["promo_end_datetime"];
	
	if ($promo_id=='1'){
		$promo_value = $_POST["discount_percentage"];
	}
	else if ($promo_id=='2'){
		$promo_value = $_POST["discount_amount"];
	}
	
	foreach ($id_array as $id){
		
		
		mysql_query("
			INSERT INTO tbl_promo_item(promo_id,product_type_id,promo_value,promo_start_datetime,promo_end_datetime)
			VALUES ('$promo_id','$id','$promo_value','$promo_start_datetime','$promo_end_datetime')
		",$con);
	}
	
	header("location:".$url."?success=1&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search."&category_id=".$category_id);
}

else if($action=="delete"){
	//$product_id = current($product_id_array);
	foreach ($id_array as $id){		
		mysql_query("
			DELETE FROM tbl_promo_item
			WHERE product_type_id = '$id'
		",$con);
	}
	
	header("location:".$url."?success=2&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search."&category_id=".$category_id);
}

else if($action=="delete single"){
	//$product_id = current($product_id_array);
	$promo_item_id = $_POST["promo_id_delete"];
		
		mysql_query("
			DELETE FROM tbl_promo_item
			WHERE promo_item_id = '$promo_item_id'
		",$con);
	
	header("location:".$url."?success=2&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search."&category_id=".$category_id);
}
else{
	header("location:".$url."?error=1&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search."&category_id=".$category_id);
}



}
?>