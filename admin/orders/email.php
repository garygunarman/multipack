<?php


	$order_detail_email = mysql_query("
		SELECT order_number from tbl_order
		WHERE order_id = '$id'
	",$con);
	
	if (mysql_num_rows($order_detail_email)!=null){
		$order_detail_email_array = mysql_fetch_array($order_detail_email);
		
	}
	
	
	
	$order_number= $order_detail_email_array["order_number"];
	
	include("../../static/get_order_details.php");
	
	$to = $order_billing_email;
	$subject = "Your Order Has Been Delivered";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: ".$info["email"] . "\r\n" .
	 "Reply-To: ".$info["email"] . "\r\n";
	
	
	$url_ = $info["url"];
	
	$message .= '
		Dear '.$order_billing_first_name.',
		<br/>
		<br/>
		Congratulations! Your order <b>'.$order_number.'</b> has been delivered! Please wait as you will receive your order in the next few days. 
		<br/>
		<br/>
		To track your order, you can go to www.jne.com and input your shipping number: <b>'.$shipping_number.'</b>. <i>(Please note that they may need some time to input your order to their tracking system)</i>.
		<br/>
		<br/>
		<br/>
		Thank you for shopping with us!
		<br/>
		<br/>
		Regards,
		<br/>
		'.$info["website_name"].' Team
	';
	
			
			
	
		

	
	$success =mail($to,$subject,$message,$headers);

?>