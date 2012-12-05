<?php session_start();


$prefix="../";

include($prefix."static/check_session.php");
include($prefix."static/connect_database.php");


include($prefix."static/get_account_details.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
	<?php
		$page_title = "| Track Order";
		include($prefix."static/page_head.php");
	?>
	
	<script type="text/javascript" src="<?php echo $prefix;?>script/confirm.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/general.js"></script>
	<script type="text/javascript" src="<?php echo $prefix;?>script/scroll_sneak.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/general.css" /> <!-- include the html, body, and container -->
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>style/confirm.css" />
	
	<?php
		
		include($prefix."static/google_track.php");
	?>
</head>
<div id="loading" ></div>

	
<body >
	
	<div id="container">
	<div id="header">
	<?php
	
		
		include($prefix."static/header.php");
	?>
	</div>
	
	<div id="main_body">
		<?php


			//include($prefix."static/sidebar_account.php");
		?>
		
		<?php
		
		
		include("display_confirm.php");
		
		
		?>
		
		
	</div>
	
	<div id="footer">
	<?php
		include($prefix."static/footer.php");
	?>
	</div>
	</div>
</body>
</html>
