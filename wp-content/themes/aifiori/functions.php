<?php
/**
 * aifiori functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aaifiori
 */
/**
 * Implement the main files.
 */
global $theme_options;
$theme_options = get_option('ci_theme_options');
include('inc/custom-posts.php');
include('inc/shortcodes.php');
include('inc/widgets.php');
include('inc/theme-options.php');
// include('comment-template.php');
if ( ! function_exists( 'wp_new_site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_new_site_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
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
	// add_image_size( 'blog-thumb', 356, 216 , array( 'center', 'center' ) );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'aifiori' ),
		'footer'  => esc_html__( 'Footer', 'aifiori' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
endif;
add_action( 'after_setup_theme', 'wp_new_site_setup' );
/**
 * Enqueue scripts and styles.
 */
function wp_new_site_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('all-min-css', get_template_directory_uri() . '/assets/css/all.min.css');
	wp_enqueue_style('slick-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css');
	wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css');
	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style( 'aifiori-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'all-min-js', get_template_directory_uri() . '/assets/js/all.min.js');
	wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'wp_new_site_scripts' );
