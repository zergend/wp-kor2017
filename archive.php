<?php get_header(); ?>


<main class="main-content">

<?php get_sidebar("left"); ?>

  <div class="column  column--middle">
    <?php
    		if ( have_posts() ) : ?>

    			<header class="page-header">
    				<?php
    					the_archive_title( '<h1 class="page-header__title">', '</h1>' );
    					the_archive_description( '<div class="page-header__title--description">', '</div>' );
    				?>
    			</header><!-- .page-header -->

    			<?php
    			/* Start the Loop */
    			while ( have_posts() ) : the_post();
    				/*
    				 * Include the Post-Format-specific template for the content.
    				 * If you want to override this in a child theme, then include a file
    				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content', get_post_format() );
    			endwhile;
    			the_posts_navigation();
    		else :
    			get_template_part( 'template-parts/content', 'none' );
    		endif; ?>

  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
