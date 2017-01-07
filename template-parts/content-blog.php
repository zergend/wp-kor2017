<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="archive__entry-content">
		<?php
			$content = get_the_content();

			$pattern = '/http.*jpg/';

			if ( preg_match($pattern, $content, $matches) > 0) {
				$large_img = array('_XL','_L','_S','_orig'); // для замены имени файла на yandex фотках
				$img_tmb = '<img width="300" src="'. str_replace($large_img,'_M',$matches[0]) . '" alt="" class="archive__tmb-image" />';
				} else {
				$img_tmb = '';
				}
		?>

		<?php
			if ($img_tmb != '') {
				echo '<div class="archive__tmb">';
				echo '<a href="';
				echo the_permalink();
				echo '" rel="bookmark">';
				echo $img_tmb;
				echo '</a>';
				echo '</div>';
			}
		?>

		<div class="archive__post">
			<header class="archive__entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="archive__entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="archive__entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				if ( 'post' === get_post_type() ) : ?>
				<div class="archive__meta">
					<?php kor622017_posted_on();
						echo ", ";
						kor622017_entry_footer();
					?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="archive__text">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo (the_title_attribute('echo=0')); ?>">

				<?php 				// первое n знаков в тексте
					$content = strip_tags($content);
					$content = substr($content, 0, 300);
					$content = rtrim($content, "!,.-");
					$content = substr($content, 0, strrpos($content, ' '));
					echo $content;
				?>

						<?php echo '...';?>
					</a>
			</div>
		</div>
	</div><!-- .archive__entry-content -->

</article><!-- #post-## -->
