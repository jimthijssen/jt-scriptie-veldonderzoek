function handle_form_button_click() {
  $('.form__submit').click( function(e) {
    e.preventDefault();

    $('body').addClass('form--toggled');
    $('.form__input').addClass('success');

    setTimeout( function() {
      $('body').removeClass('form--toggled');
    }, 2000 );
  });
}