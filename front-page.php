<?php get_header(); ?>

<div class="main-marque">
  <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
    ПРИРОДОПОЛЬЗОВАТЕЛЯМ О ПРЕДОСТАВЛЕНИИ ОТЧЕТОВ ПО ФОРМЕ № 2-ТП (ОТХОДЫ) ... НОВЫЙ ПОРЯДОК ПРИМЕНЕНИЯ КОНТРОЛЬНО – КАССОВОЙ ТЕХНИКИ ... ПОЗДРАВЛЕНИЕ ГЛАВЫ РАЙОНА С ДНЁМ МАТЕРИ ...
  </marquee>
</div>
<main class="main-content">

<?php get_sidebar("left"); ?>

  <div class="column  column--middle">
    <?php get_template_part( 'template-parts/content', 'main-slider' ); ?>

    <div class="content-block  content-block--full  content-block--sticky content-block--alert">
      <div class="content-block__label content-block__label--alert">Обратите внимание!</div>

      <?php
      query_posts('cat=10&posts_per_page=5');
        while (have_posts()) : the_post();
          get_template_part( 'template-parts/content', 'sticky' );
        endwhile;
      wp_reset_query(); // сброс
      ?>

    </div>

    <div class="content-inner">
      <div class="content-block  content-block--helf  content-block--anounce">
        <div class="content-block__label">Объявления</div>

        <?php
          query_posts('cat=13&posts_per_page=5');
            while (have_posts()) : the_post();
              get_template_part( 'template-parts/content', 'title' );
            endwhile;
          wp_reset_query(); // сброс
        ?>

      </div>
      <div class="content-block  content-block--helf  content-block--news">
        <div class="content-block__label">Новости</div>

        <?php
          query_posts('cat=11&posts_per_page=5');
            while (have_posts()) : the_post();
              get_template_part( 'template-parts/content', 'title' );
            endwhile;
          wp_reset_query(); // сброс
        ?>

      </div>
    </div>

    <div class="content-block  content-block--full  content-block__video-posts">
      <div class="content-block__label">Видео</div>
    </div>

    <div class="content-block  content-block--full  content-block__gallery">
      <div class="content-block__label">Фотогалерея</div>
    </div>
  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
