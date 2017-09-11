$(document).ready(function() {


  // Smooth Scroll
  $('a[href^="#"]').smoothScroll();


  // Owl Carousel
  $(".owl-carousel").owlCarousel({
    singleItem: true,
    autoPlay: 3000,
    navigation : true,
    navigationText: ["<i class='ion ion-chevron-left'></i>", "<i class='ion ion-chevron-right'></i>"],
    slideSpeed : 300,
    paginationSpeed : 400,
    // autoHeight : true,
    lazyLoad : true,
  });


  // Typed
  $(".typed").typed({
    stringsElement: $('.typed-strings'),
    typeSpeed: 30,
    callback: function() {
      $('.typed-cursor').fadeOut();
    },
  });


});

function scrollActions() {
  scroll = $(window).scrollTop();
  
  $('.bg-lightest').each(function() {
    if (scroll > ($(this).offset().top - $(window).outerHeight()/2)) {
      $('body').addClass('scrolled-' + $(this).attr('id'));
      $(this).addClass('isVisible');
    } else {
      $('body').removeClass('scrolled-' + $(this).attr('id'));
      $(this).removeClass('isVisible');
    }
  });
}

$(document).on('ready scroll resize scrollstart scrollstop', function() { scrollActions() });
