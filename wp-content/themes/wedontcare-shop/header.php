<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Character set -->
    <meta charset="utf-8">

    <!--

    - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    - Website programmed by Viktor Chin for We Don't Care -
    - - - - - - - - - - - viktorchin.nl - - - - - - - - - -

    -->

    <!-- Viewport scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site assets -->
    <?php wp_head(); ?>

    <!-- Favicon stuff -->
    <link rel="apple-touch-icon" sizes="180x180" href="/dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="/dist/favicon/site.webmanifest">
    <link rel="mask-icon" href="/dist/favicon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
  </head>

  <body <?php body_class(); ?>>
    <?php
      // if (has_nav_menu("main")) {
        ?>
        <header class="site-header">
          <div class="container">
            <?php
              // wp_nav_menu(array(
              //   "menu"            => "Main menu",
              //   "menu_class"      => "site-navigation__items",
              //   "container_class" => "site-navigation",
              //   "container"       => "nav",
              //   "item_class"      => "site-navigation__item",
              //   "link_class"      => "site-navigation__link",
              //   "theme_location"  => "main"
              // ));
            ?>
            <nav class="site-navigation">
              <ul class="site-navigation__items">
                <li class="site-navigation__item">
                  <?php $link = "https://wedontcaregroup.com/"; ?>

                  <a class="site-navigation__link" href="<?php echo $link; ?>" target="_self">WDC Universe</a>
                </li>

                <li class="site-navigation__item">
                  <?php $link = wc_get_page_permalink("shop"); ?>

                  <a class="site-navigation__link" href="<?php echo $link; ?>" target="_self">Shop</a>
                </li>

                <li class="site-navigation__item">
                  <?php $link = wc_get_page_permalink("cart"); ?>

                  <a class="site-navigation__link" href="<?php echo $link; ?>" target="_self">Cart</a>
                </li>
              </ul>
            </nav>
          </div>
        </header>
        <?php
      // }
    ?>

    <main>
      <div class="container">
