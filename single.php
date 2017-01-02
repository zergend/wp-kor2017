<?php get_header(); ?>


<main class="main-content">

<?php get_sidebar("left"); ?>

  <div class="column  column--middle  single-post">
    <div class="fotorama" data-autoplay="true"  data-allowfullscreen="true" data-nav="thumbs">

      <?php
  		while ( have_posts() ) : the_post();
      $content = get_the_content();
      $pattern = '/http.*jpg/';

      $i = preg_match($pattern, $content, $matches);
      if ( $i > 0 ) {
        $large_img = array('_XL','_L','_S','_M'); // для замены имени файла на yandex фотках
          for ( $j = 0; $j == $i - 1; $j++ ) {

          $img_tmb[$j] = '<img src="'. str_replace($large_img,'_orig',$matches[$j]) . '" alt="" class="main-content__image" />';
          echo $img_tmb[$j];
          }
        } else {
        $img_tmb = '';
        }
      ?>
    </div>
    <?php
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile; // End of the loop.
		?>

  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
