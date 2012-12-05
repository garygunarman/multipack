<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=designer");
}
else{

$designer_name=$_POST["designer_name"];



date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');


include("../../../static/connect_database.php");

	
	
	
	mysql_query("
		INSERT INTO tbl_designer(designer_name)
		VALUES ('$designer_name')
	",$con);

	$get_id = mysql_query("
		SELECT * from tbl_designer
		WHERE designer_name='$designer_name'
	",$con);
	
	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$designer_id = $get_id_array["designer_id"];
	}
	
	
	
	
	



header("location:../../designer");
}

?>