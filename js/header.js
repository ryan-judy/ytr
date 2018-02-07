$(document).ready(function(){



$(window).scroll( function(){
	var headerHeight = $('.header').outerHeight();
	var navHeight = $('.navbar').outerHeight();
	var scrollPos = $(window).scrollTop();
	var windowWidth = $(window).width();
 
	if ( scrollPos >= headerHeight && windowWidth > 480 ) {
		$('.navbar').addClass('nav-fixed');
		$('.navbar').addClass('navbar-light');
		$('.navbar-brand img').attr("src", "./wp-content/uploads/2018/01/YTR-Logo-Color-Copy.png");
		//$('.container').css('margin-top', navHeight);
		$('.navbar').removeClass('navbar-dark');
		$('.navbar-brand').addClass('shrink-nav');
		$(".navbar-brand").addClass("shrink-logo");
		$('.navbar').addClass('navbar-shadow');


	} else {
		$('.navbar-brand img').attr("src", "./wp-content/uploads/2018/01/YTR-Logo-White-Copy.png");
		$('.mobile').addClass('home-logo');
		$('.navbar').removeClass('nav-fixed');
		$('.navbar').removeClass('navbar-light');
		//$('.container').css('margin-top', '0');
		//$('.navbar').addClass('navbar-dark');
		$('.navbar').removeClass('navbar-shadow');
		$(".navbar-brand").removeClass("shrink-nav");
      	$(".navbar-brand").removeClass("shrink-logo");
	}

});



$('.carousel').carousel({
  interval: 1000
});

});

