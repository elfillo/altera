<?php
//styles
function enqueue_styles(){
	wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css', null, false);
	wp_enqueue_style('reset', get_template_directory_uri() .'/css/reset.css', null, false);
	wp_enqueue_style('swiper', get_template_directory_uri() .'/css/swiper.css', null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
//scripts
function enqueue_script(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jq', get_template_directory_uri() .'/js/jquery-3.2.1.min.js', null, true);
	wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('jq'), null, true);
	wp_enqueue_script('ajax_custom', get_template_directory_uri() .'/js/ajax.js', array('jq'), null, true);
	wp_enqueue_script('swiperLib', get_template_directory_uri() .'/js/swiper.min.js', array('jq'), null, true);
	wp_enqueue_script('swiper', get_template_directory_uri() .'/js/swiper-main.js', array('jq', 'swiperLib'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_script');
//header_menu
register_nav_menu('Main', 'Основное меню');
register_nav_menu('Footer', 'Футер меню');
register_nav_menu('Shop', 'Магазин');

//add thumbnails
add_theme_support( 'post-thumbnails' );
//add support excerpt
add_post_type_support( 'page', 'excerpt' );

require_once ('parts/admin/helpers.php');
require_once ('parts/admin/post_types.php');
require_once ('parts/admin/ajax.php');
require_once ('parts/admin/woocommerce.php')
//require_once ('parts/admin/custom_fields.php');
//require_once ('parts/admin/booking.php');

?>