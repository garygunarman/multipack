<div class="form_label">City</div>
<div class="styled-select_4">
<select class="form_select_input" id="order_shipping_city" name="order_shipping_city" onchange="checkInput2()">
	<?php
	include("../static/connect_database.php");
		echo '<option value="">--Select city--</option>';
		$province = $_GET["province"];
		$city=$_GET["city"];
		
		$get_province_id = mysql_query("
			SELECT * from delivery_state	
			WHERE name = '$province'
		",$con);
		
		if (mysql_num_rows($get_province_id)!=null){
			$get_province_id_array = mysql_fetch_array($get_province_id);
			$province_id = $get_province_id_array["id"];
		}
		
		$city_sql = mysql_query("
			SELECT * from delivery_city
			WHERE state = '$province_id'
			ORDER BY id	
		",$con);
		
		if ($city==""){
			//$city = "DKI JAKARTA";
		}
		
		for ($province_counter=1;$province_counter<=mysql_num_rows($city_sql);$province_counter++){
			$city_array = mysql_fetch_array($city_sql);
			$city_name = $city_array["city"];
			echo '<option value="'.$city_name.'"';
			if ($city==$city_name){ echo 'selected="selected"';}
			echo '>'.$city_name.'</option>';
		}
	?>
</select>
</div>
<div class="void_row"></div>