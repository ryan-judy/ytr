$(document).ready(function(){

	console.log("loaded")

$(window).scroll( function(){
	var headerHeight = $('.header').outerHeight();
	var navHeight = $('.navbar').outerHeight();
	var scrollPos = $(window).scrollTop();
	var windowWidth = $(window).width();
 
	if ( scrollPos >= headerHeight && windowWidth > 480 ) {
		$('.navbar').addClass('nav-fixed');
		//$('.navbar').addClass('navbar-light');
		//$('.container').css('margin-top', navHeight);
		$('.navbar').removeClass('navbar-dark');
		$('.navbar-brand').addClass('shrink-nav');
		$(".navbar-brand").addClass("shrink-logo");

	} else {
		$('.navbar').removeClass('nav-fixed');
		//$('.navbar').removeClass('navbar-light');
		//$('.container').css('margin-top', '0');
		//$('.navbar').addClass('navbar-dark');
		$(".navbar-brand").removeClass("shrink-nav");
      	$(".navbar-brand").removeClass("shrink-logo");
	}

});


});