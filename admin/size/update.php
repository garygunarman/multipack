<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=size_type");
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

//print_r($id_array);


if($action=="delete"){
	
	foreach ($id_array as $id){		
		mysql_query("
			DELETE from tbl_size_type			
			WHERE size_type_id = '$id'
		",$con);
		
		mysql_query("
			DELETE from tbl_size			
			WHERE size_type_id = '$id'
		",$con);
	}
}


header("location:".$url."?success=true&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search);

}
?>