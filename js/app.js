jQuery(document).ready(function (jQuery) {
  jQuery("a").on('click', function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 1000, function () {
        window.location.hash = hash;
      });
    }
  });
});

jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();

  if (scroll > 20) {
    jQuery(".clearHeader").addClass("change");
    jQuery(".burger-menu").addClass("change");
  } else {
    jQuery(".clearHeader").removeClass("change");
    jQuery(".burger-menu").removeClass("change");
  }
});

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = jQuery('#header').outerHeight();

jQuery(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = jQuery(this).scrollTop();

  if (Math.abs(lastScrollTop - st) <= delta)
    return;

  if (st > lastScrollTop && st > navbarHeight) {
    jQuery('.header-section__').removeClass('nav-down').addClass('nav-up');
  } else {
    if (st + jQuery(window).height() < jQuery(document).height()) {
      jQuery('.header-section__').removeClass('nav-up').addClass('nav-down');
    }
  }
  lastScrollTop = st;
}


/*Header*/

function headerArea() {

  jQuery(".menu-item a").hover(function () {
    jQuery('.menu-item a').addClass("hvr");
  },
    function () {
      jQuery('.menu-item a').removeClass("hvr");
    });

  jQuery('.burger-menu').click(function () {
    jQuery('.burger-menu').toggleClass('burger-menu--opened');
    jQuery('.burger-menu').toggleClass('burger-menu--closed');
    jQuery('.overlay').toggleClass('open');
    jQuery('html').toggleClass('cut-off');
    jQuery('section .abso').toggleClass('overflow__ pointer__');
    jQuery('.header-section__').toggleClass('open-nav-menu');
  });

  jQuery(".shade").click(function () {
    jQuery(".overlay").removeClass("open");
    jQuery(".burger-menu").removeClass("burger-menu--opened");
    jQuery(".burger-menu").addClass("burger-menu--closed");
    jQuery('html').toggleClass('cut-off');
    jQuery('section .abso').toggleClass('overflow__ pointer__');
    jQuery('.header-section__').toggleClass('open-nav-menu');
  });

}

headerArea();



// The Barba JS

function barba_effect() {


  Barba.Pjax.start();
  Barba.Prefetch.init()


  function noBarba() {
    jQuery('.products_grid_section a').addClass('no-barba');
    jQuery('.woocommerce section a').addClass('no-barba');
  }

  noBarba();


  Barba.Dispatcher.on('transitionCompvared', scroll);

  function pageTransition() {

  }


  var tl = new TimelineLite();
  var tm = new TimelineMax();

  Barba.Dispatcher.on('linkClicked', function () {
    /*   pageTransition();*/

    /*   move();*/
    jQuery('#progressBar').css({ 'opacity': '1', 'width': '0%' })
    headerArea();
  });


  var FadeTransition = Barba.BaseTransition.extend({
    start: function () {
      /**
       * This function is automatically called as soon the Transition starts
       * this.newContainerLoading is a Promise for the loading of the new container
       * (Barba.js also comes with an handy Promise polyfill!)
       */

      // As soon the loading is finished and the old page is faded out, var's fade the new page
      Promise
        .all([this.newContainerLoading, this.fadeOut()])
        .then(this.fadeIn.bind(this));
    },

    fadeOut: function () {
      /**
       * this.oldContainer is the HTMLElement of the old Container
       */
      var old = jQuery(this.oldContainer);

      return gsap.to(old, 1.5, { y: '100%', delay: 1, duration: 3, ease: CustomEase.create("custom", "M0,0 C0.934,0 0.902,0.22 0.912,0.268 0.99,0.644 0.948,0.672 1,0.988 ") });

    },

    fadeIn: function () {
      /**
       * this.newContainer is the HTMLElement of the new Container
       * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
       * Please note, newContainer is available just after newContainerLoading is resolved!
       */

      var _this = this;
      var el = jQuery(this.newContainer);
      var toPull = el.find('.first-section');



      tm.from(toPull, 0.5, { y: '-100%', duration: 2, ease: "power3.out" });

      $('html, body').animate(
        {
          scrollTop: $('body').offset().top,
        },
        0,
        'linear'
      );

      _this.done();

    }
  });

  /**
   * Next step, you have to tell Barba to use the new Transition
   */

  Barba.Pjax.getTransition = function () {
    /**
     * Here you can use your own logic!
     * For example you can use different Transition based on the current page or link...
     */

    return FadeTransition;
  };



  Barba.Dispatcher.on('newPageReady', function (currentStatus, oldStatus, container, newPageRawHTML) {
    headerArea();
    jQuery('html').removeClass('cut-off');
    jQuery('#overlay.overlay').removeClass('open');
    jQuery('header .burger-menu').removeClass('burger-menu--opened');
    jQuery('header .burger-menu').addClass('burger-menu--closed');


    tl.to('#progressBar', 2, {
      delay: 0.2,
      width: '100%', duration: 2, ease: "power3.in"
    }).to('#progressBar', { opacity: 0 });

  });

}

