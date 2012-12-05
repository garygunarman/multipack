<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=orders");
}
else{

$action=$_POST["action"];

include("../../static/connect_database.php");
include("../../static/get_info.php");
$id_array = array();
$id_array = $_POST["id_"];
$shipping_array = array();
$shipping_array = $_POST["shipping_number"];
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
			SELECT * from tbl_order
			WHERE order_id='$id'
		",$con);
		if (mysql_num_rows($get_email)!=null){
			$get_email_array = mysql_fetch_array($get_email);
			if ($counter!=0){
				$email_list .= ",";
			}
			$email_list .= $get_email_array["order_billing_email"];
			$counter++;
		}
	}
	
	header("location: mailto:".$info["email"]."?bcc=".$email_list);
}
else{
if ($action=="change_status"){
	$counter=0;
	foreach ($id_array as $id){
		
		$status = $_POST["status"];
		
		
		
		if ($status=="delivered"){
			$shipping_number = $shipping_array[$id];
			if ($shipping_number!=null){
			mysql_query("
				UPDATE tbl_order
				SET order_shipping_number = '$shipping_number'
				WHERE order_id='$id'
			",$con);
			
			mysql_query("
				UPDATE tbl_order
				SET order_status = '$status'
				WHERE order_id='$id'
			",$con);
			
			include("../orders/email.php");
			}
			
		}
		else{
		mysql_query("
			UPDATE tbl_order
			SET order_status = '$status'
			WHERE order_id='$id'
		",$con);
		}
		$counter++;
	}
	
}

else if($action=="delete"){
	foreach ($id_array as $id){		
		mysql_query("
			DELETE FROM tbl_order
			WHERE order_id='$id'
		",$con);
	}
}


header("location:".$url."?success=true");
}
}
?>