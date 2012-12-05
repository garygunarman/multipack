function loadingOff(){
	$("#loading").animate({"height":"0"},400,function(){
		$("#loading").css({"display":"none"});
		$("#container").css({"display":"block"});
		$("#container").animate({"opacity":"1"},300);
	});
}

function clearBox(id){
	document.getElementById(id).value="";
}

function confirmLogout(){
	var question = confirm ("Are you sure you want to log out?");
	var prefix=document.getElementById("prefix").innerHTML;
	if (question) {
		location.href = prefix+"account/logout";
	}
	
}

function openInfo(type){
	var prefix=document.getElementById("prefix").innerHTML;
	document.getElementById("info_link").href=prefix+"info?default="+type;
	document.getElementById("info_link").click();
	location.href = prefix+"info?default="+type;
}

function checkText(id_check){
	field = document.getElementById(id_check).value;
	field=field.replace(/[^A-z ]/g,"");
	field=field.replace(/[\\\[\]]/g,"");
	document.getElementById(id_check).value = field;
}

function checkNumber(id_check){
	field = document.getElementById(id_check).value;
	field=field.replace(/[^0-9+() ]/g,"");
	field=field.replace(/[\\\[\]]/g,"");
	document.getElementById(id_check).value = field;
}