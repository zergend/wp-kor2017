<?php get_header(); ?>

<div class="main-marque">
  <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
    ПРИРОДОПОЛЬЗОВАТЕЛЯМ О ПРЕДОСТАВЛЕНИИ ОТЧЕТОВ ПО ФОРМЕ № 2-ТП (ОТХОДЫ) ... НОВЫЙ ПОРЯДОК ПРИМЕНЕНИЯ КОНТРОЛЬНО – КАССОВОЙ ТЕХНИКИ ... ПОЗДРАВЛЕНИЕ ГЛАВЫ РАЙОНА С ДНЁМ МАТЕРИ ...
  </marquee>
</div>
<main class="main-content">

  <div class="column  column--left">
    <nav class="menu-vertical">
      <ul class="menu-vertical__list">
        <li class="menu-vertical__item  current-menu-item">
          <a href="#">Главная</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Администрация</a>
        </li>
        <li class="menu-vertical__item  menu-item-has-children">
          <a href="#">Новости</a>
          <ul class="menu-vertical__list  submenu">
            <li class="menu-vertical__item">
              <a href="#">Подменю 1</a>
            </li>
            <li class="menu-vertical__item">
              <a href="#">Подменю 2</a>
            </li>
          </ul>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Дума</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Отдел муниципального заказа и потребительского рынка</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Пожарная безопасность</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Поселения</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="column  column--middle">
    <div class="main-slider">
      <input type="radio" name="point" id="slide1" class="main-slider__btn" checked>
      <input type="radio" name="point" id="slide2" class="main-slider__btn">
      <input type="radio" name="point" id="slide3" class="main-slider__btn">
      <input type="radio" name="point" id="slide4" class="main-slider__btn">
      <input type="radio" name="point" id="slide5" class="main-slider__btn">
      <div class="main-slider__content">
        <div class="main-slider__item  main-slider__item--1" style="background-image: url(http://habrastorage.org/files/3f2/628/bd5/3f2628bd58c8452db516195cb0c9bfc9.jpg); ">
          <a href="#" class="main-slider__link1"></a>
          <a href="#" class="main-slider__link2">Самая главная новость номер один</a>
        </div>
        <div class="main-slider__item  main-slider__item--2" style="background-image: url(http://habrastorage.org/files/3e1/95d/c7f/3e195dc7f5a64469807f49a14f97ba0e.jpg); ">
          <a href="#" class="main-slider__link1"></a>
          <a href="#" class="main-slider__link2">Главная новость 2</a>
        </div>
        <div class="main-slider__item  main-slider__item--3" style="background-image: url(http://habrastorage.org/files/663/6b1/d4f/6636b1d4f8e643d29eab8c192fc1cea3.jpg); ">
          <a href="#" class="main-slider__link1"></a>
          <a href="#" class="main-slider__link2">новость 03</a>
        </div>
        <div class="main-slider__item  main-slider__item--4" style="background-image: url(http://habrastorage.org/files/e59/424/c04/e59424c046be4dab897d84ab015c87ea.jpg); ">
          <a href="#" class="main-slider__link1"></a>
          <a href="#" class="main-slider__link2">новость 04</a>
        </div>
        <div class="main-slider__item  main-slider__item--5" style="background-image: url(http://habrastorage.org/files/53c/ff6/c1c/53cff6c1caf842368c70b8ef892d8402.jpg); ">
          <a href="#" class="main-slider__link1"></a>
          <a href="#" class="main-slider__link2">Самая главная новость номер пять</a>
        </div>
      </div>
      <div class="main-slider__controls">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
        <label for="slide5"></label>
      </div>
    </div>

    <div class="content-block  content-block--full  content-block--sticky content-block--alert">
      <div class="content-block__label">Обратите внимание!</div>
    </div>

    <div class="content-inner">
      <div class="content-block  content-block--helf  content-block--anounce">
        <div class="content-block__label">Объявления</div>

      </div>
      <div class="content-block  content-block--helf  content-block--news">
        <div class="content-block__label">Новости</div>
      </div>
    </div>

    <div class="content-block  content-block--full  content-block__video-posts">
      <div class="content-block__label">Видео</div>
    </div>

    <div class="content-block  content-block--full  content-block__gallery">
      <div class="content-block__label">Фотогалерея</div>
    </div>
  </div>

  <div class="column  column--right">
    <div class="widget-area">
      <a class="w--red-line" href="/goryachaya-liniya/">Противодействие коррупции</a>
      <a class="w--red" href="/goryachaya-liniya/">Горячая линия</a>
    </div>
    <div class="widget-area">
      <a class="w--blue" href="/goryachaya-liniya/">Ещё одна Горячая линия на пару строк</a>
    </div>
    <div class="widget-area">
      <a class="w--blue-line" href="/goryachaya-liniya/">Ещё одна Горячая линия на пару строк в синей рамке на белом фоне</a>
    </div>
    <div class="widget-area">
      <a class="w--red-line" href="/goryachaya-liniya/">Ещё одна Горячая линия на пару строк в красной рамке на белом фоне</a>
    </div>

  </div>

</main>

<?php get_footer(); ?>
