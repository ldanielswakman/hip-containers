// defining scrollevents
scrollevents = 'ready scroll resize scrollstart scrollstop';

// 'uncompononented' js
$(document).ready(function () {


  // initiating smooth scroll
  $('a[href^="#"]').not('[href="#offerte"]').smoothScroll({
    afterScroll: function() {
      if(history.pushState) {
        history.pushState(null, null, $(this).attr('href'));
      }
      else {
        location.hash = $(this).attr('href');
      }
    }
  });


  // initiating magnific popup
  $('.gallery__image').magnificPopup({
    type: 'image',
    mainClass: 'mfp-with-zoom',
    zoom: {
      enabled: true,
      duration: 300,
      easing: 'ease-in-out',
      opener: function(openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    },
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      // arrowMarkup: '<i title="%title%" class="ion ion-arrow-%dir%-b></i>',
      arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="ion ion-chevron-%dir%"></i></button>',
      tPrev: 'Vorige',
      tNext: 'Volgende',
      tCounter: '<span class="mfp-counter">%curr% van %total%</span>',
    },
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
    toggleDialog('offerte');
    // updateOfferPrice();

    $.smoothScroll({
      scrollElement: $('.dialog-wrapper'),
      scrollTarget: '#top',
      afterScroll: function() {
        if(history.pushState) { history.pushState(null, null, $(this).attr('href'));
        } else { location.hash = $(this).attr('href'); }
      }
    });
    
  });


  // Sticky kit
  $('.stick-in-parent').each(function() {
    $offset = ($(this).attr('data-offset')) ? $(this).attr('data-offset') : 0;
    $(this).stick_in_parent({ offset_top: $offset });
  });

  $('[href="#readmore"]').click(function(e) {
    e.preventDefault();
    $(this).closest('.section__content').find('.extra').addClass('isVisible');
    $(this).addClass('u-hide');
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
  if($('.diagram').length > 0) {
    diagram_top = $('.diagram').offset().top;
    st1_top = $('.verhaal__text__stage1').offset().top;
    st2_top = $('.verhaal__text__stage2').offset().top;
    st3_top = $('.verhaal__text__stage3').offset().top;
    buffer = 400;

    if( diagram_top > st3_top - buffer ) {
      $('.diagram').removeClass('diagram--stage2').removeClass('diagram--stage2').addClass('diagram--stage3');
    } else if ( diagram_top > st2_top - buffer ) {
      $('.diagram').removeClass('diagram--stage1').removeClass('diagram--stage3').addClass('diagram--stage2');
    } else if ( diagram_top > st1_top - buffer ) {
      $('.diagram').removeClass('diagram--stage2').removeClass('diagram--stage3').addClass('diagram--stage1');
    }
  }
}




// Dialog toggle
function toggleDialog(id) {
  if($('.dialog#' + id)) {
    // $(!$('.dialog#' + id).hasClass('isVisible')) {
    //   $('.dialog-wrapper').
    // }
    $('.dialog-wrapper').toggleClass('isVisible');
    $('.dialog#' + id).toggleClass('isVisible');
    $('#dialog_mask').toggleClass('isVisible');
  }
}
function closeDialog() {
    $('.dialog-wrapper').removeClass('isVisible');
    $('.dialog').removeClass('isVisible');
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

// toggle Nav for mobile
function toggleMenu(state) {
  if (state && state == 'close') {
    $('.nav-toggle .ion').removeClass('ion-android-close').addClass('ion-navicon');
    $('nav').removeClass('isActive');
  } else {
    $('.nav-toggle .ion').toggleClass('ion-navicon ion-android-close');
    $('nav').toggleClass('isActive');
  }
}
$(document).ready(function() {
  $('nav a').click(function() {
    toggleMenu('close');
  });
});




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



// Component: Question interaction
$(document).ready(function() {

  // offerte question clicking
  $('.question__button').click(function(e) {
    e.preventDefault();
    questionAction($(this));
  });

  $('.question').each(function() {
    $val = $(this).find('.offer_form-field').val();
    if($(this).find('.question__button[data-value="' + $val + '"]').length > 0) {
      $(this).find('.question__button').removeClass('question__button--selected');
      $(this).find('.question__button[data-value="' + $val + '"]').addClass('question__button--selected');
      $(this).addClass('question--selected');
    }
  });

});

function questionAction(obj) {
  $question = obj.closest('.question');
  $thisSelected = (obj.hasClass('question__button--selected'));
  $questionSelected = ($question.hasClass('question--selected'));

  if(!$thisSelected) {
    $question.addClass('question--selected');
    $question.find('.question__button').removeClass('question__button--selected');
    obj.addClass('question__button--selected');

    $value = obj.attr('data-value');
    $question.find('.offer_form-field').val($value);
  } else {
    $question.find('.question__button').removeClass('question__button--selected');
    $question.find('.offer_form-field').val('');
    $question.removeClass('question--selected');
  }

  // updateOfferPrice();
}

function updateOfferPrice() {

  $form = $('#offerte');
  $price = 0;

  $form.find('.offer_form-field').each(function(i) {
    $val = parseInt($(this).val());
    if ($val > 0) { $price += $val }
  });

  if ($price > 0) {
    $('.offer__estimate').addClass('isActive');
    $('#offer_price').html('€ ' + $price);
    $('input[name="richtprijs"]').val($price);
  } else {
    $('.offer__estimate').removeClass('isActive');
    $('#offer_price').html('–');
  }

}
