<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=about");
}
else{


include("../../static/connect_database.php");

$description = $_POST["description"];

//print_r($id_array);


		
		mysql_query("
			UPDATE tbl_about
			SET fill='$description'
			WHERE type='description'
		",$con);
	

header("location:../about?success=true");
}
?>