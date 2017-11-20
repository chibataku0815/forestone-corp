<?php
/**
 * info@fores-tone.co.jp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package info@fores-tone.co.jp
 */

if ( ! function_exists( 'infofores_tone_co_jp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function infofores_tone_co_jp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on info@fores-tone.co.jp, use a find and replace
		 * to change 'infofores-tone-co-jp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'infofores-tone-co-jp', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'infofores-tone-co-jp' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'infofores_tone_co_jp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'infofores_tone_co_jp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function infofores_tone_co_jp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'infofores_tone_co_jp_content_width', 640 );
}
add_action( 'after_setup_theme', 'infofores_tone_co_jp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function infofores_tone_co_jp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'infofores-tone-co-jp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'infofores-tone-co-jp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'infofores_tone_co_jp_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// JavaScriptやCSSに付加されるWordPressのバージョン番号削除
function remove_src_wp_ver( $dep ) {
	$dep->default_version = '';
}
add_action( 'wp_default_scripts', 'remove_src_wp_ver' );
add_action( 'wp_default_styles', 'remove_src_wp_ver' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
	wp_enqueue_style( 'icon', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/styles/main.css' );
	//親テーマのfunctions.js
	wp_enqueue_script( 'functions', get_template_directory_uri() . '/dist/scripts/main.js' );
}

remove_action ( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action ( 'wp_print_styles', 'print_emoji_styles' );
