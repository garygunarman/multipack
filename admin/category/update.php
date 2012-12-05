<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=category");
}
else{

$category_name=$_POST["category_name"];
$category_parent=$_POST["category_parent"];


$category_id=$_POST["category_id"];
include("../../static/connect_database.php");

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
	DELETE FROM tbl_category_relation
	WHERE category_child='$category_id'
",$con);

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


$child_array=array();
$get_parent = mysql_query("
	SELECT * from tbl_category_relation
	WHERE category_parent='$category_id'
",$con);
if (mysql_num_rows($get_parent)!=null){
	for($counter=1;$counter<=mysql_num_rows($get_parent);$counter++){
		$get_parent_array = mysql_fetch_array($get_parent);
		$tmp_level = $get_parent_array["relation_level"];
		$tmp_child = $get_parent_array["category_child"];
		$child_array[$tmp_child]=$tmp_level;
	}	
}

foreach($child_array as $child => $level2){
	
	mysql_query("
		DELETE FROM tbl_category_relation
		WHERE category_child='$child' AND relation_level>'$level2'
	",$con);
	
	$level2_ = $level2 *1+1;
	
	mysql_query("
		INSERT INTO tbl_category_relation(category_child,category_parent,relation_level)
		VALUES('$child','$category_parent','$level2_')
	",$con);

	foreach($parent_array as $level => $parent){
		$new_level = $level*1+$level2_;
		mysql_query("
			INSERT INTO tbl_category_relation(category_child,category_parent,relation_level)
			VALUES('$child','$parent','$new_level')
		",$con);
		
		if ($parent=='top'){
			$category_level_ = $new_level-1;
			
				mysql_query("
					UPDATE tbl_category
					SET category_level = '$category_level_'
					WHERE category_id = '$child'
				",$con);
		}
		
	
	}
	
	if ($category_parent=="top"){
		
	
		mysql_query("
			UPDATE tbl_category
			SET category_level = '$level2'
			WHERE category_id = '$child'
		",$con);
		}
	
}

$url=$_POST["url"];

mysql_query("
	UPDATE tbl_category
	SET category_name = '$category_name', category_level = '$category_level'
	WHERE category_id = '$category_id'
",$con);

header("location:".$url."?success=1&category_id=".$category_id);

}
?>