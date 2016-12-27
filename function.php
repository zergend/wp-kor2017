<?php


remove_action('wp_head','feed_links_extra', 3); // ссылки на дополнительные rss категорий
remove_action('wp_head','feed_links', 2); //ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // для сервиса Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // для Windows Live Writer
// add_filter( ‘show_admin_bar’, ‘__return_false’ );
remove_action('wp_head', '_admin_bar_bump_cb'); // убираем админ-панель

// убираем разные ссылки при отображении поста - следующая, предыдущая запись, оригинальный url и т.п.
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','rel_canonical');
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head','wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head','wp_generator');  // убирает версию wordpress
function remove_wp_version() {
	return '';
}
add_filter('the_generator', 'remove_wp_version');

// скрыть версию WordPress
function gb_hide_wp_ver()
{
    return '';
}
add_filter('the_generator','gb_hide_wp_ver');
?>
