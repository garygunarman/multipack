<?php session_start();
//not a member, login first
if ($_SESSION["user_status"]!="admin"){
		header("location:../login.php?redirect=home");
}
else{
	$prefix="../";
	include($prefix."../static/connect_database.php");
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php ?>
<head>	
		<?php
			$page_title = " Dashboard";
			include($prefix."static/page_head.php");
		?>

		
		
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/dashboard.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>../script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/ui/jquery.ui.sortable.js"></script>
	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/orders.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/dashboard.css" />
	
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initialization()">
	<?php include($prefix."static/header.php");?>
	
	
	
	
	<?php
	include("verified_orders_widget.php");?>
	<div class="space_row"></div>
	
	
	
	<?php
	include("confirm_orders_widget.php");?>
	<div class="space_row"></div>
	
	
	
	
	<?php include("orders_widget.php");?>
	
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>