<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=products");
}
else{
	$prefix="../";
	$selected_tab="product";
	$url = "../products";
	include($prefix."../static/connect_database.php");
	
	include($prefix."static/initial.php");
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Product Manager";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/products.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	
	<script>
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
	</script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/products.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initializationSidebarTable(),tableSidebar()">
	<?php include($prefix."static/header.php");?>
	<form id="category_form" method="post" action="update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="button_bar_left">
			<a href="<?php echo $prefix;?>category/add_category"><input type="button" id="add_category_button" class="add_button image_button h26_button green_button button" value="Add Category"></a>
			</div>
			<div id="page_title">Product Manager</div>
			<div id="button_bar">
				<a href="<?php echo $prefix;?>products/add_product"><input type="button" id="add_product_button" class="add_button image_button h26_button green_button button" value="Add Product"></a>
				
				<!--<input type="button" id="submit_button" onclick="saveAll()" class="save_button image_button right_ h26_button green_button button" value="Save Changes">
				<input type="button" onclick="saveOrder()" class="save_button image_button right_ h26_button green_button button" value="Save Order">
				<input type="button" onclick="deleteSlideshow()" class="delete_button image_button right_ h26_button red_button button" value="Delete">-->
				
			</div>
		</div>
	</div>
	<div class="main_body" id="adjust">
	<?php include($prefix."static/sidebar.php");?>
	
	<div class="form_2_auto" >
	
	<?php if($_GET["success"]!=null||$_GET["error"]!=null){?>
	<div class="<?php if ($_GET["success"]!=null){ echo "green_notification";} else if ($_GET["error"]!=null){ echo "red_notification";}?> notification">
		<?php if ($_GET["success"]==true){
			echo "Changes has been saved";
		}?>
	</div>
	<?php } ?>
		
	<?php include($prefix."static/tabs.php");?>
		
	<div class="fill_container_sidebar" >
		
		
		<!---->
		
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
			$sort_by="product_date_added DESC";
		}

		$search = stripslashes($_GET["search"]);
		if ($search==""){
			$search = 1;
		}	


		$get_list_full =mysql_query("
		SELECT DISTINCT type_id, product_id, type_code, product_name, type_name, type_price, type_visibility from tbl_category_relation AS cat_rel INNER JOIN (SELECT * from tbl_product_type AS p_type INNER JOIN tbl_product AS product
				ON p_type.product_id = product.id
				WHERE $search AND type_delete!='1'
				ORDER BY $sort_by) AS table_1
				ON cat_rel.category_child = table_1.product_category
				WHERE category_parent = '$category_id' OR product_category = '$category_id'
		
		
		",$con);

		$total_query = mysql_num_rows($get_list_full);

		$total_page = ceil($total_query / $query_per_page);
		
		echo '<input type="hidden" name="url" id="url" class="hidden" value="../products" />';
		echo '<input type="hidden" name="category_id" id="category_id" class="hidden" value="'.$category_id.'" />';
		echo '<input type="hidden" name="page" id="page" class="hidden" value="'.$page.'" />';
		echo '<input type="hidden" name="query_per_page" id="query_per_page" class="hidden" value="'.$query_per_page.'" />';
		echo '<input type="hidden" name="total_page" id="total_page" class="hidden" value="'.$total_page.'" />';	
		echo '<input type="hidden" name="sort_by" id="sort_by" class="hidden" value="'.$sort_by.'" />';
		echo '<input type="hidden" name="search" id="search" class="hidden" value="'.urlencode($search).'" />';



			$get_list =mysql_query("
			SELECT DISTINCT type_id, product_id, type_code, product_name, type_name, type_price, type_visibility from tbl_category_relation AS cat_rel INNER JOIN (SELECT * from tbl_product_type AS p_type INNER JOIN tbl_product AS product
					ON p_type.product_id = product.id
					WHERE $search AND type_delete!='1'
					ORDER BY $sort_by) AS table_1
					ON cat_rel.category_child = table_1.product_category
					WHERE category_parent = '$category_id' OR product_category = '$category_id'
			LIMIT $first_record, $query_per_page
			",$con);


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
				<div class="panel_label" >of <b><?php echo $total_page;?></b> pages</div>

				<div class="panel_seperator">|</div>

				<div class="panel_label" >Show</div>
				<select name="query_per_page" id="query_per_page_input" class="panel_combo_box" onchange="changeQueryPerPage()">

					<option value="20" <?php if($query_per_page==20){echo 'selected="selected"';}?>>20</option>
					<option value="30" <?php if($query_per_page==30){echo 'selected="selected"';}?>>30</option>
					<option value="50" <?php if($query_per_page==50){echo 'selected="selected"';}?>>50</option>
					<option value="100" <?php if($query_per_page==100){echo 'selected="selected"';}?>>100</option>
					<option value="200" <?php if($query_per_page==200){echo 'selected="selected"';}?>>200</option>
				</select>
				<div class="panel_label" >of <b><?php echo $total_query;?></b> records</div>
				<!--<div class="panel_menu" onclick="selectAll()">Select All</div>
				<div class="panel_seperator">|</div>
				<div class="panel_menu" onclick="unselectAll()">Unselect All</div>
				<div class="panel_seperator">|</div>
				<div class="panel_menu"><div id="selected_counter">0</div><div id="selected_counter_label">items selected</div></div>
				-->

				<div class="panel_menu_right" id="button_panel_menu_right"><input type="submit" class="right_ green_tiny_button tiny_button" id="go_button" value="GO" /></div>
				<div class="panel_menu_right visibility_extension">
					<select name="visibility" id="visibility" class="panel_combo_box">
						<option value="1">Yes</option>
						<option value="0">No</option>

					</select>
				</div>
				<div class="panel_label_right visibility_extension">&nbsp;&nbsp;to</div>

				<div class="panel_menu_right">
					<select name="action" id="action" class="panel_combo_box" onchange="showExtension()">
						<option value="change_visibility">Set visibility</option>
						<option value="delete">Delete</option>
						
					</select>
				</div>
				<div class="panel_label_right">Actions</div>
			</div>


			<div class="admin_header_row">
				<div class="left_ admin_header" id="check_header" ></div>
				
				<div class="left_ admin_header admin_header_sort
				<?php if ($_GET["sort_by"]=="type_code"||$_GET["sort_by"]=="type_code DESC"){
					echo " admin_header_selected";
				}
				?>
				" id="type_code_header" onclick="sortBy('type_code')">SKU
					<?php if ($_GET["sort_by"]=="type_code"){?>
						<div class="header_arrow_down"></div>
					<?php }?>
					<?php if ($_GET["sort_by"]=="type_code DESC"){?>
						<div class="header_arrow_up"></div>
					<?php }?>
				</div>
				
				<div class="right_ admin_header admin_header_sort
				<?php if ($_GET["sort_by"]=="type_visibility"||$_GET["sort_by"]=="type_visibility DESC"){
					echo " admin_header_selected";
				}
				?>
				" id="type_visibility_header" onclick="sortBy('type_visibility')">Visibility
					<?php if ($_GET["sort_by"]=="type_visibility"){?>
						<div class="header_arrow_down"></div>
					<?php }?>
					<?php if ($_GET["sort_by"]=="type_visibility DESC"){?>
						<div class="header_arrow_up"></div>
					<?php }?>
				</div>
				
				<div class="right_ admin_header admin_header_sort
				<?php if ($_GET["sort_by"]=="type_price"||$_GET["sort_by"]=="type_price DESC"){
					echo " admin_header_selected";
				}
				?>
				" id="type_price_header" onclick="sortBy('type_price')">Price
					<?php if ($_GET["sort_by"]=="type_price"){?>
						<div class="header_arrow_down"></div>
					<?php }?>
					<?php if ($_GET["sort_by"]=="type_price DESC"){?>
						<div class="header_arrow_up"></div>
					<?php }?>
				</div>
				
				<div class="right_ admin_header admin_header_sort
				<?php if ($_GET["sort_by"]=="type_name"||$_GET["sort_by"]=="type_name DESC"){
					echo " admin_header_selected";
				}
				?>
				" id="type_name_header" onclick="sortBy('type_name')">Color
					<?php if ($_GET["sort_by"]=="type_name"){?>
						<div class="header_arrow_down"></div>
					<?php }?>
					<?php if ($_GET["sort_by"]=="type_name DESC"){?>
						<div class="header_arrow_up"></div>
					<?php }?>
				</div>
				
				

				



				<div class="admin_header admin_header_sort
				<?php if ($_GET["sort_by"]=="product_name"||$_GET["sort_by"]=="product_name DESC"){
					echo " admin_header_selected";
				}
				?>
				" id="product_name_header" onclick="sortBy('product_name')">Name
					<?php if ($_GET["sort_by"]=="product_name"){?>
						<div class="header_arrow_down"></div>
					<?php }?>
					<?php if ($_GET["sort_by"]=="product_name DESC"){?>
						<div class="header_arrow_up"></div>
					<?php }?>
				</div>
			</div>


				<div class="table_row" id="row_search" >




			<div class="left_ table_field check_field"><a href="../products?category_id=<?php echo $category_id;?>"><input type="submit" class="right_ black_tiny_button tiny_button reset_button" id="reset_button" value="" /></a></div>

			

			<div class="left_ table_field type_code_field "><input type="text" class="search_text_box table_text_box" id="type_code_search" onkeyup="searchQuery('type_code')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["type_code"];?>"/></div>

		

			
			

			<div class="right_ table_field type_visibility_field"><input type="text" class="search_text_box table_text_box" id="type_visibility_search" onkeyup="searchQuery('type_visibility')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["type_visibility"];?>"/></div>
			
			<div class="right_ table_field type_price_field"><input type="text" class="search_text_box table_text_box" id="type_price_search" onkeyup="searchQuery('type_price')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["type_price"];?>"/></div>
			
			<div class="right_ table_field type_name_field"><input type="text" class="search_text_box table_text_box" id="type_name_search" onkeyup="searchQuery('type_name')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["type_name"];?>"/></div>

			<div class=" table_field product_name_field"><input type="text" class="search_text_box table_text_box" id="product_name_search" onkeydown="searchQuery('product_name')" onkeypress="return disableEnterKey(event)"  value="<?php echo $_GET["product_name"];?>"/></div>
			</div>


			<?php
			if (mysql_num_rows($get_list)!=null){
				for ($row=1;$row<=mysql_num_rows($get_list);$row++){
					$get_list_array=mysql_fetch_array($get_list);

					if ($row%2==1){
						echo '<div class="odd_row table_row" id="row_'.$row.'" onclick="selectRow('.$row.')">';
					}
					else{
						echo '<div class="even_row table_row" id="row_'.$row.'" onclick="selectRow('.$row.')">';
					}

	 				echo '<div class="left_ table_field check_field"><input type="checkbox" name="id_[]" value="'.$get_list_array["type_id"].'" id="check_'.$row.'" class="" onmouseover="downCheck()" onmouseout="upCheck()" onclick="selectRowCheck('.$row.')"/></div>';

					echo '<div class="left_ table_field type_code_field">'.$get_list_array["type_code"].'</div>';

					

					echo '<input type="hidden" name="product_id_[]" value="'.$get_list_array["product_id"].'" />';

				




					echo '<div class="right_ table_field type_visibility_field">';
					if ($get_list_array["type_visibility"]==0){
						echo 'No';
					}
					else{
						echo 'Yes';
					}
					echo '</div>';
					
					echo '<div class="right_ table_field type_price_field">';
					echo '<div class="item_table_currency">IDR</div>';
					echo '<div class="item_table_price" >'.number_format($get_list_array["type_price"],0,",",".").'</div>';
					echo '</div>';

					echo '<div class="right_ table_field type_name_field">'.$get_list_array["type_name"].'</div>';
					echo '<div class="table_field product_name_field"><a class="table_link"  href="details.php?product_id='.$get_list_array["product_id"].'">'.$get_list_array["product_name"].'</a></div>';

					echo '</div>';
				}
			}
			?>
			
		<!---->
			
			
			<div class="void_row"></div>
		</div>
		
		<?php
		for ($counter=1;$counter<=5;$counter++){
			echo '<input type="hidden" id="order_'.$counter.'" name="order_'.$counter.'" />';
		}
		?>
	</div>
	</div>
	<div class="void_row"></div>
	</div>
	</form>
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>