// (function(jQuery) {
//   "use strict"; // Start of use strict
//
//
//   // Smooth scrolling using jQuery easing
//   jQuery('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//       var target = jQuery(this.hash);
//       target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
//       if (target.length) {
//         alert("hey");
//         jQuery('html, body').animate({
//           scrollTop: (target.offset().top - 96)
//         }, 1000, "easeInOutExpo");
//         return false;
//       }
//     }
//   });
//
//   // Closes responsive menu when a scroll trigger link is clicked
//   jQuery('.js-scroll-trigger').click(function() {
//     jQuery('.navbar-collapse').collapse('hide');
//   });
//
//   // Activate scrollspy to add active class to navbar items on scroll
//   jQuery('body').scrollspy({
//     target: '#mainNav',
//     offset: 50
//   });
//
//   // Collapse Navbar
//   var navbarCollapse = function() {
//     if (jQuery("#mainNav").offset().top > 100) {
//       jQuery("#mainNav").addClass("navbar-shrink");
//     } else {
//       jQuery("#mainNav").removeClass("navbar-shrink");
//     }
//   };
//   // Collapse now if page is not at top
//   navbarCollapse();
//   // Collapse the navbar when page is scrolled
//   jQuery(window).scroll(navbarCollapse);
//
// })(jQuery); // End of use strict


jQuery(document).ready(function(jQuery) {
  // Override parent theme custom.js line 83 to stop <a> click closing navbar
  jQuery('.navbar-collapse ul li a').unbind('click');
  
  // For closing the navbar when clicking outside of the container
  jQuery('body').bind('click', function(e) {
      if(jQuery(e.target).closest('.collapse').length == 0) {
          var opened = jQuery('.navbar-collapse').hasClass('collapse');
          if ( opened === true ) {
              jQuery('.navbar-collapse').collapse('hide');
              jQuery('#mainNav').removeClass('open');
          }
      }
  });

  jQuery(window).on('scroll', _.debounce(function() {
    if (jQuery("#mainNav").offset().top > 10) {
      jQuery("#mainNav").addClass("scrolled");
    } else {
      jQuery("#mainNav").removeClass("scrolled");
    }
  }, 150));



  jQuery( 'p:empty' ).remove();
});
