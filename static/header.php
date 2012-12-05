<div id="prefix" class="hidden"><?php echo $prefix;?></div>
<a href="<?php echo $prefix;?>"><div id="header_logo">
</div></a>

<div id="header_right">
	<div id="shopping_row">
		<a class="sneaking" href="<?php echo $prefix;?>order/shopping_bag"><div id="shopping_bag_menu" class="top_menu">SHOPPING BAG <font family="Gotham Rounded Bold">
			<?php
			
			if ($_SESSION["user_status"]=='guest'){
				
				if ($_SESSION["shopping_bag_counter"]==null){
					echo "0";
				}
				else{
					echo $_SESSION["shopping_bag_counter"];
				}
			}
			
			else if ($_SESSION["user_status"]=='member'){
				
				$user_id = $_SESSION["user_id"];
				$bag_id = $_SESSION["bag_id"];
				
				$bag_counter = mysql_query("
					SELECT bag_counter from tbl_shopping_bag 
					WHERE bag_id = '$bag_id' AND user_id = '$user_id'
				",$con);
				
				if (mysql_num_rows($bag_counter)!=0){
					$bag_counter_array = mysql_fetch_array($bag_counter);
					if ($bag_counter_array["bag_counter"]!=null){
						echo $bag_counter_array["bag_counter"];
					}
					else{
						echo '0';
						
					}
				}
				
				else{
					echo "0";
				}
				
			}
			
			?>
			</font></div></a>
		<a class="sneaking header_link" href="<?php echo $prefix; ?>track"><div id="track_menu" class="top_menu">TRACK ORDER</div></a>
		<a class="sneaking header_link" href="<?php echo $prefix; ?>confirm"><div id="confirm_menu" class="top_menu">CONFIRM PAYMENT</div></a>
		<!--for guest-->
		<?php
			if ($_SESSION["user_status"]=="guest"){
		?>		

		<a class="sneaking header_link" href="<?php echo $prefix; ?>account/login">
			<div class="top_menu" id="sign_up_menu">SIGN UP</div>
		</a>

		<a class="sneaking header_link" href="<?php echo $prefix; ?>account/login">
			<div class="top_menu" id="login_menu">LOGIN</div>
		</a>

		<!--for member-->
		<?php		
			}
			else if ($_SESSION["user_status"]=="member" || $_SESSION["user_status"]=="admin"){
		?>

		<a class="sneaking header_link" href="<?php echo $prefix; ?>account/my_account">
			<div class="top_menu" id="login_menu">MY ACCOUNT</div>
		</a>


			<div class="top_menu" id="logout_menu" onclick="confirmLogout()">LOG OUT</div>


		<?php		
			}
		?>
	</div>
	
	<div id="menu_row">
		<a class="sneaking" href="<?php echo $prefix;?>products?sale=1"><div id="sale_menu" class="main_menu">SALE</div></a>
		<?php
		$get_top_categories = mysql_query("
		SELECT * from tbl_category
		WHERE category_level = '0'
		ORDER BY category_order DESC
		",$con);
		
		if (mysql_num_rows($get_top_categories)!=0){
			for ($counter_menu=0;$counter_menu<mysql_num_rows($get_top_categories);$counter_menu++){
			$get_top_categories_array = mysql_fetch_array($get_top_categories);
			
			$type_menu = $counter_menu % 4;
			
			$category_class_name = str_replace(" ","_",strtolower($get_top_categories_array["category_name"]));
			echo '<a class="sneaking" href="'.$prefix.'products?category_id='.$get_top_categories_array["category_id"].'&category_name='.$get_top_categories_array["category_name"].'">';
			echo '<div id="type'.$type_menu.'_menu" class="main_menu';
			if ($category_id==$get_top_categories_array["category_id"]){
				echo ' type'.$type_menu.'_menu_selected';
			}
			echo'">'.strtoupper($get_top_categories_array["category_name"]).'</div>';
			echo '</a>';
			}
		}
		?>
		
		<div class="menu_seperator">|</div>
		<a class="sneaking" href="<?php echo $prefix;?>products"><div id="new_menu" class="main_menu 
			<?php
				if($input["new_arrival"]==1){
					echo ' new_menu_selected';
				}
			?>
			">ALL STYLES</div></a>
	</div>
</div>



<div class="main_void_row"></div>