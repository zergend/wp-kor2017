<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php kor622017_posted_on();
				echo ", ";
				kor622017_entry_footer();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="fotorama" data-autoplay="true"  data-allowfullscreen="true" data-nav="thumbs">

		<?php
		$content = get_the_content();
		$pattern = '/http.*jpg/';

		$i = preg_match_all($pattern, $content, $matches, PREG_PATTERN_ORDER);
		if ( $i > 0 ) {
			$large_img = array('_XL','_L','_S','_M'); // для замены имени файла на yandex фотках
				for ( $j = 0; $j <= $i - 1; $j++ ) {
					$img_fotorama[$j] = '<img src="'. str_replace($large_img,'_orig',$matches[0][$j]) . '" alt="" class="main-content__image" />';
					echo $img_fotorama[$j];
				}
			} else {
			$img_tmb = '';
			}
		?>
	</div>	<!-- .fotorama -->

	<div class="entry-content">
		<?php
			//$patterns = array();
			//$patterns[0] = '/<p><img.*\/p>/';
			$pattern = '/<img.*\/>/';
			$content = get_the_content();
			$content = apply_filters('the_content', $content);
			echo preg_replace($pattern, '', $content);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
