<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=display");
}
else{

$action=$_POST["action"];

include("../../static/connect_database.php");

$url=$_POST["url"];
$page=$_POST["page"];
$query_per_page=$_POST["query_per_page"];
$search=$_POST["search"];
$sort_by=$_POST["sort_by"];
$category_id = $_POST["category_id"];
//print_r($id_array);
$action = $_POST["action"];



if ($action=="save order"){
	
	for ($counter=1;$_POST["order_".$counter]!=null;$counter++){
		
		$product_id = $_POST["order_".$counter];
		$product_order = $_POST["product_order_".$counter];
		
		mysql_query("
			UPDATE tbl_product
			SET product_order='$product_order'
			WHERE id='$product_id'
		",$con);
	}
	
	
	
}



header("location:".$url."?success=true&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search."&category_id=".$category_id);

}
?>