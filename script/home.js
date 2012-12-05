/* on javascript initialization put this code
slideshow_counter=1;
total_slideshow = document.getElementById("slideshow_total").innerHTML;
var slideshow_timer = setTimeout("slideshowAnimation()",3000);
*/
var slideshow_counter, total_slideshow,slideshow_timer;

function initialization(){
	slideshow_counter=1;
	total_slideshow = document.getElementById("slideshow_total").innerHTML;
	
	var dot_width = Math.floor((960 - ((total_slideshow-1)*3))/total_slideshow);
	
	
	
	$(".dot").width(dot_width);
	changeDot(0);
	
	var slideshow_timer = setTimeout("slideshowAnimation()",3000);
}

function slideshowAnimation(){
			
			
			$("#slideshow_frame").animate({"left":"-960px"},700,function(){
				
				changeSlideshowLeft();
				
				changeDot(slideshow_counter);

				//change slideshow counter
				if (slideshow_counter+1 < total_slideshow){
					slideshow_counter++;
				}
				else {
					slideshow_counter=0;
				}

				$("#slideshow_frame").css({"left":"0px"});

				changeSlideshowRight();
			});
			
			if (slideshow_timer!=null){
				clearTimeout(slideshow_timer);
			}
			
			slideshow_timer = setTimeout("slideshowAnimation()",3000);
}

function changeSlideshowLeft(){
	//document.getElementById("index_slideshow_left_link").href = document.getElementById("slideshow_link_"+slideshow_counter).innerHTML;
	document.getElementById("index_slideshow_left_image").src = document.getElementById("slideshow_image_"+slideshow_counter).src;
	
	
}

function changeSlideshowRight(){
	//document.getElementById("index_slideshow_right_link").href = document.getElementById("slideshow_link_"+slideshow_counter).innerHTML;
	document.getElementById("index_slideshow_right_image").src = document.getElementById("slideshow_image_"+slideshow_counter).src;
}

function changeMainImage(counter){
	clearTimeout(slideshow_timer);
	$("#slideshow_frame").css({"left":"0px"});
	document.getElementById("index_slideshow_left_image").src = document.getElementById("slideshow_image_"+counter).src;
	if (counter*1+1 < total_slideshow){
		slideshow_counter=counter*1+1;
	}
	else {
		slideshow_counter=0;
	}
	
	document.getElementById("index_slideshow_right_image").src = document.getElementById("slideshow_image_"+slideshow_counter).src;
	
	
	
	
	

	changeDot(counter);
	slideshow_timer = setTimeout("slideshowAnimation()",3000);
	
	
}

function changeDot(image_counter){	
	$(".dot").css({"background-color":"#cccccc"});
	$("#dot_"+image_counter).css({"background-color":"#ff0066"});
}

