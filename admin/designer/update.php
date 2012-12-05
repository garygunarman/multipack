<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=designer");
}
else{

$action=$_POST["action"];

include("../../static/connect_database.php");
$id_array = array();
$id_array = $_POST["id_"];

$url=$_POST["url"];
$page=$_POST["page"];
$query_per_page=$_POST["query_per_page"];
$search=$_POST["search"];
$sort_by=$_POST["sort_by"];
$category_id = $_POST["category_id"];
//print_r($id_array);


if($action=="delete"){
	
	foreach ($id_array as $id){		
		mysql_query("
			DELETE from tbl_designer
			
			WHERE designer_id = '$id'
		",$con);
		
		
	}
}
else if ($action=="save order"){
	
	for ($counter=1;$_POST["order_".$counter]!=null;$counter++){
		
		$designer_id = $_POST["order_".$counter];
		$designer_order = $_POST["designer_order_".$counter];
		
		mysql_query("
			UPDATE tbl_designer
			SET designer_order='$designer_order'
			WHERE designer_id='$designer_id'
		",$con);
	}
	
	
	
}

header("location:".$url."?success=true&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search);

}
?>