<?php
  $logo_url = get_template_directory_uri() . '/logo.png';
?>

<header class="header" role="banner">
  <div class="container container--header cf">
    <h1 class="header__logo">
      <a class="logo__link" href="/">
        <img class="logo__image" src="<?php echo $logo_url; ?>" width="184" height="49" alt="<?php echo bloginfo( 'name' ); ?>" />
      </a>
    </h1>

    <nav class="menu menu--main">
      <ul class="menu__list menu__list--main">
        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main menu__link--active" href="/">
            <span class="menu__label menu__label--main">Home</span>
          </a>
        </li>

        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main" href="/info">
            <span class="menu__label menu__label--main">Info</span>
          </a>
        </li>

        <li class="menu__item menu__item--main">
          <a class="menu__link menu__link--main" href="/contact">
            <span class="menu__label menu__label--main">Contact</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>