<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=home");
}
else{

//$action=$_POST["action"];

include("../../../static/connect_database.php");
$link = $_POST["link"];
$title = $_POST["title"];

mysql_query("
	INSERT INTO tbl_home_video(link,title)
	VALUES ('$link','$title')
",$con);


header("location:../video?success=true");
}
?>