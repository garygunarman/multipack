<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=email");
}
else{


include("../../static/connect_database.php");

$type = $_POST["type"];
$fill = $_POST["fill"];
//print_r($id_array);

	$availability = mysql_query("
		SELECT * from tbl_email
		WHERE type='$type'
	",$con);
	
	if (mysql_num_rows($availability)!=null){
		mysql_query("
			UPDATE tbl_email
			SET fill='$fill'
			WHERE type='$type'
		",$con);
	}
	else{
		mysql_query("
			INSERT INTO tbl_email(fill,type)
			VALUES ('$fill','$type')
		",$con);
	}
		
		
		
		
	

header("location:../email?success=true&type=$type");
}
?>