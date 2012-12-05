<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=promo");
}
else{
	$prefix="../";
	$selected_tab="promo";
	$url = "../promo";
	include($prefix."../static/connect_database.php");
	
	include($prefix."static/initial.php");
	
	date_default_timezone_set("Asia/Jakarta");
	$date = date('Y-m-d H:i:s');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Promo Manager";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/promo.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/jquery-ui.js"></script>
	<script>
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
	</script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/promo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/jquery-ui/jquery-ui.css" />
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initializationSidebarTable(),tableSidebar()">
	<?php include($prefix."static/header.php");?>
	<form id="promo_form" method="post" action="update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="button_bar_left">
			<a href="<?php echo $prefix;?>category/add_category"><input type="button" id="add_category_button" class="add_button image_button h26_button green_button button" value="Add Category"></a>
			</div>
			<div id="page_title">Product Manager</div>
			<div id="button_bar">
				
				<input type="submit" id="add_promo_button" class="add_button image_button right_ h26_button green_button button" value="Add Promo">
				<input type="button" onclick="deletePromo()" class="delete_button image_button right_ h26_button red_button button" value="Delete Promo">
				
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
			<?php if ($_GET["success"]=='1'){
				echo "Promo has been added";
			}
			else if ($_GET["success"]=='2'){
				echo "Promo has been deleted";
			}
			else if($_GET["error"]==1){
				echo "Oops! There is something wrong with your request.";
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
		
		echo '<input type="hidden" name="url" id="url" class="hidden" value="../promo" />';
		echo '<input type="hidden" name="category_id" id="category_id" class="hidden" value="'.$category_id.'" />';
		echo '<input type="hidden" name="page" id="page" class="hidden" value="'.$page.'" />';
		echo '<input type="hidden" name="query_per_page" id="query_per_page" class="hidden" value="'.$query_per_page.'" />';
		echo '<input type="hidden" name="total_page" id="total_page" class="hidden" value="'.$total_page.'" />';	
		echo '<input type="hidden" name="sort_by" id="sort_by" class="hidden" value="'.$sort_by.'" />';
		echo '<input type="hidden" name="search" id="search" class="hidden" value="'.urlencode($search).'" />';
		echo '<input type="hidden" name="action" id="action" value="add" />';
		echo '<input type="hidden" name="promo_id_delete" id="promo_id_delete" value="" />';


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
			
				<div class="fill_group table_top_fill_group">
					<div class="fill_row">
					<div class="fill_title">Promo Details</div>
					<div class="image_size"></div>
					</div>
					
					<?php
					echo		'<div class="fill_row">';
					echo			'<div class="fill_label">Promo Type</div>';
					
					echo			'<div class="form_1_auto">';
					echo 				'<select class="fill_combo_box" id="promo_id" name="promo_id" onchange="changePromo()">';
					echo 				'<option value="">--Select Promo--</option>';
					$get_promo =mysql_query("
							SELECT * from tbl_promo
							ORDER BY promo_name
					",$con);
					
					if (mysql_num_rows($get_promo)!=null){
						for ($i=1;$i<=mysql_num_rows($get_promo);$i++){
							$get_promo_array = mysql_fetch_array($get_promo);
							echo                '<option value="'.$get_promo_array["promo_id"].'">'.$get_promo_array["promo_name"].'</option>';
						}
					}
					
					echo                '</select>';
					echo			'</div>';
					echo		'</div>';
					?>
				
					<div class="fill_row hidden promo_row" id="discount_percentage_row">
						<div class="fill_label">Discount (%)</div>

						<div class="form_1_auto">
							<input type="text" class="fill_medium_text_box" id="discount_percentage" name="discount_percentage" value="" />

						</div>
					</div>
					
					<div class="fill_row hidden promo_row" id="discount_amount_row">
						<div class="fill_label">Discount (IDR)</div>

						<div class="form_1_auto">
							<input type="text" class="fill_medium_text_box" id="discount_amount" name="discount_amount" value="" />

						</div>
					</div>
					
					<style type="text/css">
					/* css for timepicker */
					.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
					.ui-timepicker-div dl { text-align: left; }
					.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
					.ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
					.ui-timepicker-div td { font-size: 90%; }
					.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
					</style>

					<script>
						$(function() {
							$( "#promo_start_datetime" ).datetimepicker({showSecond: true,
								dateFormat: 'yy-mm-dd', timeFormat:'hh:mm:ss' });
							$( "#promo_end_datetime" ).datetimepicker({ 	showSecond: true,
									dateFormat: 'yy-mm-dd', timeFormat:'hh:mm:ss'});
						});
					</script>
					<?php
					
					
					echo		'<div class="fill_row">';
					echo			'<div class="fill_label">Valid</div>';
					
					echo			'<div class="form_1_auto" id="publish_fill">';
					
					echo 			'<input type="text" class="fill_text_box fill_medium_text_box" id="promo_start_datetime" name="promo_start_datetime" value="" />';
					echo         '<div class="date_seperator">-</div>';
					echo 			'<input type="text" class="fill_text_box fill_medium_text_box" id="promo_end_datetime" name="promo_end_datetime" value="" />';
					echo			'</div>';
					echo		'</div>';
					
					?>
					
					
				</div>
			
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

				<!--
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
				-->
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
				
				<div class="right_ admin_header" id="promo_header" >Promo</div>
				
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

		

			
			<div class="right_ table_field promo_field"></div>

			
			
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

					$current_type_id = $get_list_array["type_id"];
					$get_promo_item =mysql_query("
							SELECT * from tbl_promo AS promo INNER JOIN tbl_promo_item AS item
							ON promo.promo_id = item.promo_id
							WHERE product_type_id = '$current_type_id' AND promo_end_datetime > '$date'
							ORDER BY promo_item_id DESC
					",$con);
					
					

					

					echo '<div class="right_ table_field promo_field">';
					if (mysql_num_rows($get_promo_item)!=null){
						for ($i=1;$i<=mysql_num_rows($get_promo_item);$i++){
							$get_promo_item_array = mysql_fetch_array($get_promo_item);
							echo '<div >';
							$promo_id_ = $get_promo_item_array["promo_id"];
							echo '<div class="left_">';
							if ($promo_id_=='1'){
								echo '<div>Discount '.$get_promo_item_array["promo_value"].' %</div>';
							}
							else if ($promo_id_=='2'){
								echo '<div>Discount IDR '.number_format($get_promo_item_array["promo_value"],0,",",".").'</div>';
							}
							
							echo '<div class="promo_description">Valid: '.date('j/n/y',strtotime($get_promo_item_array["promo_start_datetime"])).' - '.date('j/n/y',strtotime($get_promo_item_array["promo_end_datetime"])).'</div>';
							
							echo '</div>';
							echo '<div class="right_"><input type="button" class="right_ red_tiny_button tiny_button" id="promo_delete_'.$get_promo_item_array["promo_item_id"].'_button" value="DELETE" onclick="deleteSinglePromo('.$get_promo_item_array["promo_item_id"].')"/></div>';
							
							echo '</div>';
							
						}
					}
					
					echo '</div>';
					
					echo '<div class="right_ table_field type_price_field">';
					echo '<div class="item_table_currency">IDR</div>';
					echo '<div class="item_table_price" >'.number_format($get_list_array["type_price"],0,",",".").'</div>';
					echo '</div>';

					echo '<div class="right_ table_field type_name_field">'.$get_list_array["type_name"].'</div>';
					echo '<div class="table_field product_name_field">'.$get_list_array["product_name"].'</div>';
					echo '<div class="void_row"></div>';
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