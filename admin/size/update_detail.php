<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=size");
}
else{
$size_type_id=$_POST["size_type_id"];

$size_type_name=$_POST["size_type_name"];
$sizes = $_POST["sizes"];
$sizes_array = array();
$sizes_array =explode(", ",$sizes);



date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');


include("../../static/connect_database.php");
$action = $_POST["action"];
if ($action=="delete"){
	mysql_query("
		DELETE FROM tbl_size_type
		WHERE size_type_id = '$size_type_id'
	",$con);
	mysql_query("
		DELETE FROM tbl_size
		WHERE size_type_id = '$size_type_id'
	",$con);
	header("location:../size");
}
else{	
	
	mysql_query("
		UPDATE tbl_size_type
		SET size_type_name = '$size_type_name'
		WHERE size_type_id = '$size_type_id'
	",$con);

	mysql_query("
		DELETE FROM tbl_size
		WHERE size_type_id = '$size_type_id'
	",$con);
	
	
	foreach ($sizes_array as $counter => $size){
		$order = $counter*1+1;
		mysql_query("
		INSERT INTO tbl_size(size_type_id,size_name,size_order)
		VALUES ('$size_type_id','$size','$order')
		",$con);
	}
	
	



header("location:detail.php?size_type_id=".$size_type_id."&size_type_name=".$size_type_name);
}
}
?>