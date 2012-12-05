<?php
	include("../static/connect_database.php");

	
	
	include("../static/get_order_details.php");
	
	$to = $_GET["to"];
	$subject = "Confirmed purchased order : ".$order_number;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: ".$info["email"] . "\r\n" .
	 "Reply-To: ".$info["email"] . "\r\n";
	
	
	$url = $info["url"];


	
	$message = 'The order number ';
	
			
			$message .= '<b><font color="#9d0000">'.$order_number.'</b></font> has confirmed the payment.
			<br/>
			<br/>
			
			
			';
			
			$message .= 'The total amount of <b><font color="#9d0000">IDR '.number_format($amount,0,',','.').'</b></font> from <b>'.$bank_account_name.'</b> is paid to:<br/>';
			include("display_payment_email.php");
			
			
			
			$message.= '
			---
			
			<br/>
			<br/>
			<font color="#9d0000"><b>ORDER DETAILS</b></font>
			<br/>
			<b>PURCHASED ITEM(S)</b>
			<br/>
			
			';


			for ($row_counter=0;$row_counter<$total_item;$row_counter++){
				$row_number = $row_counter*1+1;

				$message .= $row_number.'.&nbsp;<b>'.$item_name[$row_counter].'</b>&nbsp;&nbsp;-&nbsp;<i>'.$item_code[$row_counter].'</i>&nbsp;<br/>';
				$message .= '&nbsp;&nbsp;&nbsp;&nbsp;Size:&nbsp;<b>'.$item_size[$row_counter].'</b>&nbsp;&nbsp;&nbsp;Quantity:&nbsp;<b>'.$item_quantity[$row_counter].'</b><br/><br/>';
			}

			$message .= 'Total amount to be paid:&nbsp;<font color="#9d0000"><b>IDR '.$order_total_amount.'</b></font><br/><br/><br/>';

			$message .= '<b>SHIPPING DETAILS</b>
			<br/>
			
			';
			$message .= '<b>Name:</b>&nbsp;'.$order_shipping_first_name.'&nbsp;'.$order_shipping_last_name.'</br>';
			$message .= '<b>Phone:</b>&nbsp;'.$order_shipping_phone.'</br>';
			$message .= '<b>Address:</b>&nbsp;'.$order_shipping_address.'</br>';
			$message .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$order_shipping_city.',&nbsp;'.$order_shipping_province.'</br>';
			$message .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$order_shipping_postal_code.'&nbsp;'.$order_shipping_country.'</br>';
		
			
		
		
		$message .= '
			<br/>
			---
			<br/>
			<br/>
		You could check for the ORDER DETAILS by visiting '.$url.'/my_order/details?order_number='.$order_number.'
		<br/>
		<br/>
		Or manage the orders by visiting '.$url.'/admin/orders
';
	
		
		
		
	$success =mail($info["order_email"],$subject,$message,$headers);
	
?>