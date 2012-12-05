<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=orders");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $prefix="../";?>
<head>	
		<?php
			$page_title = " | Size";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/size.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/size.css" />
	
	
	
	
	<?php
		include($prefix."../static/connect_database.php");
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initialization()">
	<?php include($prefix."static/header.php");?>
	
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Size</div>
			<div id="button_bar">
				<a href="<?php echo $prefix;?>size/add_size"><input type="button" id="add_size_button" class="add_button image_button h26_button green_button button" value="Add Size"></a>
				<!--<input type="submit" class="h26_button green_button button" value="Save &amp; Continue Edit">-->
			</div>
		</div>
	</div>
	<form method="post" action="update.php" enctype="multipart/form-data">
	<?php
	
	//page
	if ($_GET["page"]==""){
		$page = 1;
	}
	else{
		$page = $_GET["page"];
	}
	
	if ($_GET["query_per_page"]==""){
		$query_per_page = 20;
	}
	else{
		$query_per_page = $_GET["query_per_page"];
	}
	
	
	
	$first_record = ($page-1)*$query_per_page;
	
	$sort_by=$_GET["sort_by"];
	if ($sort_by==""){
		$sort_by="order_date DESC";
	}
	
	$search = stripslashes($_GET["search"]);
	if ($search==""){
		$search = 1;
	}	
	
	
	$get_list_full =mysql_query("
	SELECT * from tbl_size_type
	
	ORDER BY size_type_order
	",$con);
	
	$total_query = mysql_num_rows($get_list_full);
	
	$total_page = ceil($total_query / $query_per_page);
	echo '<input type="hidden" name="url" id="url" class="hidden" value="../size" />';
	echo '<input type="hidden" name="page" id="page" class="hidden" value="'.$page.'" />';
	echo '<input type="hidden" name="query_per_page" id="query_per_page" class="hidden" value="'.$query_per_page.'" />';
	echo '<input type="hidden" name="total_page" id="total_page" class="hidden" value="'.$total_page.'" />';	
	echo '<input type="hidden" name="sort_by" id="sort_by" class="hidden" value="'.$sort_by.'" />';
	echo '<input type="hidden" name="search" id="search" class="hidden" value="'.urlencode($search).'" />';
		
		
		
		$get_list =mysql_query("
			SELECT * from tbl_size AS size INNER JOIN ( SELECT * from tbl_size_type
				
				ORDER BY size_type_order
				LIMIT $first_record, $query_per_page
				)
				 AS size_type
			ON size.size_type_id = size_type.size_type_id

			ORDER BY size_type_order,size_order
	
		",$con);
		
		if (mysql_num_rows($get_list)!=null){
			$size_counter=0;
			$size_array = array();
			$size_type_id_array = array();
			$size_type_name_array = array();
			for ($row=1;$row<=mysql_num_rows($get_list);$row++){
				$get_list_array=mysql_fetch_array($get_list);
				if ($row==1){
					$tmp_size=$get_list_array["size_name"];
					array_push($size_type_id_array,$get_list_array["size_type_id"]);
					array_push($size_type_name_array,$get_list_array["size_type_name"]);
					$tmp_size_type_id = $get_list_array["size_type_id"];
				}
				
				if ($tmp_size_type_id != $get_list_array["size_type_id"]&&$row!=1){
					$size_array[$size_counter]=$tmp_size;
					
					$size_counter++;
					$tmp_size=$get_list_array["size_name"];
					array_push($size_type_id_array,$get_list_array["size_type_id"]);
					array_push($size_type_name_array,$get_list_array["size_type_name"]);
					$tmp_size_type_id = $get_list_array["size_type_id"];
				}
				else if ($row!=1){
					$tmp_size.=", ".$get_list_array["size_name"];
				}
				
				if ($row==mysql_num_rows($get_list)){
					$size_array[$size_counter]=$tmp_size;
				}
			}
		}
	?>
	<div class="admin_table">
		<div class="hidden" id="sort_by"><?php echo $_GET["sort_by"];?></div>
		<div class="admin_panel">
			<div class="check_panel" onclick="selectAllToggle()"><input type="checkbox" id="select_all"/></div>
			<div class="panel_seperator">|</div>
			
			<div class="panel_label" >Page</div>
			<input type="button" class="<?php if($page==1){
				echo 'disabled_button ';
			}?>grey_tiny_button tiny_button" id="page_arrow_left"  onclick="goToPage(<?php echo $page-1;?>)" />
			<input type="text" class="table_text_box" id="page_text_box" value="<?php echo $page;?>" onkeydown="pageInput()" onkeypress="return disableEnterKey(event)"/>
			<input type="button" class="<?php if($page==$total_page){
				echo 'disabled_button ';
			}?>grey_tiny_button tiny_button" id="page_arrow_right"  onclick="goToPage(<?php echo $page*1+1;?>)" />
			<div class="panel_label" >from <b><?php echo $total_page;?></b> pages</div>
			
			<div class="panel_seperator">|</div>
			
			<div class="panel_label" >Showing</div>
			<select name="query_per_page" id="query_per_page_input" class="panel_combo_box" onchange="changeQueryPerPage()">
				
				<option value="20" <?php if($query_per_page==20){echo 'selected="selected"';}?>>20</option>
				<option value="30" <?php if($query_per_page==30){echo 'selected="selected"';}?>>30</option>
				<option value="50" <?php if($query_per_page==50){echo 'selected="selected"';}?>>50</option>
				<option value="100" <?php if($query_per_page==100){echo 'selected="selected"';}?>>100</option>
				<option value="200" <?php if($query_per_page==200){echo 'selected="selected"';}?>>200</option>
			</select>
			<div class="panel_label" >of total <b><?php echo $total_query;?></b> records</div>
			<!--<div class="panel_menu" onclick="selectAll()">Select All</div>
			<div class="panel_seperator">|</div>
			<div class="panel_menu" onclick="unselectAll()">Unselect All</div>
			<div class="panel_seperator">|</div>
			<div class="panel_menu"><div id="selected_counter">0</div><div id="selected_counter_label">items selected</div></div>
			-->
			
			<div class="panel_menu_right" id="button_panel_menu_right"><input type="submit" class="right_ green_tiny_button tiny_button" id="go_button" value="GO" /></div>
			
			
			<div class="panel_menu_right">
				<select name="action" id="action" class="panel_combo_box" onchange="showExtension()">
					
					<option value="delete">Delete</option>
					
				</select>
			</div>
			<div class="panel_label_right">Actions</div>
		</div>
		
		
		<div class="admin_header_row">
			<div class="left_ admin_header" id="check_header" ></div>
			<div class="left_ admin_header" id="size_type_name_header" >Size Group</div>
			<div class="admin_header" id="size_header" >Sizes</div>
		</div>
		
		
			<div class="table_row" id="row_search" >
		
	
				
		
		<div class="left_ table_field check_field"></div>
		
		
		
		<div class="left_ table_field size_type_name_field "></div>
		
		
		
		<div class=" table_field size_field"></div>
		</div>
		
		
		<?php
		$size_ = current($size_array);
		$size_type_name = current($size_type_name_array);
		$row=1;
		foreach ($size_type_id_array as $size_type_id){
				
				if ($row%2==1){
					echo '<div class="odd_row table_row" id="row_'.$row.'" onclick="selectRow('.$row.')">';
				}
				else{
					echo '<div class="even_row table_row" id="row_'.$row.'" onclick="selectRow('.$row.')">';
				}
				
 				echo '<div class="left_ table_field check_field"><input type="checkbox" name="id_[]" value="'.$size_type_id.'" id="check_'.$row.'" class="" onmouseover="downCheck()" onmouseout="upCheck()" onclick="selectRowCheck('.$row.')"/></div>';

				echo '<div class="hidden left_ table_field size_type_id_field">'.$size_type_id.'</div>';
				
				
				echo '<div class="left_ table_field size_type_name_field"><a class="table_link"  href="detail.php?size_type_id='.$size_type_id.'&size_type_name='.$size_type_name.'">'.$size_type_name.'</a></div>';
				
				echo '<div class="table_field size_field">'.$size_.'</div>';
				
				echo '</div>';
				
				$row++;
				$size_ = next($size_array);
				$size_type_name = next($size_type_name_array);
			}
		
		?>
		</form>
		<!--
		<div class="odd_row table_row" id="row_1" onclick="selectRow(1)">
			<input type="checkbox" name="id[]" value="1" id="check_1" class="hidden"/>
			<div class="table_field name_field">Gary Gregorius</div>
			<div class="table_field email_field">gary@antikode.com</div>
			<div class="table_field refer_field most_right">gary@heymonstore.com</div>
		</div>
		
		<div class="even_row table_row" id="row_2" onclick="selectRow(2)">
			<input type="checkbox" name="id[]" value="2" id="check_2" class="hidden"/>
			<div class="table_field name_field">Gary Gregorius</div>
			<div class="table_field email_field">gary@antikode.com</div>
			<div class="table_field refer_field most_right">gary@heymonstore.com</div>
		</div>
		-->
	</div>
	<div class="void_row"></div>
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>