<?php
  $logo_url = get_template_directory_uri() . '/logo-red.png';
?>

<header class="header" role="banner">
  <div class="container cf">
    <h1 class="header__logo">
      <a class="logo__link" href="/">
        <img class="logo__img" src="<?php echo $logo_url; ?>" alt="<?php echo bloginfo( 'name' ); ?>" width="157" height="38" />
      </a>
    </h1>

    <nav class="menu menu--main menu--main-desktop">
      <ul class="menu__list menu__list--main">
        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main menu--active" href="#">Home</a>
        </li>

        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main" href="#">Movies</a>
        </li>

        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main" href="#">Services</a>
        </li>

        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main" href="#">Contact</a>
        </li>
      </ul>
    </nav>

    <div class="menu-toggler-wrapper">
      <a href="#" id="js--menu-opener" class="menu-toggler menu-toggler--opener">
        <span class="hamburger-stripe hamburger-stripe--1"></span>
        <span class="hamburger-stripe hamburger-stripe--2"></span>
        <span class="hamburger-stripe hamburger-stripe--3"></span>
      </a>
    </div>
  </div> <!--- .header > .container -->
</header> <!--- .header -->

<div class="header__banner">
  <div class="banner_search">
    <form class="search_form">
      <input class="input__search" placeholder="Textfield" type="text" />
      <input class="input__submit btn btn--grey" type="submit" value="Zoek" />
    </form>
  </div>
</div>

<nav class="menu menu--main menu--main-mobile">
  <div class="container cf">
    <h1 class="header__logo header__logo--mobile">
      <a class="logo__link" href="/">
        <img class="logo__img" src="<?php echo $logo_url; ?>" alt="<?php echo bloginfo( 'name' ); ?>" width="157" height="38" />
      </a>
    </h1>

    <div class="menu-toggler-wrapper">
      <a href="#" id="js--menu-closer" class="menu-toggler menu-toggler--closer">
        <span class="close-stripe close-stripe--1"></span>
        <span class="close-stripe close-stripe--2"></span>
      </a>
    </div>

    <ul class="menu__list menu__list--main menu__list--mobile">
      <li class="menu__item menu__item--main">
        <a class="menu__link menu__link--main menu--active" href="#">Home</a>
      </li>

      <li class="menu__item menu__item--main">
        <a class="menu__link menu__link--main" href="#">Movies</a>
      </li>

      <li class="menu__item menu__item--main">
        <a class="menu__link menu__link--main" href="#">Services</a>
      </li>

      <li class="menu__item menu__item--main">
        <a class="menu__link menu__link--main" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>