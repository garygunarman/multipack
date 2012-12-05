<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=users");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $prefix="../";?>
<head>	
		<?php
			$page_title = " | Users";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/users.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/users.css" />
	
	
	
	
	<?php
		include($prefix."../static/connect_database.php");
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initialization()">
	<?php include($prefix."static/header.php");?>
	
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Users</div>
			<div id="button_bar">
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
		$sort_by="user_created_date DESC";
	}
	
	$search = stripslashes($_GET["search"]);
	if ($search==""){
		$search = 1;
	}	
	
	
	$get_list_full =mysql_query("
	SELECT * from tbl_user AS user INNER JOIN (SELECT count(order_.order_id) AS total_order, max(order_date) AS last_transaction_date,id from tbl_order AS order_ INNER JOIN (SELECT user.user_id AS id, order_id  from tbl_user AS user INNER JOIN tbl_user_purchase AS purchase
	ON user.user_id = purchase.user_id) AS table_1
	ON order_.order_id = table_1.order_id
	WHERE order_status != 'expired'
	GROUP BY id) AS table_2
	ON user.user_id = table_2.id
	
	WHERE ($search)
	ORDER BY $sort_by
	",$con);
	
	$total_query = mysql_num_rows($get_list_full);
	
	$total_page = ceil($total_query / $query_per_page);
	echo '<input type="hidden" name="url" id="url" class="hidden" value="../users" />';
	echo '<input type="hidden" name="page" id="page" class="hidden" value="'.$page.'" />';
	echo '<input type="hidden" name="query_per_page" id="query_per_page" class="hidden" value="'.$query_per_page.'" />';
	echo '<input type="hidden" name="total_page" id="total_page" class="hidden" value="'.$total_page.'" />';	
	echo '<input type="hidden" name="sort_by" id="sort_by" class="hidden" value="'.$sort_by.'" />';
	echo '<input type="hidden" name="search" id="search" class="hidden" value="'.urlencode($search).'" />';
		
		
		
		$get_list =mysql_query("
		SELECT * from tbl_user AS user INNER JOIN (SELECT count(order_.order_id) AS total_order, max(order_date) AS last_transaction_date,id from tbl_order AS order_ INNER JOIN (SELECT user.user_id AS id, order_id  from tbl_user AS user INNER JOIN tbl_user_purchase AS purchase
		ON user.user_id = purchase.user_id) AS table_1
		ON order_.order_id = table_1.order_id
		WHERE order_status != 'expired'
		GROUP BY id) AS table_2
		ON user.user_id = table_2.id
		
		WHERE ($search)
		ORDER BY $sort_by
		LIMIT $first_record, $query_per_page
		",$con);
		
	
	?>
	<div class="admin_table">
		<?php if($_GET["success"]!=null||$_GET["error"]!=null){?>
		<div class="full_notification <?php if ($_GET["success"]!=null){ echo "green_notification";} else if ($_GET["error"]!=null){ echo "red_notification";}?> notification">
			<?php if ($_GET["success"]=='1'){
				echo "User(s) has been deleted";
			}
			else if ($_GET["success"]=='2'){
				echo "Email has been sent";
			}
			?>
		</div>
		<?php } ?>
		
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
					<option value="send_email">Send Email</option>
				</select>
			</div>
			<div class="panel_label_right">Actions</div>
		</div>
		
		
		<div class="admin_header_row">
			<div class="left_ admin_header" id="check_header" ></div>
			<div class="left_ admin_header" id="no_header" >No.</div>
			<div class="left_ admin_header 
			<?php if ($_GET["sort_by"]=="user_created_date"||$_GET["sort_by"]=="user_created_date DESC"){
				echo " admin_header_selected";
			}
			?>
			" id="user_created_date_header" onclick="sortBy('user_created_date')">Join Date
				<?php if ($_GET["sort_by"]=="user_created_date"){?>
					<div class="header_arrow_down"></div>
				<?php }?>
				<?php if ($_GET["sort_by"]=="user_created_date DESC"){?>
					<div class="header_arrow_up"></div>
				<?php }?>
			</div>
			
			<div class="left_ admin_header 
			<?php if ($_GET["sort_by"]=="user_first_name"||$_GET["sort_by"]=="user_first_name DESC"){
				echo " admin_header_selected";
			}
			?>
			" id="user_first_name_header" onclick="sortBy('user_first_name')">First Name
				<?php if ($_GET["sort_by"]=="user_first_name"){?>
					<div class="header_arrow_down"></div>
				<?php }?>
				<?php if ($_GET["sort_by"]=="user_first_name DESC"){?>
					<div class="header_arrow_up"></div>
				<?php }?>
			</div>
			
			<div class="left_ admin_header 
			<?php if ($_GET["sort_by"]=="user_last_name"||$_GET["sort_by"]=="user_last_name DESC"){
				echo " admin_header_selected";
			}
			?>
			" id="user_last_name_header" onclick="sortBy('user_last_name')">Last Name
				<?php if ($_GET["sort_by"]=="user_last_name"){?>
					<div class="header_arrow_down"></div>
				<?php }?>
				<?php if ($_GET["sort_by"]=="user_last_name DESC"){?>
					<div class="header_arrow_up"></div>
				<?php }?>
			</div>
			
			<div class="right_ admin_header 
			<?php if ($_GET["sort_by"]=="last_transaction_date"||$_GET["sort_by"]=="last_transaction_date DESC"){
				echo " admin_header_selected";
			}
			?>
			" id="last_transaction_date_header" onclick="sortBy('last_transaction_date')">Last Order Date
				<?php if ($_GET["sort_by"]=="last_transaction_date"){?>
					<div class="header_arrow_down"></div>
				<?php }?>
				<?php if ($_GET["sort_by"]=="last_transaction_date DESC"){?>
					<div class="header_arrow_up"></div>
				<?php }?>
			</div>
			
			<div class="right_ admin_header 
			<?php if ($_GET["sort_by"]=="total_order"||$_GET["sort_by"]=="total_order DESC"){
				echo " admin_header_selected";
			}
			?>
			" id="total_order_header" onclick="sortBy('total_order')">Order
				<?php if ($_GET["sort_by"]=="total_order"){?>
					<div class="header_arrow_down"></div>
				<?php }?>
				<?php if ($_GET["sort_by"]=="total_order DESC"){?>
					<div class="header_arrow_up"></div>
				<?php }?>
			</div>
			
			
			

			
			
			
			<div class="admin_header 
			<?php if ($_GET["sort_by"]=="user_email"||$_GET["sort_by"]=="user_email DESC"){
				echo " admin_header_selected";
			}
			?>
			" id="user_email_header" onclick="sortBy('user_email')">Email
				<?php if ($_GET["sort_by"]=="user_email"){?>
					<div class="header_arrow_down"></div>
				<?php }?>
				<?php if ($_GET["sort_by"]=="user_email DESC"){?>
					<div class="header_arrow_up"></div>
				<?php }?>
			</div>
		</div>
		
		
			<div class="table_row" id="row_search" >
		
	
				
		
		<div class="left_ table_field check_field"></div>
		
		<div class="left_ table_field no_field"></div>
		
		<div class="left_ table_field user_created_date_field "></div>
		
		
		
		<div class="left_ table_field user_first_name_field "><input type="text" class="search_text_box table_text_box" id="user_first_name_search" onkeyup="searchQuery('user_first_name')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["user_first_name"];?>"/></div>
		<div class="left_ table_field user_last_name_field "><input type="text" class="search_text_box table_text_box" id="user_last_name_search" onkeyup="searchQuery('user_last_name')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["user_last_name"];?>"/></div>
		
		<div class="right_ table_field last_transaction_date_field "></div>
		<div class="right_ table_field total_order_field "><input type="text" class="search_text_box table_text_box" id="total_order_search" onkeyup="searchQuery('total_order')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["total_order"];?>"/></div>
		
		
		<div class=" table_field user_email_field"><input type="text" class="search_text_box table_text_box" id="user_email_search" onkeydown="searchQuery('user_email')" onkeypress="return disableEnterKey(event)"  value="<?php echo $_GET["user_email"];?>"/></div>
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
				
 				echo '<div class="left_ table_field check_field"><input type="checkbox" name="id_[]" value="'.$get_list_array["user_id"].'" id="check_'.$row.'" class="" onmouseover="downCheck()" onmouseout="upCheck()" onclick="selectRowCheck('.$row.')"/></div>';

				echo '<div class="left_ table_field no_field">'.$row.'</div>';
				
			

				echo '<div class="left_ table_field user_created_date_field">';
				if ($get_list_array["user_created_date"]=="0000-00-00" || $get_list_array["user_created_date"]==""){
					echo '-';
				}
				else{
					
				echo date('y/m/d H:i:s',strtotime($get_list_array["user_created_date"]));
				}
				echo '</div>';
				
				
				echo '<div class="left_ table_field user_first_name_field">'.$get_list_array["user_first_name"].'</div>';
				echo '<div class="left_ table_field user_last_name_field">'.$get_list_array["user_last_name"].'</div>';
				
				echo '<div class="right_ table_field last_transaction_date_field">';
				if ($get_list_array["last_transaction_date"]=="0000-00-00" || $get_list_array["last_transaction_date"]==""){
					echo '-';
				}
				else{
					
				echo date('y/m/d H:i:s',strtotime($get_list_array["last_transaction_date"]));
				}
				echo '</div>';
				
				echo '<div class="right_ table_field total_order_field"><a class="table_link"  href="'.$prefix.'orders?user_id='.$get_list_array["user_id"].'">'.$get_list_array["total_order"].'</a></div>';
				
				echo '<div class="table_field user_email_field"><a class="table_link"  href="detail.php?user_id='.$get_list_array["user_id"].'">'.$get_list_array["user_email"].'</a></div>';
				
				echo '</div>';
			}
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