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

	<div class="entry-content">
		<?php
			$content = get_the_content();

			$pattern = '/http.*jpg/';

			if ( preg_match($pattern, $content, $matches) > 0) {
				$large_img = array('_XL','_L','_S','_orig'); // для замены имени файла на yandex фотках
				$img_tmb = '<img width="300" src="'. str_replace($large_img,'_M',$matches[0]) . '" alt="" ';
				} else {
				$img_tmb = '<img src="/img/flag.png" class="tmb mp-widget-tmb" align="middle" alt="Фото" ';
				}
				$img_tmb = $img_tmb . ' class="aligncenter tmb mp-widget-tmb" width="300" />';

		?>
		<div class="entry-content__post">
			<div class="entry-content__tmb">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo (the_title_attribute('echo=0')); ?>">
					<?php echo $img_tmb;?>
				</a>
			</div>
			<div class="entry-content__text">
				<?php 				// первое предложение в тексте
					$content = get_the_content();
					$patern="#<[\s]*p[\s]*>([^<]*)<[\s]*/p[\s]*>#i";
					if(preg_match($patern, $content, $matches)) echo "<span>".$matches[1]."..</span>";

				?>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
