<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=products");
}
else{
$prefix="../../";
$multi_files=$_FILES["multi_files"];
$xls_file="";


date_default_timezone_set("Asia/Jakarta");
$date = date('Y-m-d');

include("../../../static/connect_database.php");
include("../../static/thumbnail.php");

$tmp_name = current($multi_files["tmp_name"]);
$error = current($multi_files["error"]);
$type = current($multi_files["type"]);
set_time_limit(3000);
foreach ($multi_files["name"] as $name){
	
	
	$name = $date."_".$name;
	
	

	if ($error == 0&&$type!="application/zip"){
		move_uploaded_file($tmp_name,"../../../files/uploads/products/$name");
		if (strpos($name,".xls")!==false){
			$xls_file = "../../../files/uploads/products/".$name;
			
		}
		else if (strpos($name,".jpg")!==false||strpos($name,".jpeg")!==false||strpos($name,".png")!==false||strpos($name,".gif")!==false){
				
			$tg = new thumbnailGenerator;
			$tg->generate('../../../files/uploads/products/'.$name, 260, 195, '../../../files/uploads/products/thumb_260x195/'.$name);
		}
	}
	else{
		$zip = new ZipArchive;
		if ($zip->open($tmp_name) === TRUE) {
		    $zip->extractTo($prefix.'../files/uploads/products/'.$date.'/');
		    $zip->close();
		    
			if ($handle = opendir($prefix.'../files/uploads/products/'.$date.'/')) {
				mkdir($prefix.'../files/uploads/products/thumb_260x195/'.$date, 0777);
			    while (false !== ($entry = readdir($handle))) {
			        if (strpos($entry,".jpg")!==false||strpos($entry,".jpeg")!==false||strpos($entry,".png")!==false||strpos($entry,".gif")!==false){

						$tg = new thumbnailGenerator;
						$tg->generate($prefix.'../files/uploads/products/'.$date.'/'.$entry, 260, 195, $prefix.'../files/uploads/products/thumb_260x195/'.$date.'/'.$entry);
					}
			            
			        
			    }
			    closedir($handle);
			}
		} else {
		    $error_zip = 1;
		}
	}
	
	$tmp_name = next($multi_files["tmp_name"]);
	$error = next($multi_files["error"]);
	$type = next($multi_files["type"]);
}

if ($xls_file!=""){
	
	include("read_xls.php");
}

	header("location:../../products");







}
?>