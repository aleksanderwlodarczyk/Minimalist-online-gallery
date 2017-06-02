$(document).ready(function(){
	console.log("got it!");

	$(".image").on("click", function() {
		var browser_width = $(window).width();
		var browser_height = $(window).height();

		if($(this).width() < (browser_width - 100))
		{
			$(this).width(browser_width-100);
			$(this).height(browser_height-100);
			$(this).addClass("show");

			$('html, body').animate({scrollTop: ($(this).offset().top-50)},550);
		}
		else{
			$(this).width(480);
			$(this).height(320);	
			$(this).removeClass("show");
		}
	});
});