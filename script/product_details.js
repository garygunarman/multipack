function initialization(){
	changeSize();
}

function changeSize(){
	var stock_name = document.getElementById("stock_name").value;
	var max = document.getElementById("max_"+stock_name).innerHTML;
	var select = document.getElementById("quantity");
	select.options.length=0;
	for (counter=1;counter<=max;counter++){
		select.options[select.options.length] = new Option(counter, counter);
	}
	
	
}

function changeColor_(){
	var type_id = document.getElementById("type_id_select").value;
	//alert(type_id);
	document.getElementById("color_link").href="../details?type_id="+type_id;
	//alert(document.getElementById("color_link").href);
	$("#color_link").click();
	location.href = "../details?type_id="+type_id;
	
}

function changeImage(counter){
	var left = -counter*500;
	$("#main_image_gallery").animate({"left":left},300);
}