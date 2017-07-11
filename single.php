<?php get_header(); ?>


<main class="main-content">

<?php get_sidebar("left"); ?>

  <div class="column  column--middle  single-post">
    <?php
  	while ( have_posts() ) : the_post();
      $format_post = get_post_format();
      switch ($format_post) {
        case "gallery":
          get_template_part( 'template-parts/content', 'single-gallery' );
          break;
        case "video":
          get_template_part( 'template-parts/content', 'video' );
          break;
        case "image":
          get_template_part( 'template-parts/content', 'image' );
          break;
        case "aside":
          get_template_part( 'template-parts/content', 'single' );
          break;
        default:
          get_template_part( 'template-parts/content', 'single' );
      }
  		endwhile; // End of the loop.
		?>

  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
