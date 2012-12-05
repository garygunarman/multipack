<?php session_start();
	if ($_SESSION["user_status"]!="admin"){
			header("location:../login.php?redirect=category");
	}
	else{
		include("../../static/connect_database.php");
		$category_id=$_GET["category_id"];
		$get_order = mysql_query("
			SELECT * from tbl_category
			WHERE category_id = '$category_id'
		",$con);

		if (mysql_num_rows($get_order)!=null){
			$get_order_array = mysql_fetch_array($get_order);
			$category_order = $get_order_array["category_order"];
		}
		
		mysql_query("
			UPDATE tbl_category
			SET category_order = category_order-1
			WHERE category_order > '$category_order'
		",$con);
		
	
	$category_parent_redirect = $_GET["parent_category"];
	mysql_query("
		DELETE FROM tbl_category
		WHERE category_id = '$category_id'
	",$con);
	
	$category_relation=mysql_query("
		SELECT * from tbl_category_relation 
		WHERE category_parent = '$category_id'
	",$con);

	if (mysql_num_rows($category_relation)!=null){
		for ($counter=1;$counter<=mysql_num_rows($category_relation);$counter++){
			$category_relation_array = mysql_fetch_array($category_relation);
			$category_child = $category_relation_array["category_child"];
			
			mysql_query("
				DELETE FROM tbl_category_relation
				WHERE category_parent = '$category_child'
			",$con);
			mysql_query("
				DELETE FROM tbl_category
				WHERE category_id = '$category_child'
			",$con);
		}
	}
	
	mysql_query("
		DELETE FROM tbl_category_relation
		WHERE category_child = '$category_id' OR category_parent = '$category_id'
	",$con);
	
	header("location:index.php?success=2");
	}
?>
