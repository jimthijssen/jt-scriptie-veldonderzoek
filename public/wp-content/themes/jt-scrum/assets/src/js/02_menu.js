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