// defining scrollevents
scrollevents = 'ready scroll resize scrollstart scrollstop';

// 'uncompononented' js
$(document).ready(function () {


  // initiating smooth scroll
  $('a[href^="#"]').smoothScroll({
    afterScroll: function() {
      if(history.pushState) {
        history.pushState(null, null, $(this).attr('href'));
      }
      else {
        location.hash = $(this).attr('href');
      }
    }
  });


  // add isLoaded to page
  $('body').addClass('isLoaded');


  // Owl carousel
  $('.owl-carousel').each(function() {
    $(this).owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ["<i class='ion ion-chevron-left'></i>", "<i class='ion ion-chevron-right'></i>"],
      lazyLoad : true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplaySpeed: 500,
      // autoHeight : true,
    });
  });


  // Typed
  $(".typed").typed({
    stringsElement: $('.typed-strings'),
    typeSpeed: 30,
    callback: function() {
      $('.typed-cursor').fadeOut();
    },
  });

  $("[href='#offerte']").click(function(e) {
    e.preventDefault();
    toggleDialog('offer');
  });

});




// Component: diagram
$(document).ready(function () {
  $('.diagram').stick_in_parent({
    offset_top: 100
  });
});
$(document).on(scrollevents, function() { diagramSwitch(); });

function diagramSwitch() {
  diagram_top = $('.diagram').offset().top;
  st1_top = $('.verhaal__text__stage1').offset().top;
  st2_top = $('.verhaal__text__stage2').offset().top;
  st3_top = $('.verhaal__text__stage3').offset().top;
  buffer = 400;

  if( diagram_top > st3_top - buffer ) {
    $('.diagram').removeClass('diagram--stage2').removeClass('diagram--stage2').addClass('diagram--stage3');
    console.log($('.diagram').attr('class'));
  } else if ( diagram_top > st2_top - buffer ) {
    $('.diagram').removeClass('diagram--stage1').removeClass('diagram--stage3').addClass('diagram--stage2');
    console.log($('.diagram').attr('class'));
  } else if ( diagram_top > st1_top - buffer ) {
    $('.diagram').removeClass('diagram--stage2').removeClass('diagram--stage3').addClass('diagram--stage1');
    console.log($('.diagram').attr('class'));
  }
}




// Dialog toggle
function toggleDialog(id) {
  if($('dialog#' + id)) {
    $('dialog#' + id).toggleClass('isVisible');
    $('#dialog_mask').toggleClass('isVisible');
  }
}
function closeDialog() {
    $('dialog').removeClass('isVisible');
    $('#dialog_mask').removeClass('isVisible');
}



// Component: navOnScroll
$(document).on(scrollevents, function() { navOnScroll(); });

$(document).ready(function () {
  // initial scroll actions
  navOnScroll();
});

function navOnScroll() {
  scroll = $(window).scrollTop();
  delta = 100000; // big number
  active_id = null;

  $('.section').each(function() {
    scrollpoint = scroll + $(window).outerHeight()/2;
    midpoint = $(this).offset().top + $(this).outerHeight()/2;
    if (Math.abs(scrollpoint - midpoint) < delta) {
      delta = Math.abs(scrollpoint - midpoint);
      active_id = $(this).attr('id');
    }
  });

  if($('.section.isActive').attr('id') !== active_id) {
    // add active class to slide
    $('.section').removeClass('isActive');
    $('#' + active_id).addClass('isActive');
    // add active class to nav
    $('nav a').removeClass('isActive');
    $('nav a[href="#' + active_id + '"]').addClass('isActive');
  }
}




// Component: contentLazyScroll
// $(document).on(scrollevents, function() { contentLazyScroll(); });

function contentLazyScroll() {
  scroll = $(window).scrollTop();

  $('.section__content').each(function() {
    delta = scroll - $(this).offset().top;
    if(scroll > $(this).closest('.section').offset().top && delta > 0) {
      $(this).css('transform', 'translateY(' + delta + 'px)');
    } else {
      // $(this).css('border', 'none');
    }
  });
}




// Component: Parallax
$(document).on(scrollevents, function() { doParallax(); });

function doParallax() {
  $('[data-parallax]').each(function() {
    var $bgobj = $(this); // assigning the object

    $(window).scroll(function() {
      var yPos = ($(window).scrollTop() / $bgobj.data('parallax')); 
      
      // Put together our final background position
      var coords = '50% '+ yPos + 'px';

      // Move the background
      $bgobj.css({ backgroundPosition: coords });
    }); 
});
}