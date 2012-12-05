<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=products");
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
//print_r($id_array);


if ($action=="change_visibility"){
	$product_id = current($product_id_array);
	foreach ($id_array as $id){
		$visibility = $_POST["visibility"];
		
		mysql_query("
			UPDATE tbl_product_type
			SET type_visibility = '$visibility'
			WHERE type_id='$id'
		",$con);
		
		if ($type_visibility=='1'){
			mysql_query("
				UPDATE tbl_product
				SET product_visibility = '$visibility'
				WHERE id='$product_id'
			",$con);
		}
		else{
			$check = mysql_query("
				SELECT * from tbl_product_type
				WHERE product_id = '$product_id' AND type_visibility = '1'
			",$con);
			
			if (mysql_num_rows($check)==null){
				mysql_query("
					UPDATE tbl_product
					SET product_visibility = '0'
					WHERE id='$product_id'
				",$con);
			}
			else{
				mysql_query("
					UPDATE tbl_product
					SET product_visibility = '1'
					WHERE id='$product_id'
				",$con);
			}
		}
		
		$product_id = next($product_id_array);
	}
	
}

else if($action=="delete"){
	$product_id = current($product_id_array);
	foreach ($id_array as $id){		
		mysql_query("
			UPDATE tbl_product_type
			SET type_delete='1', type_visibility='0'
			WHERE type_id = '$id'
		",$con);
		
		$check_product = mysql_query("
		SELECT * from tbl_product_type
		WHERE product_id='$product_id' AND type_delete!='1'
		",$con);
		
		if (mysql_num_rows($check_product)==0){
			mysql_query("
				UPDATE tbl_product
				SET product_delete='1', product_visibility='0'
				WHERE id = '$product_id'
			",$con);
		}
		
		$product_id = next($product_id_array);
	}
}


header("location:".$url."?success=true&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search."&category_id=".$category_id);

}
?>