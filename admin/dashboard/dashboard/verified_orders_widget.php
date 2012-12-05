<?php
//page
if ($_GET["page"]==""){
	$page = 1;
}
else{
	$page = $_GET["page"];
}

if ($_GET["query_per_page"]==""){
	$query_per_page = 5;
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
SELECT * from tbl_order
WHERE order_status='verified'
ORDER BY $sort_by	
",$con);

$total_query = mysql_num_rows($get_list_full);

$total_page = ceil($total_query / $query_per_page);
echo '<input type="hidden" name="url" id="url" class="hidden" value="../dashboard" />';
echo '<input type="hidden" name="page" id="page" class="hidden" value="'.$page.'" />';
echo '<input type="hidden" name="query_per_page" id="query_per_page" class="hidden" value="'.$query_per_page.'" />';
echo '<input type="hidden" name="total_page" id="total_page" class="hidden" value="'.$total_page.'" />';	
echo '<input type="hidden" name="sort_by" id="sort_by" class="hidden" value="'.$sort_by.'" />';
echo '<input type="hidden" name="search" id="search" class="hidden" value="'.urlencode($search).'" />';
	
	
	
	$get_list =mysql_query("
	SELECT * from tbl_order
	WHERE order_status='verified'
	ORDER BY $sort_by
	LIMIT $first_record, $query_per_page
	",$con);
	

?>
<div class="admin_table">
	<div class="hidden" id="sort_by"><?php echo $_GET["sort_by"];?></div>
	<div class="admin_panel">
		<!--<div class="check_panel" onclick="selectAllToggle()"><input type="checkbox" id="select_all"/></div>
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
		<div class="panel_menu" onclick="selectAll()">Select All</div>
		<div class="panel_seperator">|</div>
		<div class="panel_menu" onclick="unselectAll()">Unselect All</div>
		<div class="panel_seperator">|</div>
		<div class="panel_menu"><div id="selected_counter">0</div><div id="selected_counter_label">items selected</div></div>
		-->
		
		<div class="panel_menu_right" id="button_panel_menu_right"><input type="submit" class="right_ green_tiny_button tiny_button" id="go_button" value="GO" /></div>
		<div class="panel_menu_right status_extension">
			<select name="status" id="status" class="panel_combo_box">
				<option value="open">Open</option>
				<option value="confirmed">Confirmed</option>
				<option value="verified">Verified</option>
				<option value="delivered">Delivered</option>
				<option value="expired">Expired</option>
			</select>
		</div>
		<div class="panel_label_right status_extension">&nbsp;&nbsp;to</div>
		
		<div class="panel_menu_right">
			<select name="action" id="action" class="panel_combo_box" onchange="showExtension()">
				<option value="change_status">Change status</option>
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
		<?php if ($_GET["sort_by"]=="order_number"||$_GET["sort_by"]=="order_number DESC"){
			echo " admin_header_selected";
		}
		?>
		" id="order_no_header" >Order No.
			<?php if ($_GET["sort_by"]=="submit_date"){?>
				<div class="header_arrow_down"></div>
			<?php }?>
			<?php if ($_GET["sort_by"]=="submit_date DESC"){?>
				<div class="header_arrow_up"></div>
			<?php }?>
		</div>
		
		<div class="left_ admin_header 
		<?php if ($_GET["sort_by"]=="order_date"||$_GET["sort_by"]=="order_date DESC"){
			echo " admin_header_selected";
		}
		?>
		" id="date_header" >Date
			<?php if ($_GET["sort_by"]=="order_date"){?>
				<div class="header_arrow_down"></div>
			<?php }?>
			<?php if ($_GET["sort_by"]=="order_date DESC"){?>
				<div class="header_arrow_up"></div>
			<?php }?>
		</div>
		
		<div class="left_ admin_header 
		<?php if ($_GET["sort_by"]=="order_confirm_bank"||$_GET["sort_by"]=="order_confirm_bank DESC"){
			echo " admin_header_selected";
		}
		?>
		" id="bank_header" >Bank
			<?php if ($_GET["sort_by"]=="order_confirm_bank"){?>
				<div class="header_arrow_down"></div>
			<?php }?>
			<?php if ($_GET["sort_by"]=="order_confirm_bank DESC"){?>
				<div class="header_arrow_up"></div>
			<?php }?>
		</div>
		
		
		
		<div class="right_ admin_header" id="shipping_no_header" >Shipping No.</div>
		
		<div class="right_ admin_header" id="delivered_header" ></div>
		<div class="right_ admin_header" id="verified_header" ></div>
		<div class="right_ admin_header" id="confirmed_header" ></div>
		<div class="right_ admin_header" id="open_header" ></div>
		
		
		
		<div class="right_ admin_header 
		<?php if ($_GET["sort_by"]=="order_confirm_amount"||$_GET["sort_by"]=="order_confirm_amount DESC"){
			echo " admin_header_selected";
		}
		?>
		" id="amount_header" >Amount
			<?php if ($_GET["sort_by"]=="order_confirm_amount"){?>
				<div class="header_arrow_down"></div>
			<?php }?>
			<?php if ($_GET["sort_by"]=="order_confirm_amount DESC"){?>
				<div class="header_arrow_up"></div>
			<?php }?>
		</div>
		
		
		
		<div class="admin_header 
		<?php if ($_GET["sort_by"]=="order_confirm_name"||$_GET["sort_by"]=="order_confirm_name DESC"){
			echo " admin_header_selected";
		}
		?>
		" id="name_header" >Name
			<?php if ($_GET["sort_by"]=="order_confirm_name"){?>
				<div class="header_arrow_down"></div>
			<?php }?>
			<?php if ($_GET["sort_by"]=="order_confirm_name DESC"){?>
				<div class="header_arrow_up"></div>
			<?php }?>
		</div>
	</div>
	
	
		<div class="table_row" id="row_search" >
	

			
	
	<div class="left_ table_field check_field"></div>
	
	<div class="left_ table_field no_field"></div>
	
	<div class="left_ table_field order_no_field "><input type="text" class="search_text_box table_text_box" id="order_number_search" onkeyup="searchQuery('order_number')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["order_number"];?>"/></div>
	
	<div class="left_ table_field date_field"><!--<input type="text" class="search_text_box table_text_box" id="date_start_search" onkeydown="searchQuery('submit_date')" onkeypress="return disableEnterKey(event)"  value="<?php echo $_GET["date_start"];?>"/><input type="text" class="search_text_box table_text_box" id="date_end_search" onkeydown="searchQuery('submit_date')" onkeypress="return disableEnterKey(event)"  value="<?php echo $_GET["date_end"];?>"/>--></div>
	
	<div class="left_ table_field bank_field "><input type="text" class="search_text_box table_text_box" id="order_confirm_bank_search" onkeyup="searchQuery('order_confirm_bank')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["order_confirm_bank"];?>"/></div>
	
	<div class="right_ table_field shipping_no_field"></div>
	<div class="right_ table_field delivered_field"><input type="radio" id="status_search" name="status_search" onclick="searchStatus('delivered')"
		<?php
			if ($_GET["order_status"]=="delivered"){
				echo "checked=1";
			}
		?>
		/></div>
	<div class="right_ table_field verified_field"><input type="radio" id="status_search" name="status_search" onclick="searchStatus('verified')"
		<?php
			if ($_GET["order_status"]=="verified"){
				echo "checked=1";
			}
		?>
		/></div>
	<div class="right_ table_field confirmed_field"><input type="radio" id="status_search" name="status_search" onclick="searchStatus('confirmed')"
		<?php
			if ($_GET["order_status"]=="confirmed"){
				echo "checked=1";
			}
		?>
		/></div>		
	<div class="right_ table_field open_field"><input type="radio" id="status_search" name="status_search" onclick="searchStatus('open')"
		<?php
			if ($_GET["order_status"]=="open"){
				echo "checked=1";
			}
		?>
		/></div>	
	
	<div class="right_ table_field amount_field"><input type="text" class="search_text_box table_text_box" id="order_confirm_amount_search" onkeyup="searchQuery('order_confirm_amount')" onkeypress="return disableEnterKey(event)" value="<?php echo $_GET["order_confirm_amount"];?>"/></div>
	
	<div class=" table_field name_field"><input type="text" class="search_text_box table_text_box" id="order_confirm_name_search" onkeydown="searchQuery('order_confirm_name')" onkeypress="return disableEnterKey(event)"  value="<?php echo $_GET["order_confirm_name"];?>"/></div>
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
			
			echo '<div class="left_ table_field check_field"><input type="checkbox" name="id_[]" value="'.$get_list_array["order_id"].'" id="check_'.$row.'" class="" onmouseover="downCheck()" onmouseout="upCheck()" onclick="selectRowCheck('.$row.')"/></div>';

			echo '<div class="left_ table_field no_field">'.$row.'</div>';
			
			echo '<div class="left_ table_field order_no_field"><a class="table_link"  href="../orders/detail.php?order_number='.$get_list_array["order_number"].'">'.$get_list_array["order_number"].'</a></div>';

			echo '<div class="left_ table_field date_field">';
			if ($get_list_array["date"]=="0000-00-00" || $get_list_array["order_date"]==""){
				echo '-';
			}
			else{
				
			echo date('y/m/d H:i:s',strtotime($get_list_array["order_date"]));
			}
			echo '</div>';
			
			echo '<div class="left_ table_field bank_field">'.$get_list_array["order_confirm_bank"].'</div>';
			
			echo '<div class="right_ table_field shipping_no_field"><input type="text" class="search_text_box table_text_box" id="shipping_number_'.$row.'" name="shipping_number[]" value="'.$get_list_array["order_shipping_number"].'" /></div>';
			
			echo '<div class="right_ table_field delivered_field"><input type="radio" id="status_search_'.$row.'" name="status_search_'.$row.'" ';
				
					if ($get_list_array["order_status"]=="delivered"){
						echo "checked=1";
					}
				
			echo'disabled /></div>';
				
			echo '<div class="right_ table_field verified_field"><input type="radio" id="status_search_'.$row.'" name="status_search_'.$row.'" ';
				
					if ($get_list_array["order_status"]=="verified"){
						echo "checked=1";
					}
				
			echo'disabled/></div>';
				
			echo '<div class="right_ table_field confirmed_field"><input type="radio" id="status_search_'.$row.'" name="status_search_'.$row.'" ';
				
					if ($get_list_array["order_status"]=="confirmed"){
						echo "checked=1";
					}
				
			echo'disabled/></div>';
				
			echo '<div class="right_ table_field open_field"><input type="radio" id="status_search_'.$row.'" name="status_search_'.$row.'" ';
				
					if ($get_list_array["order_status"]=="open"){
						echo "checked=1";
					}
				
			echo'disabled/></div>';
			
			
			
			
			echo '<div class="right_ table_field amount_field">';
			if ($get_list_array["order_confirm_amount"]!=""&&$get_list_array["order_confirm_amount"]!=0){
			if ($get_list_array["order_confirm_amount"]<$get_list_array["order_total_amount"]){
				
				echo '<font color="#c95757">';
			}
			echo '<div class="item_table_currency">IDR</div>';
			echo '<div class="item_table_price" >'.number_format($get_list_array["order_confirm_amount"],0,",",".").'</div>';
			
			if ($get_list_array["order_confirm_amount"]<$get_list_array["order_total_amount"]){
				echo '</font>';
			}
			}
			echo '</div>
			
			
			<div class="table_field name_field">'.$get_list_array["order_confirm_name"].'</div>';
			
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