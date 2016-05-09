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

});




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
