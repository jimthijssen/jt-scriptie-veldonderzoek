    </div> <!--- .wrap -->

    <footer class="footer">
      <div class="footer__outer">
        <div class="footer__top"></div>
        <div class="container">
          <div class="footer__inner">
            <div class="footer__title-wrapper title--striped">
              <h2 class="footer__title color--grey">Where to find us?</h2>
            </div>

            <div class="footer__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/google-map.png" width="973" height="329" alt="" />
            </div>

            <div class="footer__content cf">
              <div class="footer__text">
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.</p>
              </div>

              <div class="footer__form">
                <form class="form--footer cf">
                  <p class="warning warning--success form__warning">An example alert style</p>
                  <input type="text" class="input--footer" placeholder="Text field">
                  <input type="text" class="input--footer" placeholder="Text field">
                  <textarea class="input--footer">Text area</textarea>
                  <input type="submit" class="btn btn--red submit--footer">
                </form>
              </div>
            </div>
          </div>
        </div> <!--- .footer > .container -->
      </div>
    </footer> <!--- .footer -->

    <?php wp_footer(); // Footer hook for javascript parsing ?>
  </body>
</html>