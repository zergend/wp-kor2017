<?php
/**
 * kor622017 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kor622017
 */
if ( ! function_exists( 'kor622017_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kor622017_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in ... location.
	register_nav_menus( array(
		'header-menu' => 'Меню в шапке',
		'sidebar-menu' => 'Меню в боковой колонке'
	) );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kor622017_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

/*
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var){
	if( is_array($var) ){
		// сюда попадает массив со всеми классами li элемента
		// зададим массив, в который будем складировать нужные нам классы, а также сразу зададим, какой будет класс у всех li элементов
		$all_class_li = array('menu-vertical__item');
		foreach($var as $class_li){
			if( $class_li == 'current-menu-item' ){
				$all_class_li[] = 'menu-vertical__item--current'; // класс активного меню
			}
		}
		return $all_class_li;
		}else{
			// сюда попадает ID li элемента, мы его просто "затираем" пустой строкой
			return '';
		}
	}

add_filter('wp_nav_menu_objects', 'css_for_nav_parrent');
function css_for_nav_parrent( $items ){
	foreach( $items as $item ){
		if( __nav_hasSub( $item->ID, $items ) )
			$item->classes[] = 'menu-vertical__item--parent'; // все элементы поля "classes" меню, будут совмещены и выведены в атрибут class HTML тега <li>
	}
	return $items;
}
function __nav_hasSub( $item_id, $items ){
	foreach( $items as $item ){
		if( $item->menu_item_parent && $item->menu_item_parent == $item_id )
			return true;
	}
	return false;
}
*/

}
endif;
add_action( 'after_setup_theme', 'kor622017_setup' );

// функции темы
include('functions/settings.php');

// включение поддержки форматов постов
add_theme_support( 'post-formats', array('aside', 'gallery', 'image', 'video') );

//// walker start

// свой класс построения меню:
class walker_vertical_nav_menu extends Walker_Nav_Menu {

// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
	// depth dependent classes
	$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	$display_depth = ( $depth + 1); // because it counts the first submenu as 0
	$classes = array(
		'menu-vertical__list sub-menu',
		( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
		( $display_depth >=2 ? 'sub-sub-menu' : '' ),
		'menu-depth-' . $display_depth
		);
	$class_names = implode( ' ', $classes );

	// build html
	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}

// add main/sub classes to li's and links
 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	global $wp_query;
	$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

	// depth dependent classes
	$depth_classes = array(
		( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
		( $depth >=2 ? 'sub-sub-menu-item' : '' ),
		( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
		'menu-item-depth-' . $depth
	);
	$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

	// passed classes
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

	// build html
	$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="menu-vertical__item ' . $depth_class_names . ' ' . $class_names . '">';

	// link attributes
	$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

	$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		$args->before,
		$attributes,
		$args->link_before,
		apply_filters( 'the_title', $item->title, $item->ID ),
		$args->link_after,
		$args->after
	);

	// build html
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
}

// свой класс построения меню (горизонтальное):
class walker_horizontal_nav_menu extends Walker_Nav_Menu {

// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
	// depth dependent classes
	$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	$display_depth = ( $depth + 1); // because it counts the first submenu as 0
	$classes = array(
		'menu-horizontal__list sub-menu',
		( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
		( $display_depth >=2 ? 'sub-sub-menu' : '' ),
		'menu-depth-' . $display_depth
		);
	$class_names = implode( ' ', $classes );

	// build html
	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}

// add main/sub classes to li's and links
 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	global $wp_query;
	$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

	// depth dependent classes
	$depth_classes = array(
		( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
		( $depth >=2 ? 'sub-sub-menu-item' : '' ),
		( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
		'menu-item-depth-' . $depth
	);
	$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

	// passed classes
	$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

	// build html
	$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="menu-horizontal__item ' . $depth_class_names . ' ' . $class_names . '">';

	// link attributes
	$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

	$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		$args->before,
		$attributes,
		$args->link_before,
		apply_filters( 'the_title', $item->title, $item->ID ),
		$args->link_after,
		$args->after
	);

	// build html
	$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
}
//// walker end

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kor622017_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Левая панель виджетов', 'kor622017' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Добавьте виджеты.', 'kor622017' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Правая панель виджетов', 'kor622017' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Добавьте виджеты.', 'kor622017' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kor622017_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

 /*
function kor622017_scripts() {
	wp_enqueue_style( 'kor622017-style', get_stylesheet_uri() );
	wp_enqueue_script( 'kor622017-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'kor622017-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kor622017_scripts' );
*/

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

//////////////////////////////////////////////////////////
remove_action('wp_head','feed_links_extra', 3); // ссылки на дополнительные rss категорий
remove_action('wp_head','feed_links', 2); //ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // для сервиса Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // для Windows Live Writer
// add_filter( ‘show_admin_bar’, ‘__return_false’ );
remove_action('wp_head', '_admin_bar_bump_cb'); // убираем админ-панель
remove_action( 'wp_head', 'wp_resource_hints', 2);
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключаем события REST API
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

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
/* ----------------------------------------------------------------
 * Отключаем Emojii
 * ---------------------------------------------------------------- */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
///////////////////////////////
// подключаем jQuery
//
/* function my_scripts_method() {
	// получаем версию jQuery
	wp_enqueue_script( 'jquery' );
	$wp_jquery_ver = $GLOBALS['wp_scripts']->registered['jquery']->ver; // для версий WP меньше 3.6 'jquery' меняем на 'jquery-core'
	$jquery_ver = $wp_jquery_ver == '' ? '1.11.0' : $wp_jquery_ver;

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/'. $jquery_ver .'/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method', 99 ); */
?>
