<?php
if ( ! function_exists( 'portx_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function portx_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on portx, use a find and replace
	 * to change 'portx' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'portx', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main-menu' => __( 'Main Menu', 'portx' ),
		'footer-menu' => __( 'Footer Menu', 'portx' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link', 'gallery', 'audio'
	) );

	remove_theme_support('widgets-block-editor');

}
endif; // portx_setup
add_action( 'after_setup_theme', 'portx_setup' );

/** register widget **/
function portx_register_widget_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'textdomain' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown on blog sidebar widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="sidebar__wrapper %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget-title rc__post-title">',
		'after_title'   => '</h3>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer 1', 'textdomain' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on footer-1 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer__widget  tp-footer-col-1 mb-40  wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer__widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'textdomain' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on footer-2 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer__widget tp-footer-col-2  mb-40 fix wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer__widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'textdomain' ),
		'id'            => 'footer-3',
		'description'   => __( 'Widgets in this area will be shown on footer-3 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer__widget tp-footer-col-3  mb-40  wow fadeInUp   %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer__widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'textdomain' ),
		'id'            => 'footer-4',
		'description'   => __( 'Widgets in this area will be shown on footer-3 widget.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="tp-footer__widget tp-footer-col-4 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="tp-footer__widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'portx_register_widget_sidebar' );


// portx css and js configuration
function portx_scripts() {
	// CSS Configuration
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.css', array(), '5.0.2', 'all' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.0.2', 'all' );

	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '5.0.2', 'all' );

	wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all' );

	wp_enqueue_style( 'jarallax', get_template_directory_uri() . '/assets/css/jarallax.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), '1.12.1', 'all' );

	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.12.1', 'all' );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/css/nouislider.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '6.5.0', 'all' );
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// JS Configuration
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ), '5.1.3', true );

	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'jquery' ), '4.1.4', true );

	wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array( 'jquery' ), '4.1.4', true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '1.1.0', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.1.0', true );
	
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'nouislider', get_template_directory_uri() . '/assets/js/nouislider.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), '6.5.0', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.1.3', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portx_scripts' );

include_once('inc/nav-walker.php');
include_once('inc/template-function.php');
if ( class_exists( 'Kirki' ) ){
	include_once('inc/portx-kirki.php');
}
