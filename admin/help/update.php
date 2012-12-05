<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=help");
}
else{


include("../../static/connect_database.php");
$type=$_POST["type"];
$description = $_POST["description"];

//print_r($id_array);
	$get_ = mysql_query("
		SELECT * from tbl_help
		WHERE type='$type'
		",$con);

	if (mysql_num_rows($get_)>0){
		
		mysql_query("
			UPDATE tbl_help
			SET fill='$description'
			WHERE type='$type'
		",$con);
	}
	else{
		mysql_query("
			INSERT INTO tbl_help(fill,type)
			VALUES ('$description','$type')
		",$con);
	}
		
		
	

header("location:../help?type=".$type."&success=true");
}
?>