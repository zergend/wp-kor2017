<?php get_header(); ?>


<main class="main-content">

<?php get_sidebar("left"); ?>

  <div class="column  column--middle  single-post">
    <?php
  	while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
