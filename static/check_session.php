<?php
if ($_SESSION["user_status"]==null){
		
		$_SESSION["user_status"]="guest";
		
		$_SESSION["type_id"] = array();
		$_SESSION["stock_name"] = array();
		$_SESSION["item_quantity"] = array();
		$_SESSION["item_price"]= array();
		$_SESSION["item_gender"]= array();
		$_SESSION["shopping_bag_counter"]= 0;
}


?>