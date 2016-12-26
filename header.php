<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Администрация Кораблинского района</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />

</head>
<body>
  <header class="main-header">
    <div class="header-inner">
      <div class="header-inner__logo">
        <a href="/" title="На главную">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="92" height="112" alt="Герб">
        </a>
      </div>
      <div class="header-inner__content">
        <div class="header-inner__row1">
          <nav class="menu-horizontal  menu-horizontal--top-left">
            <ul class="menu-horizontal__list">
              <li class="menu-horizontal__item">
                <a href="#">Новости</a>
              </li>
              <li class="menu-horizontal__item">
                <a href="#">Анонсы, объявления</a>
              </li>
              <li class="menu-horizontal__item">
                <a href="#">Открытые данные</a>
              </li>
            </ul>
          </nav>
          <div class="site-search">
            <form action="http://www.korablino62.ru/" method="get" class="site-search__form">
                <input name="s" placeholder="Поиск по сайту" type="search" required>
                <button type="submit"></button>
            </form>
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

          <div class="header-inner__row3">
            <div class="header-inner__ftvi">
              <a itemprop="Copy" href="#" class="bt_widget-vi-on" title="Версия для слабовидящих">
                <i class="fa fa-eye fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="menu-horizontal  menu-horizontal--buttom-right">
              <ul class="menu-horizontal__list">
                <li class="menu-horizontal__item">
                  <a href="#">Нормативная база</a>
                </li>
                <li class="menu-horizontal__item">
                  <a href="#">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>
