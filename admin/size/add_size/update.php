<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=size");
}
else{


$size_type_name=$_POST["size_type_name"];
$sizes = $_POST["sizes"];
$sizes_array = array();
$sizes_array =explode(", ",$sizes);



date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d H:i:s');


include("../../../static/connect_database.php");
	
	$get_list =mysql_query("
		SELECT * from tbl_size_type
		ORDER BY size_type_order DESC
	",$con);
	
	if (mysql_num_rows($get_list)!=null){		
	
		
			$get_list_array=mysql_fetch_array($get_list);
			$last_order = $get_list_array["size_type_order"];
			$order = $last_order*1+1;		
	}
	
	
	mysql_query("
		INSERT INTO tbl_size_type(size_type_name,size_type_order)
		VALUES ('$size_type_name','$order')
	",$con);

	$get_id = mysql_query("
		SELECT * from tbl_size_type
		WHERE size_type_name='$size_type_name' AND size_type_order='$order'
	",$con);
	
	if (mysql_num_rows($get_id)!=null){
		$get_id_array = mysql_fetch_array($get_id);
		$size_type_id = $get_id_array["size_type_id"];
	}
	
	
	foreach ($sizes_array as $counter => $size){
		$order = $counter*1+1;
		mysql_query("
		INSERT INTO tbl_size(size_type_id,size_name,size_order)
		VALUES ('$size_type_id','$size','$order')
		",$con);
	}
	
	



header("location:../../size");
}

?>