<div id="admin_header">
	<div id="header_bar">
		<div id="header_bar_fill">
			<div id="website_logo"></div>
			<div id="header_title"></div>
			
			<?php if ($_SESSION["user_status"]!="admin"){
			?>
				<a href="<?php echo $prefix;?>login.php"><div class="admin_menu">Login</div></a>
			<?php
			}else{?>
			
			<a href="<?php echo $prefix;?>change_password.php"><div class="admin_menu">Change Password</div></a>
			<div class="panel_seperator_right">|</div>
			<div class="admin_menu" onclick="confirmLogout()">Logout</div>
			<div class="panel_seperator_right">|</div>
			<div class="admin_label">Logged in as <b><u><?php echo $_SESSION["username"];?></b></u></div>
			<?php } ?>
		</div>
	</div>
	<div id="menu_bar">
		<div id="menu_bar_fill">
			<a href="<?php echo $prefix;?>"><div class="main_menu" id="dashboard_menu">DASHBOARD</div></a>
			
			<a href="<?php echo $prefix;?>orders"><div class="main_menu" id="orders_menu" >ORDERS
					
				</div></a>
			
			<div class="main_menu" id="products_menu" onmouseover="showSubmenu('products_submenu_bar')" onmouseout="hideSubmenu('products_submenu_bar')">PRODUCTS
				<div class="submenu_bar" id="products_submenu_bar">
					<a href="<?php echo $prefix;?>products"><div class="most_bottom_submenu main_submenu" id="products_submenu">Product Manager</div></a>
					
					<!--<a href="<?php echo $prefix;?>color"><div class="main_submenu" id="color_submenu">Color Manager</div></a>-->
					<!--<a href="<?php echo $prefix;?>designer"><div class="main_submenu" id="contact_submenu">Designer Manager</div></a>-->
					
					<a href="<?php echo $prefix;?>size"><div class="most_bottom_submenu main_submenu " id="help_submenu">Size Manager</div>
				</div>
				</div>
			</a>
			<a href="<?php echo $prefix;?>users"><div class="main_menu" id="users_menu">USERS</div></a>
			
			<div class="main_menu" id="pages_menu" onmouseover="showSubmenu('pages_submenu_bar')" onmouseout="hideSubmenu('pages_submenu_bar')">PAGES
				<div class="submenu_bar" id="pages_submenu_bar">
					<a href="<?php echo $prefix;?>home"><div class="main_submenu" id="home_submenu">Home</div></a>
					
					<a href="<?php echo $prefix;?>about"><div class="main_submenu" id="about_submenu">About</div></a>
					<a href="<?php echo $prefix;?>contact"><div class="main_submenu" id="contact_submenu">Contact</div></a>
					
					<a href="<?php echo $prefix;?>help"><div class="most_bottom_submenu main_submenu " id="help_submenu">Help</div></a>
				</div>
			</div>
			
			
			
			
		</div>
	</div>
</div>

<div class="hidden" id="prefix"><?php echo $prefix;?></div>