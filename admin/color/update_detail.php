<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=color");
}
else{
$color_id=$_POST["color_id"];

$color_name=$_POST["color_name"];



date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');


include("../../static/connect_database.php");

	
	$action = $_POST["action"];
	if ($action=="delete"){
		mysql_query("
			DELETE FROM tbl_color
			WHERE color_id = '$color_id'
		",$con);
	
		header("location:../color");
	}
	else{
	
	mysql_query("
		UPDATE tbl_color
		SET color_name = '$color_name'
		WHERE color_id = '$color_id'
	",$con);

	
	
	
	
	if ($_FILES["color_image"]["tmp_name"]!=null){
		
		$tmp_name = $_FILES["color_image"]["tmp_name"];
		$name = $color_name."_".$date."_".$_FILES["color_image"]["name"];
		$error = $_FILES["color_image"]["error"];
		//$link = $_POST["product_image_".$counter."_".$image_counter];

		if ($error == 0){
			move_uploaded_file($tmp_name,"../../files/uploads/color/$name");
			$img_src="files/uploads/color/$name";
		}


		
		
			mysql_query("
				UPDATE tbl_color
				SET color_image='$img_src'
				WHERE color_id='$color_id'
			",$con);
		
	}
	



header("location:detail.php?color_id=".$color_id."&color_name=".$color_name);
}
}
?>