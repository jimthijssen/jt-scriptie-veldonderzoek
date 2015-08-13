function handle_form_button_click() {
  $('.submit--footer').click( function(e) {
    e.preventDefault();

    $('body').addClass('form--toggled');
    $('.input--footer').addClass('success');

    setTimeout( function() {
      $('body').removeClass('form--toggled');
    }, 2000 );
  });
}