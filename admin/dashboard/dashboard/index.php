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
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/dashboard.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/orders.css" />
	
	
	
	<?php
		
		include($prefix."../static/google_track.php");
		
		
		
		
	?>
</head>

<body onload="initialization()">
	<?php include($prefix."static/header.php");?>
	<form id="image_form" method="post" action="../orders/update.php" enctype="multipart/form-data">
	<div id="page_title_bar">
		<div id="page_title_bar_fill">
			<div id="page_title">Dashboard</div>
			<div id="button_bar">
				
				
				
			</div>
		</div>
	</div>
	
	<div class="fill_row">
		<div class="table_title">Latest Orders <i><a class="view_all_link" href="<?php echo $prefix;?>orders">(view all)</a></i></div>
	</div>
	<?php include("orders_widget.php");
	echo '<div class="space_row"></div>';?>
	
	
	<div class="fill_row">
		<div class="table_title">Latest Confirmed Orders <i><a class="view_all_link" href="<?php echo $prefix;?>orders?search=order_status=confirmed">(view all)</a></i></div>
	</div>
	<?php
	include("confirm_orders_widget.php");?>
	<div class="space_row"></div>
	
	
	<div class="fill_row">
		<div class="table_title">Latest Verified Orders <i><a class="view_all_link" href="<?php echo $prefix;?>orders?search=order_status=confirmed">(view all)</a></i></div>
	</div>
	<?php
	include("verified_orders_widget.php");?>
	
	</form>
	<?php include($prefix."static/footer.php");?>
</body>

</html>
<?php
}
?>