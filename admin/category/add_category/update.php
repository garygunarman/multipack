<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=category");
}
else{

$category_name=$_POST["category_name"];
$category_parent=$_POST["category_parent"];



include("../../../static/connect_database.php");

$get_order = mysql_query("
	SELECT * from tbl_category
	ORDER BY category_order DESC
",$con);

if (mysql_num_rows($get_order)!=null){
	$get_order_array = mysql_fetch_array($get_order);
	$category_order = $get_order_array["category_order"]*1+1;
}

mysql_query("
	INSERT INTO tbl_category(category_name,category_order)
	VALUES('$category_name','$category_order')
	
",$con);

$get_id = mysql_query("
	SELECT * from tbl_category
	WHERE category_name = '$category_name'
	ORDER BY category_id DESC
",$con);

if (mysql_num_rows($get_id)!=null){
	$get_id_array = mysql_fetch_array($get_id);
	$category_id = $get_id_array["category_id"];
}

$parent_array=array();
$get_parent = mysql_query("
	SELECT * from tbl_category_relation
	WHERE category_child='$category_parent'
",$con);
if (mysql_num_rows($get_parent)!=null){
	for($counter=1;$counter<=mysql_num_rows($get_parent);$counter++){
		$get_parent_array = mysql_fetch_array($get_parent);
		$tmp_level = $get_parent_array["relation_level"];
		$tmp_parent = $get_parent_array["category_parent"];
		$parent_array[$tmp_level]=$tmp_parent;
	}	
}



mysql_query("
	INSERT INTO tbl_category_relation(category_child,category_parent,relation_level)
	VALUES('$category_id','$category_parent','1')
",$con);

foreach($parent_array as $level => $parent){
	$new_level = $level*1+1;
	mysql_query("
		INSERT INTO tbl_category_relation(category_child,category_parent,relation_level)
		VALUES('$category_id','$parent','$new_level')
	",$con);
	
	if ($parent=='top'){
		$category_level = $level;
	}
}



$url=$_POST["url"];

mysql_query("
	UPDATE tbl_category
	SET category_name = '$category_name', category_level = '$category_level'
	WHERE category_id = '$category_id'
",$con);

header("location:".$url."?category_id=".$category_id);

}
?>