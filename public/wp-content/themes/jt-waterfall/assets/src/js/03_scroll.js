function handle_window_scroll() {
  if( $('.page__blocks .container').position().top + 100 < $(window).scrollTop() + $(window).height() ) {
    $('.page__blocks .container').addClass('in-view');
  }
}