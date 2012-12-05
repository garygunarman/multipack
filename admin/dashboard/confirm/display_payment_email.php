<?php
$account_name = current($account_name_array);
$account_number = current($account_number_array);
foreach ($account_bank_array as $account_bank){
	if (strtolower($account_bank)==strtolower($bank)){
?>
<?php $message .= $account_bank." ".$account_number." - ".$account_name."<br/><br/>";?>
	

	
<?php	
	}
	$account_name = next($account_name_array);
	$account_number = next($account_number_array);
}
?>