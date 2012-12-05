<div id="about_frame" class="hidden">
	<div class="order_title"><div class="order_title_">ABOUT</div><div class="title_description"></div><div class="void_row"></div></div>
	
	<hr noshade size='1'/>
	
	<div class="my_info_display">
		<?php echo $about;?>
	<div class="void_row"></div>
	</div>
</div>

<div id="contact_frame" class="hidden">
	<div class="order_title"><div class="order_title_">CONTACT US</div><div class="title_description"></div><div class="void_row"></div></div>
	
	<hr noshade size="1"/>
	
	<div class="my_info_display">
		<?php echo $contact;?>
	<div class="void_row"></div>
	</div>
</div>

<div id="newsletter_frame" class="hidden">
	<div class="order_title"><div class="order_title_">NEWSLETTER</div><div class="title_description"></div><div class="void_row"></div></div>
	
	<hr noshade size='1'/>
	
	<div class="my_info_display">
		Be the first to know about Melissa exclusive offers and new arrivals by signing up Melissa Shoes newsletter.
		
		<div class="form_row">
			<div class="form_label">Email</div>
			<div class="form_input"><input type="text" class="medium_text_box main_text_box" name="email_newletter" value=""></div>
			<div class="void_row"></div>
		</div>
		
		
		
		<div class="button_bar">
			<input type="submit" id="submit_button" class="right_ pink_button submit_button" value="SUBMIT"/>
			<div class="left_ subscribe_message">YOU'VE BEEN SIGN UP SUCCESSFULLY.</div>
		</div>
	<div class="void_row"></div>
	</div>
</div>

<div id="help_frame" class="hidden">
	<div class="order_title"><div class="order_title_">HELP</div><div class="title_description"></div><div class="void_row"></div></div>
	
	<hr noshade size="1"/>
	
	<div class="my_info_display">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. 

		<?php
		foreach($help as $type=>$value){
			echo '<div class="info_title help_title" id="help_'.$type.'" onclick="showDetail(\''.$type.'\')">'.strtoupper($type).' INFORMATION</div>';
			echo '<div class="info_description">Lorem ipsum dolor sit amet</div>';
		}
		?>
	<div class="void_row"></div>
	</div>
</div>

<?php
foreach($help as $type=>$value){
	echo '<div id="'.$type.'_help_frame" class="hidden">'.$value.'</div>';
}
?>

<div id="default_frame" class="hidden"><?php echo $default;?></div>