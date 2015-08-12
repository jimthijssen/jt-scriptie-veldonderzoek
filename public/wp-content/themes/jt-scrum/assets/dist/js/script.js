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
function handle_menu_toggle_click() {
  $('#js--menu__toggler').click( function(e) {
    e.preventDefault();

    $('body').toggleClass('menu--toggled');

    if( $('body').hasClass('menu--toggled') ) {
      $('#js--menu--page').height( $('#js--menu--page .menu__list').height() );
    } else {
      $('#js--menu--page').removeAttr('style');
    }
  });
}
function handle_sidebar_toggle_click() {
  $('#js--sidebar__toggler').click( function(e) {
    e.preventDefault();

    $('body').toggleClass('sidebar--toggled');

    if( $('body').hasClass('sidebar--toggled') ) {
      $('.sidebar__share').height( $('.sidebar__share .share__inner').outerHeight() );
    } else {
      $('.sidebar__share').removeAttr('style');
    }
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
    handle_menu_toggle_click();

    handle_sidebar_toggle_click();
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