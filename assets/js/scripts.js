(function(jQuery) {
  "use strict"; // Start of use strict


  // Smooth scrolling using jQuery easing
  jQuery('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        alert("hey");
        jQuery('html, body').animate({
          scrollTop: (target.offset().top - 96)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  jQuery('.js-scroll-trigger').click(function() {
    jQuery('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  jQuery('body').scrollspy({
    target: '#mainNav',
    offset: 50
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if (jQuery("#mainNav").offset().top > 100) {
      jQuery("#mainNav").addClass("navbar-shrink");
    } else {
      jQuery("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  jQuery(window).scroll(navbarCollapse);

})(jQuery); // End of use strict
