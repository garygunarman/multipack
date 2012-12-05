<div class="account_body">
	<form id="category_form" method="post" action="update.php" enctype="multipart/form-data">
	<div class="order_frame">
		
		<div class="order_title"><div class="order_title_">CONFIRM PAYMENT</div><div class="title_description"></div><div class="void_row"></div></div>
		<hr/>
		
		
		<div class="left_ left_column">
		<div class="form_row">
			Fill in the form below to confirm your payment
		</div>
		<div class="form_row">
			<div class="form_label">Order Number</div>
			<div class="form_input"><input type="text" name="order_number" id="order_number" class="medium_text_box main_text_box" value="<?php echo $order_number;?>" ></div>
			<div class="void_row"></div>
		</div>
		
		<div class="form_row">
			<div class="form_label">Bank</div>
			<div class="form_input"><input type="text" name="bank" id="bank" class="medium_text_box main_text_box" value="" ></div>
			<div class="void_row"></div>
		</div>
		
		<div class="form_row">
			<div class="form_label">Bank Account Name</div>
			<div class="form_input"><input type="text" name="account_name" id="account_name" class="medium_text_box main_text_box" value="" ></div>
			<div class="void_row"></div>
		</div>
		
		<div class="form_row">
			<div class="form_label">Amount</div>
			<div class="form_input"><input type="text" name="amount" id="amount" class="medium_text_box main_text_box" value="" ></div>
			<div class="void_row"></div>
		</div>
		
		
		
		
		<div class="button_bar">
			<input type="button" class="right_ pink_button submit_button" onclick="confirmPayment()" value="SUBMIT"/>
			
			<div class="void_row"></div>
		</div>
		</div>
		<div class="right_column" id="right_column">
			
		</div>
		<div class="void_row"></div>
	</div>
	</form>
	
	
</div>