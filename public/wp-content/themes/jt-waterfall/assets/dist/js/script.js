// ==========================================================================
// Helper Functions
// ==========================================================================

// ==========================================================================
// Function returns an array with viewport width and height, that can be used
// to activate JS on certain CSS viewports. How to use: get_viewport_size().height
//
// $(document).width(), $(body).width can return different values between
// browsers, this function always returns the same value
// ==========================================================================

get_viewport_size = function() {
  var e = window, a = 'inner';
  if (!('innerWidth' in window )) {
    a = 'client';
    e = document.documentElement || document.body;
  }
  return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
};
function handle_menu_toggler_click() {
  $('#js--menu-opener').click(function(e) {
    e.preventDefault();
    $('body').addClass('menu--opened');
  });

  $('#js--menu-closer').click(function(e) {
    e.preventDefault();
    $('body').removeClass('menu--opened');
  });
}
// ==========================================================================
// Init Scripts
// ==========================================================================

;(function ($) {

  // ==========================================================================
  // Execute functions on document.ready
  // ==========================================================================

  $( document ).ready( function() {
    handle_menu_toggler_click();
  });

  // ==========================================================================
  // Execute functions on window.load
  // ==========================================================================

  $( window ).load( function() {

  });

  // ==========================================================================
  // Execute functions on window.resize
  // ==========================================================================

  $( window ).resize( function() {

  });

})(jQuery);