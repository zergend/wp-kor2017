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
      $sticky = get_option('sticky_posts');
      rsort($sticky);
      $sticky = array_slice( $sticky, 0, 7);
      query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
        while (have_posts()) : the_post();
          get_template_part( 'template-parts/content', 'sticky' );
        endwhile;
      wp_reset_query(); // сброс
      ?>

    </div>

    <div class="content-inner">
      <div class="content-block  content-block--helf  content-block--anounce">
        <div class="content-block__label"><a href="<?php echo get_category_link($themeoptions['anounce']); ?>">Объявления >>></a></div>

        <?php
          query_posts('cat=13&posts_per_page=5');
            while (have_posts()) : the_post();
              get_template_part( 'template-parts/content', 'title' );
            endwhile;
          wp_reset_query(); // сброс
        ?>

      </div>
      <div class="content-block  content-block--helf  content-block--news">
        <div class="content-block__label"><a href="<?php echo get_category_link($themeoptions['news']); ?>">Новости >>></a></div>

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
      <div class="content-block__label"><a href="<?php echo get_category_link($themeoptions['video']); ?>">Видео >>></a></div>
      <div class="masonry masonry--video">

      <?php
      $args = array(
      	'post_type' => 'post',
        'posts_per_page' => 4,
      	'tax_query' => array(
      		array(
      			'taxonomy' => 'post_format',
      			'field'    => 'slug',
      			'terms' => array( 'post-format-video' )
      		)
      	)
      );
        query_posts($args);
        while (have_posts()) : the_post();
      ?>
        <div class="masonry__item">
      <?php
        get_template_part( 'template-parts/content', 'masonry' );
      ?>
        </div>
      <?php
        endwhile;
        wp_reset_query(); // сброс
      ?>

      </div> <!-- .masonry .masonry--video -->
    </div>

    <div class="content-block  content-block--full  content-block__gallery">
      <div class="content-block__label">

          <select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
           <option value=""><?php echo esc_attr('Публикации с галереями'); ?></option>
           <?php
            $args = array ('include' => $themeoptions['gallery'] );
            $categories =  get_categories($args);
            foreach ($categories as $category) {
          	$option = '<option value="/category/archives/'.$category->category_nicename.'">';
          	$option .= $category->cat_name;
          	$option .= ' ('.$category->category_count.')';
          	$option .= '</option>';
          	echo $option;
            }
           ?>
          </select>

        </div>
      <div class="masonry masonry--gallery">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'tax_query' => array(
          array(
            'taxonomy' => 'post_format',
            'field'    => 'slug',
            'terms' => array( 'post-format-gallery' )
          )
        )
      );
        query_posts($args);
        while (have_posts()) : the_post();
      ?>
        <div class="masonry__item masonry__item--gallery">
      <?php
        get_template_part( 'template-parts/content', 'masonry' );
      ?>
        </div>
      <?php
        endwhile;
        wp_reset_query(); // сброс
      ?>

      </div> <!-- .masonry .masonry--gallery -->
    </div>
  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
