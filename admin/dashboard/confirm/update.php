<?php session_start();
$prefix="../";

include($prefix."static/check_session.php");
include($prefix."static/connect_database.php"); 
include($prefix."static/get_account_details.php");

$order_number = $_POST["order_number"];
$bank = $_POST["bank"];
$bank_account_name = $_POST["account_name"];
$amount = $_POST["amount"];

date_default_timezone_set("Asia/Jakarta");
$current_date = date('Y-m-d H:i:s');

$check_available = mysql_query("
	SELECT order_id, order_payment_method, order_status, order_total_amount,order_shipping_number from tbl_order
	WHERE order_number = '$order_number'
",$con);

$confirm_update = mysql_query("
	SELECT order_id, order_payment_method, order_status, order_total_amount,order_shipping_number from tbl_order
	WHERE order_number = '$order_number' AND order_status = 'open'
",$con);

if (mysql_num_rows($confirm_update)==null){
	if (mysql_num_rows($check_available)==null){
		echo "You entered the wrong order number";
	}
	else{
		echo "Your order payment has been confirmed previously.";
	}
	
}
else if (strcasecmp($bank,"Mandiri")!=0 && strcasecmp($bank,"BCA")!=0){
	echo "We only accept transfer via Mandiri or BCA.";
}
else{
	mysql_query("
		UPDATE tbl_order
		SET order_confirm_bank='$bank',order_confirm_name='$bank_account_name',order_confirm_amount='$amount',order_status='confirmed',order_confirmed_date='$current_date'
		WHERE order_number='$order_number'
	",$con);
	
	//reduce stock
	//include("reduce_stock.php");
	
	include("email.php");
	
	echo "Thanks! We have received your confirmation. We will verify the payment in 1 x 24 hour. Once it’s verified, we process and ship your order to you!";
	
}

?>