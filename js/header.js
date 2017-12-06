$(document).ready(function(){

	console.log("loaded")

$(window).scroll( function(){
	var headerHeight = $('.header').outerHeight();
	var navHeight = $('.navbar').outerHeight();
	var scrollPos = $(window).scrollTop();
	var windowWidth = $(window).width();
 
	if ( scrollPos >= headerHeight && windowWidth > 480 ) {
		$('.navbar').addClass('nav-fixed');
		$('.navbar').addClass('navbar-light');
		$('.navbar-brand img').attr("src", "./wp-content/uploads/2017/09/cropped-YTR-Logo-Color-Copy.png");
		//$('.container').css('margin-top', navHeight);
		$('.navbar').removeClass('navbar-dark');
		$('.navbar-brand').addClass('shrink-nav');
		$(".navbar-brand").addClass("shrink-logo");

	} else {
		$('.navbar-brand img').attr("src", "./wp-content/uploads/2017/09/cropped-YTR-Logo-White-Small.png");
		$('.navbar').removeClass('nav-fixed');
		$('.navbar').removeClass('navbar-light');
		//$('.container').css('margin-top', '0');
		$('.navbar').addClass('navbar-dark');
		$(".navbar-brand").removeClass("shrink-nav");
      	$(".navbar-brand").removeClass("shrink-logo");
	}

});

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

$('.carousel').carousel({
  interval: 1000
})

});