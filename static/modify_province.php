<div class="form_label">Province</div>
<div class="styled-select_4">
<select class="form_select_input" id="order_shipping_province" name="order_shipping_province" onchange="changeProvince(),checkInput2()">
	<?php
	include("../static/connect_database.php");
		echo '<option value="">--Select province--</option>';
		$country_name = $_GET["country"];
		$province = $_GET["province"];
		
		$get_country_id = mysql_query("
			SELECT * from delivery_countries	
			WHERE name = '$country_name'
		",$con);
		
		if (mysql_num_rows($get_country_id)!=null){
			$get_country_id_array = mysql_fetch_array($get_country_id);
			$country_id = $get_country_id_array["id"];
		}
		
		$province_sql = mysql_query("
			SELECT * from delivery_state
			WHERE country_id = '$country_id'
			ORDER BY id	
		",$con);
		
		
		if ($province == "" || $province==null){
			//$province = "DKI JAKARTA";
		}
		
		for ($country_counter=1;$country_counter<=mysql_num_rows($province_sql);$country_counter++){
			$province_array = mysql_fetch_array($province_sql);
			$province_name = $province_array["name"];
			echo '<option value="'.$province_name.'"';
			if ($province==$province_name){ echo 'selected="selected"';}
			//else if($province==""&&$country_counter==1){ echo 'selected="selected"';}
			echo '>'.$province_name.'</option>';
		}
	?>
</select>
</div>
<div class="void_row"></div>