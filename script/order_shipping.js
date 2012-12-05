function changeTotal(mode){
	document.getElementById("shipping_price_rightbar").innerHTML = document.getElementById("shipping_price_"+mode).innerHTML;
	document.getElementById("total_price_rightbar").innerHTML = document.getElementById("total_price_"+mode).innerHTML;
	document.getElementById("shipping_submit").disabled=false;
	$("#shipping_submit").animate({"opacity":"1"},100);
}