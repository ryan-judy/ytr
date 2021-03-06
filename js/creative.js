(function($) {
  "use strict"; // Start of use strict
  $('.count').each(function() {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 4000,
    easing: 'swing',
    step: function(now) {
      $(this).text(Math.ceil(now));
    }
  });
});


  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 120)
        }, 1000, "easeInOutExpo");
        return false;

      }
    }
  });


  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 120
  });

var config = {
    duration: 1000,
    scale: 1,
    origin: 'left',
    delay: 200,
    viewOffset: { top: 60 }
};

var config2 = {
    duration: 1000,
    scale: 1,
    origin: 'right',
    delay: 200,
    viewOffset: { top: 60 }
};

  // Scroll reveal calls
  window.sr = ScrollReveal({duration: 2000 });
  sr.reveal('.sr-icons', {
    duration: 1000,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-icons-load', {
    duration: 1000,
    scale: 0.3,
    distance: '0px',
    delay: 500
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);
  sr.reveal('.sr-logo', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-number', {
    duration: 100,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal(".content", config, 200);
  sr.reveal(".content-right", config2, 200);

  // Magnific popup calls
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });


})(jQuery); // End of use strict
