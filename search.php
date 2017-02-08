<?php get_header(); ?>


<main class="main-content">

<?php get_sidebar("left"); ?>

  <div class="column  column--middle  archive  search-result">

    <?php
		if ( have_posts() ) : ?>

			<header class="archive__page-header">
				<h1 class="archive__page-title"><?php printf( esc_html__( 'Результаты поиска: %s', '_s' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1>
			</header><!-- .page-header -->

      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();
        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'blog' );
      endwhile;
        // the_posts_navigation();
        if (function_exists("kama_pagenavi")) :
          kama_pagenavi();
        endif;
      else :
        get_template_part( 'template-parts/content', 'none' );
      endif; ?>

  </div>

  <?php get_sidebar("right"); ?>

</main>

<?php get_footer(); ?>
