<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=home");
}
else{

//$action=$_POST["action"];

include("../../../static/connect_database.php");
$id_array = array();
$id_array = $_POST["id_"];

//print_r($id_array);

//if ($action=="save_all"){
	
	//for ($counter=1;$counter<=5;$counter++){
		
		if ($_FILES["image_file_blog"]["tmp_name"]!=null){
			
			$tmp_name = $_FILES["image_file_blog"]["tmp_name"];
			$name = $_FILES["image_file_blog"]["name"];
			$error = $_FILES["image_file_blog"]["error"];
			$link = $_POST["link_blog"];
			
			if ($error == 0){
				move_uploaded_file($tmp_name,"../../../files/uploads/featured/blog.jpg");
				$img_src="files/uploads/featured/blog.jpg";
			}
			

			
			
			$check_image = mysql_query("
				SELECT * from tbl_home_featured
				WHERE type='blog'
			",$con);
			
			
			
			if (mysql_num_rows($check_image)!=null && mysql_num_rows($check_image)!=0){
				
				mysql_query("
					UPDATE tbl_home_featured
					SET filename = '$img_src'
					WHERE type='blog'
				",$con);
			}
			else{
				mysql_query("
					INSERT INTO tbl_home_featured(filename,type)
					VALUES ('$img_src','blog')
				",$con);
			}
		}
		
			$link = $_POST["link_blog"];
			mysql_query("
				UPDATE tbl_home_featured
				SET link = '$link'
				WHERE type='blog'
			",$con);
		
		if ($_FILES["image_file_gallery"]["tmp_name"]!=null){

			$tmp_name = $_FILES["image_file_gallery"]["tmp_name"];
			$name = $_FILES["image_file_gallery"]["name"];
			$error = $_FILES["image_file_gallery"]["error"];
			$link = $_POST["link_gallery"];

			if ($error == 0){
				move_uploaded_file($tmp_name,"../../../files/uploads/featured/gallery.jpg");
				$img_src="files/uploads/featured/gallery.jpg";
			}




			$check_image = mysql_query("
				SELECT * from tbl_home_featured
				WHERE type='gallery'
			",$con);



			if (mysql_num_rows($check_image)!=null && mysql_num_rows($check_image)!=0){

				mysql_query("
					UPDATE tbl_home_featured
					SET filename = '$img_src'
					WHERE type='gallery'
				",$con);
			}
			else{
				mysql_query("
					INSERT INTO tbl_home_featured(filename,type)
					VALUES ('$img_src','gallery')
				",$con);
			}
		}

			$link = $_POST["link_gallery"];
			mysql_query("
				UPDATE tbl_home_featured
				SET link = '$link'
				WHERE type='gallery'
			",$con);
	//}
//}

header("location:../banner?success=true");
}
?>