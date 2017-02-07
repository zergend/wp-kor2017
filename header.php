<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Администрация Кораблинского района</title>
  <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie-only.css" />
  <![endif]-->
  <?php
  if( is_singular($post_types) ){
    echo "<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js?ver=4.7'></script>";
  // fotorama.css & fotorama.js
    echo '<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">';
    echo '<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>';
  }
    ?>

  <?php wp_head();
  global $themeoptions; ?>
</head>
<body>
  <header class="main-header">
    <div class="ie-only-block">
      <strong>ВНИМАНИЕ!</strong> В браузере Internet Explorer сайт отображается некорректно, ведутся работы по обеспечению совместимости.
      Работы могут занять значительный период времени, рекомендуем использовать браузеры, поддерживающие современные web-стандарты:
      <noindex><a href="https://www.mozilla.org/ru/firefox/" target="_blank" rel="nofollow">Mozilla Firefox</a></noindex>,
      <noindex><a href="https://www.google.ru/chrome/" target="_blank" rel="nofollow">Google Chrome</a></noindex>,
      <noindex><a href="https://browser.yandex.ru/" target="_blank">Яндекс.Браузер</a></noindex>,
      <noindex><a href="http://www.opera.com/ru/" target="_blank" rel="nofollow">Оpera</a></noindex>.
    </div>
    <div class="header-inner">
      <div class="header-inner__logo">
        <a href="/" title="На главную">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="92" height="112" alt="Герб">
        </a>
      </div>
      <div class="header-inner__content">
        <div class="header-inner__row1">
          <nav class="menu-horizontal  menu-horizontal--top-left">
            <?php
            wp_nav_menu( array( // меню
              'theme_location'  => 'header-menu',
              'menu'            => '',
              'container'       => false,
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'menu-horizontal__list',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => false,
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new walker_horizontal_nav_menu
            ) );
            ?>
          </nav>
          <div class="header-inner__ftvi">
            <a itemprop="Copy" href="#" class="bt_widget-vi-on" title="Версия для слабовидящих">
              <i class="fa fa-eye fa-3x" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="header-inner__row2">
          <div class="header-inner__title">
            <div class="header-inner__title--name">
              <h1><a href="/" class="header-inner__link">Администрация муниципального образования —
              <br>Кораблинский муниципальный район Рязанской области</a></h1>
            </div>
            <div class="header-inner__title--subname">
              Официальный сайт
            </div>
          </div>
          <div class="header-inner__title--tablet">
            <h1><a href="/" class="header-inner__link">Администрация Кораблинского района</a></h1>
          </div>
          <?php get_search_form(); ?>
        </div>

      </div>
    </div>
  </header>
