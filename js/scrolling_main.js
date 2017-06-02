$(document).ready(function(){
	var i = 0;
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		//console.log(scroll);
		i++;
		if(i>6){
			$('html, body').animate({scrollTop: ($('#2').offset().top)},550);
			i = 0;
		}
	});
	
});