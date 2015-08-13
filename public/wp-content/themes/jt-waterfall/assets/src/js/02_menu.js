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