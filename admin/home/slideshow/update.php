<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=home");
}
else{

$action=$_POST["action"];

include("../../../static/connect_database.php");
$id_array = array();
$id_array = $_POST["id_"];

//print_r($id_array);

if ($action=="save_order"){
	
	for ($counter=1;$counter<=5;$counter++){
		$id = $_POST["order_".$counter];
		
		mysql_query("
			UPDATE tbl_home
			SET order_='$counter'
			WHERE id='$id'
		",$con);
	}
	
	header("location:../slideshow?success=3");
}

else if($action=="delete"){
	foreach ($id_array as $id){	
			
		mysql_query("
			DELETE FROM tbl_home
			WHERE id='$id'
		",$con);
	}
	
	header("location:../slideshow?success=2");
}

else if ($action=="save_all"){
	
	for ($counter=1;$counter<=5;$counter++){
		
		if ($_FILES["image_file_".$counter]["tmp_name"]!=null){
			
			$tmp_name = $_FILES["image_file_".$counter]["tmp_name"];
			$name = $_FILES["image_file_".$counter]["name"];
			$error = $_FILES["image_file_".$counter]["error"];
			$link = $_POST["link".$counter];
			
			if ($error == 0){
				move_uploaded_file($tmp_name,"../../../files/uploads/slideshow/$name");
				$img_src="files/uploads/slideshow/$name";
			}
			

			
			
			$check_image = mysql_query("
				SELECT * from tbl_home
				WHERE order_='$counter'
			",$con);
			
			
			
			if (mysql_num_rows($check_image)!=null && mysql_num_rows($check_image)!=0){
				
				mysql_query("
					UPDATE tbl_home
					SET filename = '$img_src'
					WHERE order_='$counter'
				",$con);
			}
			else{
				mysql_query("
					INSERT INTO tbl_home(filename,order_)
					VALUES ('$img_src','$counter')
				",$con);
			}
		}
		
			$link = $_POST["link_".$counter];
			mysql_query("
				UPDATE tbl_home
				SET link = '$link'
				WHERE order_='$counter'
			",$con);
		
		
	}
	for ($counter=1;$counter<=5;$counter++){
		$id = $_POST["order_".$counter];
		
		mysql_query("
			UPDATE tbl_home
			SET order_='$counter'
			WHERE id='$id'
		",$con);
	}
	
	header("location:../slideshow?success=1");
}
else{
	header("location:../slideshow?error=1");
}

}
?>