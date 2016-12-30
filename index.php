<?php get_header(); ?>

<div class="main-marque">
  <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
    ПРИРОДОПОЛЬЗОВАТЕЛЯМ О ПРЕДОСТАВЛЕНИИ ОТЧЕТОВ ПО ФОРМЕ № 2-ТП (ОТХОДЫ) ... НОВЫЙ ПОРЯДОК ПРИМЕНЕНИЯ КОНТРОЛЬНО – КАССОВОЙ ТЕХНИКИ ... ПОЗДРАВЛЕНИЕ ГЛАВЫ РАЙОНА С ДНЁМ МАТЕРИ ...
  </marquee>
</div>
<main class="main-content">

<?php get_sidebar("left"); ?>

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
      <?php	// НОВОСТИ школы
				if ( have_posts() ) : // если имеются записи в блоге.
				query_posts('cat=1&posts_per_page=10');   // указываем ID рубрики, которую необходимо вывести и количество постов.

				while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
				?>
				<p><span class="postdate-tab"><?php the_time('d.m.Y') ?> | </span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
				<?php
				endwhile;  // завершаем цикл.
				endif;
				/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
				wp_reset_query();
				?>
    </div>

    <div class="content-inner">
      <div class="content-block  content-block--helf  content-block--anounce">
        <div class="content-block__label">Объявления</div>
        <?php	// НОВОСТИ школы
				if ( have_posts() ) : // если имеются записи в блоге.
				query_posts('cat=2&posts_per_page=10');   // указываем ID рубрики, которую необходимо вывести и количество постов.

				while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
				?>
				<p><span class="postdate-tab"><?php the_time('d.m.Y') ?> | </span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
				<?php
				endwhile;  // завершаем цикл.
				endif;
				/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
				wp_reset_query();
				?>

      </div>
      <div class="content-block  content-block--helf  content-block--news">
        <div class="content-block__label">Новости</div>
      </div>
    </div>

    <div class="content-block  content-block--full  content-block__video-posts">
      <div class="content-block__label">Видео</div>
      <?php	// НОВОСТИ школы
				if ( have_posts() ) : // если имеются записи в блоге.
				query_posts('cat=10&posts_per_page=10');   // указываем ID рубрики, которую необходимо вывести и количество постов.

				while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
				?>
				<p><span class="postdate-tab"><?php the_time('d.m.Y') ?> | </span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
				<?php
				endwhile;  // завершаем цикл.
				endif;
				/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
				wp_reset_query();
				?>
    </div>

    <div class="content-block  content-block--full  content-block__gallery">
      <div class="content-block__label">Фотогалерея</div>
    </div>
  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
