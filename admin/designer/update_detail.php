<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=designer");
}
else{
$designer_id=$_POST["designer_id"];

$designer_name=$_POST["designer_name"];



date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');


include("../../static/connect_database.php");

	
	$action = $_POST["action"];
	if ($action=="delete"){
		mysql_query("
			DELETE FROM tbl_designer
			WHERE designer_id = '$designer_id'
		",$con);
	
		header("location:../designer");
	}
	else{
	
	mysql_query("
		UPDATE tbl_designer
		SET designer_name = '$designer_name'
		WHERE designer_id = '$designer_id'
	",$con);

	
	
	
	
	
	



header("location:detail.php?designer_id=".$designer_id."&designer_name=".$designer_name);
}
}
?>