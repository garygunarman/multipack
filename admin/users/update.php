<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=orders");
}
else{

$action=$_POST["action"];

include("../../static/connect_database.php");
include("../static/get_info.php");
$id_array = array();
$id_array = $_POST["id_"];

$url=$_POST["url"];
$page=$_POST["page"];
$query_per_page=$_POST["query_per_page"];
$search=$_POST["search"];
$sort_by=$_POST["sort_by"];
//print_r($id_array);

if($action=="send_email"){
	$counter=0;
	$email_list = "";
	foreach ($id_array as $id){	
			
		$get_email = mysql_query("
			SELECT * from tbl_user
			WHERE user_id='$id'
		",$con);
		if (mysql_num_rows($get_email)!=null){
			$get_email_array = mysql_fetch_array($get_email);
			if ($counter!=0){
				$email_list .= ",";
			}
			$email_list .= $get_email_array["user_email"];
			$counter++;
		}
	}
	
	header("location: mailto:".$general_email."?bcc=".$email_list);
	
	header("location:".$url."?success=2&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search);
}
else{
if($action=="delete"){
	foreach ($id_array as $id){		
		mysql_query("
			DELETE FROM tbl_user
			WHERE user_id='$id'
		",$con);
	}
	
	header("location:".$url."?success=1&page=".$page."&query_per_page=".$query_per_page."&sort_by=".$sort_by."&search=".$search);
}



}
}
?>