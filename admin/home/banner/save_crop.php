<?php
$prefix="../../";
include($prefix."../static/connect_database.php");
$type = $_POST["type"];


$get_data = mysql_query("
	SELECT * from tbl_home_featured
	WHERE type='$type'
",$con);



if (mysql_num_rows($get_data)!=null){
	
		$get_data_array = mysql_fetch_array($get_data);
		
		
		$filename=$prefix."../".$get_data_array["filename"];
		
	
}

$x = $_POST["x_coordinate"];
$y = $_POST["y_coordinate"];
$new_width = $_POST["width"];
$new_height = $_POST["height"];




// Content type
//header('Content-Type: image/jpeg');

// Get new dimensions
$size = getimagesize($filename);
list($width, $height) = getimagesize($filename);


switch($size["mime"]){
        case "image/jpeg":
            $img_r = imagecreatefromjpeg($filename);
			$dst_r = ImageCreateTrueColor( $new_width, $new_height );

			imagecopyresampled($dst_r,$img_r,0,0,$x,$y,
			    $width,$height,$width,$height);

			//header('Content-type: image/jpeg');
			$filename_i = str_replace('_crop','',$filename);
			$filename_i = str_replace('.jpg','_crop.jpg',$filename_i);
			$filename_i = str_replace('.jpeg','_crop.jpeg',$filename_i);

			$newfile=str_replace('_crop','',$get_data_array["filename"]);
			$newfile=str_replace('.jpg','_crop.jpg',$newfile);
			$newfile=str_replace('.jpeg','_crop.jpeg',$newfile);
			imagejpeg($dst_r,$filename_i, 100);
        break;
		case "image/jpg":
            $img_r = imagecreatefromjpeg($filename);
			$dst_r = ImageCreateTrueColor( $new_width, $new_height );

			imagecopyresampled($dst_r,$img_r,0,0,$x,$y,
			    $width,$height,$width,$height);

			//header('Content-type: image/jpeg');
			$filename_i = str_replace('_crop','',$filename);
			$filename_i = str_replace('.jpg','_crop.jpg',$filename_i);
			$filename_i = str_replace('.jpeg','_crop.jpeg',$filename_i);

			$newfile=str_replace('_crop','',$get_data_array["filename"]);
			$newfile=str_replace('.jpg','_crop.jpg',$newfile);
			$newfile=str_replace('.jpeg','_crop.jpeg',$newfile);
			imagejpeg($dst_r,$filename_i, 100);
        break;
        case "image/gif":
            $img_r = imagecreatefromgif($filename);
			$dst_r = ImageCreateTrueColor( $new_width, $new_height );

			imagecopyresampled($dst_r,$img_r,0,0,$x,$y,
			    $width,$height,$width,$height);

			//header('Content-type: image/jpeg');
			$filename_i = str_replace('_crop','',$filename);
			$filename_i = str_replace('.gif','_crop.gif',$filename_i);
			

			$newfile=str_replace('_crop','',$get_data_array["filename"]);
			$newfile=str_replace('.gif','_crop.gif',$newfile);
			
			imagegif($dst_r,$filename_i);
      break;
      case "image/png":
         
			$img_r = imagecreatefrompng($filename);
			$dst_r = ImageCreateTrueColor( $new_width, $new_height );

			imagecopyresampled($dst_r,$img_r,0,0,$x,$y,
			    $width,$height,$width,$height);

			//header('Content-type: image/jpeg');
			$filename_i = str_replace('_crop','',$filename);
			$filename_i = str_replace('.png','_crop.png',$filename_i);
			

			$newfile=str_replace('_crop','',$get_data_array["filename"]);
			$newfile=str_replace('.png','_crop.png',$newfile);
			
			imagepng($dst_r,$filename_i, 0);
      break;
    default: 
        $im=false;
    break;
    }

mysql_query("
	UPDATE tbl_home_featured
	SET filename = '$newfile'
	WHERE type = '$type'
	
",$con);
header("location:image_crop.php?type=".$type);
?>