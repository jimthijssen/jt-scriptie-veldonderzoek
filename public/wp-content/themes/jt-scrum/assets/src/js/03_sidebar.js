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