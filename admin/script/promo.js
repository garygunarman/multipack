function changePromo(){
	var promo_id = document.getElementById("promo_id").value;
	
	if (promo_id=='1'){
		$(".promo_row").css({"display":"none"});
		$("#discount_percentage_row").css({"display":"block"});
	}
	else if (promo_id=='2'){
		$(".promo_row").css({"display":"none"});
		$("#discount_amount_row").css({"display":"block"});
	}
}

function deletePromo(){
	document.getElementById("action").value="delete";	
	document.getElementById("promo_form").submit();
}

function deleteSinglePromo(promo_id){
	document.getElementById("action").value="delete single";
	document.getElementById("promo_id_delete").value=promo_id;	
	document.getElementById("promo_form").submit();
}