/*barba_effect();*/


// Button Animation Magnet

$('.button-wrapper__').mouseleave(function (e) {

  var btnText = $(this).find('.button-text__');
  var btnBack = $(this).find('.button-back__');
  TweenMax.to(this, 0.3, { scale: 1 });
  TweenMax.to(btnText, 0.3, { scale: 1, x: 0, y: 0 });
  TweenMax.to(btnBack, 0.3, { scale: 1, x: 0, y: 0 });
});

$('.button-wrapper__').mouseenter(function (e) {
  var btnBack = $(this).find('.button-back__');
  TweenMax.to(this, 0.3, { transformOrigin: '0 0', scale: 1 });
  TweenMax.to(btnBack, 0.3, { scale: 1.3 });
});

$('.button-wrapper__').mousemove(function (e) {
  /* callParallax(e);*/

  var target1 = $(this).find('.button-back__');
  var movement1 = 60;
  var target2 = $(this).find('.button-text__');
  var movement2 = 40;


  var $this = $(this);

  var boundingRect = $this[0].getBoundingClientRect();
  var relX = e.pageX - boundingRect.left;
  var relY = e.pageY - boundingRect.top;
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  TweenMax.to(target1, 0.3, {
    x: (relX - boundingRect.width / 2) / boundingRect.width * movement1,
    y: (relY - boundingRect.height / 2 - scrollTop) / boundingRect.width * movement1,
    ease: Power2.easeOut
  });

  TweenMax.to(target2, 0.3, {
    x: (relX - boundingRect.width / 2) / boundingRect.width * movement2,
    y: (relY - boundingRect.height / 2 - scrollTop) / boundingRect.width * movement2,
    ease: Power2.easeOut
  });


});


// Services Video


function services_function() {

  var serviceList = $('.services-list li');

  serviceList.hover(function () {
    $('.services-video .video__').removeClass('reveal');
    $('video').trigger('pause');

    if ($(this).hasClass('service-1')) {
      $('.services-video .video-1').addClass('reveal');
      $('.services-video .video-1 video').trigger('play');
    }
    else if ($(this).hasClass('service-2')) {
      $('.services-video .video-2').addClass('reveal');
      $('.services-video .video-2 video').trigger('play');
    }
    else if ($(this).hasClass('service-3')) {
      $('.services-video .video-3').addClass('reveal');
      $('.services-video .video-3 video').trigger('play');
    }
    else if ($(this).hasClass('service-4')) {
      $('.services-video .video-4').addClass('reveal');
      $('.services-video .video-4 video').trigger('play');
      console.log('remove reveal 4');
    }

  }, function () {
    $('.services-video .video__').removeClass('reveal');
  });

}
services_function();


// Header change on scroll Depends on section background

function header_change() {

  var scene;
  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  // Run through all sections
  var items = $("section.section");

  items.each(function () {
    var height = $(this).height(); //height of current element
    var this__ = $(this);


    scene = new ScrollMagic.Scene({
      duration: height,
      triggerElement: this,
      triggerHook: 0,
      reverse: true,
    })
      .on("enter leave", function () {
        //console.log(image);
        $('.env__').removeClass('active-z');
        if (this__.hasClass("light-env")) {

          $('.header-light').addClass('active-z');
        }
        else if (this__.hasClass("dark-env")) {

          $('.header-dark').addClass('active-z');
        }
        else if (this__.hasClass("blue-env")) {
          $('.header-blue').addClass('active-z');
        }
      })
      .addIndicators({ name: " - indicator " }) // Testing
      .addTo(controller);
  });


}

/*jQuery(window).load(function(){
  header_change();
  jQuery(window).resize(function(){


    if (window.RT) clearTimeout(window.RT);
      window.RT = setTimeout(function()
      {
        this.location.reload(false);
      }, 50);
  });
});*/