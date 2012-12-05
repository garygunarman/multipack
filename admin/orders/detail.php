<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../../login.php?redirect=orders");
}
else{
	$prefix="../";
	$order_number=$_GET["order_number"];
	include($prefix."../static/connect_database.php");
	include($prefix."static/get_order_details.php");
	include($prefix."static/get_account_details.php");
	include("../../static/get_info.php");
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Order Detail | ".$order_number;
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/order_detail.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/order_detail.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="">
	<?php include($prefix."static/header.php");?>
	<form method="post" id="brand_form" action="update_detail.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title"><a href="../orders"><input type="button" class="back_button left_ black_tiny_button tiny_button" value="" /></a><?php echo $order_number;?></div>
			<div id="button_bar">
				<!--
				<?php
				if ($status!="approved"){
					
				
				?>
				<input type="button" onclick="changeStatus()" class="save_button image_button right_ h26_button green_button button" value="Approve">
				<?php
				}
				else{
				?>	
				<input type="button" onclick="changeStatus()" class="delete_dark_button image_button right_ h26_button grey_button button" value="Disapprove">
				<?php
				}
				?>
				-->
				<input type="hidden" name="order_number" value="<?php echo $order_number;?>" />
				<input type="hidden" name="status" value="<?php echo $status;?>" />
				<input type="hidden" name="action" id="action" value="" />
				<!--<input type="button" onclick="deleteBrand()" class="delete_button image_button right_ h26_button red_button button" value="Delete Brand">-->
			</div>
		</div>
	</div>
	
	<div class="main_body">
	<div class="fill_container">
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">STATUS DETAILS</div>
			</div>
			<div class="fill_row">
			<div class="fill_label"><b>Order Number</b></div>
			<div class="form_1_auto">
				<div class="fill_text"><i><?php echo $order_number;?></i></div>
			</div>
			</div>
			
			
			
			
			<div class="fill_row">
			<div class="fill_label"><b>Status</b></div>
			<div class="form_1_auto">
				<div class="fill_text">
					
					<?php 
					if ($order_status=="open"){
						echo '<font color="#c95757"><b>WAITING FOR PAYMENT</b></font><br/>';
						$status_description = 'Please pay <b>IDR '.$order_total_amount.'</b> to:<br/>';
						$counter=0;
						
						foreach ($account_bank_array as $account_bank){
							$account_number = $account_number_array[$counter];
							$account_name = $account_name_array[$counter];
							//echo $account_number;
							$counter++;
							
							if ($order_payment_method == $account_bank){
								$status_description .= $account_bank.' '.$account_number.' - '.$account_name.'<br/>';
							}
						}
						
						$status_description .= 'If you have made the payment, please confirm by clicking the <b><u>CONFIRM PAYMENT</u></b> button on the top right of the '.$info["url"].' website.';
					}
					else if ($order_status=="confirmed"){
						echo '<font color="#ffb540"><b>CONFIRMED</b></font><br/>';
						$status_description .= 'Thanks! We have received your confirmation. We will verify the payment in 1 x 24 hour. Once it\'s verified, we process and ship your order to you!';
					}
					else if ($order_status=="verified"){
						echo '<font color="#5cbe30"><b>PROCESSED</b></font><br/>';
						$status_description .= 'Your payment has been verified and your order is now being processed. Once it\'s shipped, your order status will be DELIVERED and we will inform you the shipping courier tracking order.';
					}
					else if ($order_status=="delivered" && $order_shipping_number=="none"){
						echo '<font color="#5cbe30"><b>DELIVERED</b></font><br/>';
						$status_description = '
						Congratulations! Your order has been delivered! Please wait as you will receive your order in the next few days.';
					}
					else if ($order_status=="delivered" && $order_shipping_number!="none"){
						echo '<font color="#5cbe30"><b>DELIVERED</b></font><br/>';
						$status_description = 'Congratulations! Your order has been delivered! Please wait as you will receive your order in the next few days. <br/>';

						$status_description .= 'And if you want to track where your order is, please go to <b><u>www.jne.com</b></u> and input your shipping number: <b>'. $order_shipping_number.'</b><br/>'; 

						$status_description .= 'Thank you for shopping with us!';
					}
					else {
						echo '<font color="#c95757"><b>EXPIRED</b></font><br/>';;
					}
					?>
				</div>
			</div>
			</div>
			
			<div class="fill_row">
				<?php echo $status_description;?>
			</div>
			
			
			<div class="void_row"></div>
		</div>
		
		
	</div>
	
	<div class="fill_container">
	<div class="admin_table">
		
		
		
		<div class="admin_header_row">
			
			
			
			
			<div class="left_ admin_header item_field" id="item_header" >Item</div>
			
			<div class="right_ admin_header price_field" id="price_header" >Price</div>
			<div class="right_ admin_header quantity_field" id="quantity_header" >Quantity</div>
			
			<div class="admin_header details_field" id="details_header" >Details</div>
			
			
			
		</div>
		
		
		
		
		
		<?php
		
			for ($row=0;$row<$total_item;$row++){
				
				
				if ($row%2==1){
					echo '<div class="odd_row table_row" id="row_'.$row.'" >';
				}
				else{
					echo '<div class="even_row table_row" id="row_'.$row.'" >';
				}
				
 				

				echo '<div class="left_ table_field item_field"><img src="../'.$item_image_source[$row].'" alt="" class="item_image"/></div>';
				
				
				
				
				
				
				echo '<div class="right_ table_field price_field">';
				echo '<div class="item_table_currency">IDR</div>';
				echo '<div class="item_table_price" >'.number_format($item_price_raw[$row]*$item_quantity[$row],0,",",".").'</div>';
				echo '</div>';
				
				echo '<div class="right_ table_field quantity_field item_table_quantity">'.$item_quantity[$row].'</div>';
				
				
				echo '<div class="table_field details_field">';
				echo '<div class="item_table_name" >'.$item_name[$row].'</div>';
				echo '<div class="item_table_code" >'.$item_code[$row].'</div>';
				echo '<div class="item_table_size" >Size: '.$item_size[$row].'</div>';
				echo '</div>';
				
				echo '</div>';
			}
		
		?>
		
	</div>
	</div>
	
	<div class="fill_container">
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">PERSONAL DETAILS</div>
			</div>
			<div class="fill_row">
			<div class="fill_label">First Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_billing_first_name;?></div>
			</div>
			</div>
			
			
			<div class="fill_row">
			<div class="fill_label">Last Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_billing_last_name;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Email</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_billing_email;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Mobile Phone</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_billing_phone;?></div>
			</div>
			</div>
			
			
			<div class="void_row"></div>
		</div>
		
		<div class="fill_group">
			<div class="fill_row"></div>
			<div class="fill_row">
			<div class="fill_title">SHIPPING DETAILS</div>
			</div>
			<div class="fill_row">
			<div class="fill_label">First Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_first_name;?></div>
			</div>
			</div>
			
			
			<div class="fill_row">
			<div class="fill_label">Last Name</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_last_name;?></div>
			</div>
			</div>
		
			
			<div class="fill_row">
			<div class="fill_label">Phone</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_phone;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Address</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_address;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Country</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_country;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Province</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_province;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">City</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_city;?></div>
			</div>
			</div>
			
			<div class="fill_row">
			<div class="fill_label">Postal Code</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_shipping_postal_code;?></div>
			</div>
			</div>
			<div class="void_row"></div>
		</div>
	</div>
	
	<div class="fill_container">
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">PAYMENT METHOD</div>
			</div>
			<div class="fill_row">
			<div class="fill_label">Payment Method</div>
			<div class="form_1_auto">
				<div class="fill_text"><?php echo $order_payment_method;?></div>
			</div>
			</div>
			
			
			
			
			<div class="void_row"></div>
		</div>
		
		
	</div>
	
	<div class="fill_container">
		<div class="fill_group">
			<div class="fill_row">
			<div class="fill_title">ORDER SUMMARY</div>
			</div>
			<div class="fill_row">
			<div class="right_ price_text"><?php echo $order_purchase_amount;?></div>
			<div class="right_ currency_text">IDR</div>
			<div class="right_ subtotal_label"><b>Subtotal</b></div>
			
			</div>
			
			<div class="fill_row">
			<div class="right_ price_text"><?php echo $order_shipping_amount;?></div>
			<div class="right_ currency_text">IDR</div>
			<div class="right_ subtotal_label"><b>Shipping</b></div>
			
			</div>
			
			<hr size="1" noshade/>
			
			<div class="fill_row">
			<div class="right_ price_text"><b><?php echo $order_total_amount;?></b></div>
			<div class="right_ currency_text"><b>IDR</b></div>
			<div class="right_ subtotal_label"><b>Total</b></div>
			
			</div>
			<div class="void_row"></div>
		</div>
		
		
	</div>
	
	</div>
	</form>
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>