<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=contact");
}
else{


include("../../static/connect_database.php");

$description = $_POST["description"];

//print_r($id_array);


		
		mysql_query("
			UPDATE tbl_contact
			SET fill='$description'
			WHERE type='description'
		",$con);
	

header("location:../contact?success=true");
}
?>