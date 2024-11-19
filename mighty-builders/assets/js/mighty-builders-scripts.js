(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".mighty-builders-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".mighty-builders-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".mighty-builders-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".mighty-builders-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".mighty-builders-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".mighty-builders-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".mighty-builders-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".mighty-builders-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".mighty-builders-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".mighty-builders-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".mighty-builders-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".mighty-builders-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".mighty-builders-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".mighty-builders-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".mighty-builders-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".mighty-builders-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".mighty-builders-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".mighty-builders-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".mighty-builders-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".mighty-builders-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".mighty-builders-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".mighty-builders-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".mighty-builders-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".mighty-builders-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".mighty-builders-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".mighty-builders-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".mighty-builders-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".mighty-builders-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".mighty-builders-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".mighty-builders-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".mighty-builders-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".mighty-builders-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".mighty-builders-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".mighty-builders-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".mighty-builders-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".mighty-builders-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".mighty-builders-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".mighty-builders-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".mighty-builders-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".mighty-builders-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".mighty-builders-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".mighty-builders-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".mighty-builders-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".mighty-builders-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".mighty-builders-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var mightyBuildersStickyMenu = $(".mighty-builders-sticky-menu");
    var mightyBuildersStickyNavigation = $(".mighty-builders-sticky-navigation");

    if (mightyBuildersStickyMenu.length && scrollTop > 0) {
      mightyBuildersStickyMenu.addClass("sticky-menu-enabled mighty-builders-zoom-in-up");
    } else {
      mightyBuildersStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".mighty-builders-scrollto-top a").fadeIn();
    } else {
      jQuery(".mighty-builders-scrollto-top a").fadeOut();
    }
  });
  jQuery(".mighty-builders-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".mighty-builders-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });
})(jQuery);
