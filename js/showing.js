$(document).ready(function(){
	console.log("got it!");

	var clicked = false;
	var menu_vis = false;

	$(".image").mouseenter(function(){
		//$(this).width($(this).width()+10);
		//$(this).height($(this).height()+5);
		//$(this).css("border-radius", "15%");
		$(this).css("box-shadow", "0 0 0 5px rgba(255,255,255, 0.6)");

	});

	$(".image").mouseleave(function(){
		//$(this).width($(this).width()-10);
		//$(this).height($(this).height()-5);
		//$(this).css("border-radius", "0%");
		$(this).css("box-shadow", "0px 0px 0px rgba(255,255,255, 0.4)");
	});

	$(".gitem").on("click", function(){
		if(!clicked){
			$(this).addClass("show");
			$('html, body').animate({scrollTop: ($(this).offset().top)},550);
			clicked = true;
		}
		else {
			$(this).removeClass("show");
			clicked = false;
		}
	});

	
	$(".menu_link").on("click", function(){
		//chowanie menu po kliknieciu gdziekolwiek na stronie
		 $(".side_menu").toggleClass("side_menuA");

	});

	
	


});
