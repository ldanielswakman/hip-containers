// Bind scrollActions to namespaced events 
events = 'ready scroll resize scrollstart scrollstop';
$(document).on(events, function() { scrollActions(); });

$(document).ready(function () {
  // initiating smooth scroll
  // $('a[href^="#"]').smoothScroll({});
  scrollActions();
});

function scrollActions() {
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
  console.log(active_id);

  if($('.section.isActive').attr('id') !== active_id) {
    // add active class to slide
    $('.section').removeClass('isActive');
    $('#' + active_id).addClass('isActive');
    // add active class to nav
    $('nav a').removeClass('isActive');
    $('nav a[href="#' + active_id + '"]').addClass('isActive');
  }
}

