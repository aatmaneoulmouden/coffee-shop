<?php

/**
 * coffeeshop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coffeeshop
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coffeeshop_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on coffeeshop, use a find and replace
		* to change 'coffeeshop' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('coffeeshop', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__('Main Menu', 'coffeeshop'),
			'useful-links' => esc_html__('Useful Links Menu', 'coffeeshop'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'coffeeshop_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'coffeeshop_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coffeeshop_content_width()
{
	$GLOBALS['content_width'] = apply_filters('coffeeshop_content_width', 640);
}
add_action('after_setup_theme', 'coffeeshop_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coffeeshop_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'coffeeshop'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'coffeeshop'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'coffeeshop_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function coffeeshop_scripts()
{
	wp_enqueue_style('coffeeshop-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('coffeeshop-style', 'rtl', 'replace');

	// My custom styles
	wp_enqueue_style('coffeeshop-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	wp_enqueue_style('coffeeshop-fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_style('coffeeshop-main', get_template_directory_uri() . '/assets/css/style.css');


	wp_enqueue_script('coffeeshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// My custom scripts
	wp_enqueue_script('coffeeshop-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0.0', true);
	wp_enqueue_script('coffeeshop-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script('coffeeshop-script', get_template_directory_uri() . '/assets/js/main.js', array('coffeeshop-jquery', 'coffeeshop-swiper'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'coffeeshop_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Add additional classes on li elements
 *
 * @param [type] $classes
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



/**
 * Gallery Section Customizer Settings
 *
 * @param [type] $wp_customize
 * @return void
 */
function gallery_section_customizer($wp_customize)
{
	// Add a section
	$wp_customize->add_section('gallery_section_settings', array(
		'title' => __('Gallery Section Settings', 'coffeeshop'),
		'priority' => 200,
	));

	// Add a setting - IMAGE 1
	$wp_customize->add_setting('gallery_image_1', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// Add a control - IMAGE 1
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_1', array(
		'label' => __('Image 1', 'coffeeshop'),
		'section' => 'gallery_section_settings',
	)));
	
	// Add a setting - IMAGE 2
	$wp_customize->add_setting('gallery_image_2', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// Add a control - IMAGE 2
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_2', array(
		'label' => __('Image 2', 'coffeeshop'),
		'section' => 'gallery_section_settings',
	)));
	// Add a setting - IMAGE 3
	$wp_customize->add_setting('gallery_image_3', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// Add a control - IMAGE 3
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_3', array(
		'label' => __('Image 3', 'coffeeshop'),
		'section' => 'gallery_section_settings',
	)));
	// Add a setting - IMAGE 4
	$wp_customize->add_setting('gallery_image_4', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// Add a control - IMAGE 4
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_4', array(
		'label' => __('Image 4', 'coffeeshop'),
		'section' => 'gallery_section_settings',
	)));
	// Add a setting - IMAGE 5
	$wp_customize->add_setting('gallery_image_5', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// Add a control - IMAGE 5
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_5', array(
		'label' => __('Image 5', 'coffeeshop'),
		'section' => 'gallery_section_settings',
	)));
	// Add a setting - IMAGE 6
	$wp_customize->add_setting('gallery_image_6', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// Add a control - IMAGE 6
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_6', array(
		'label' => __('Image 6', 'coffeeshop'),
		'section' => 'gallery_section_settings',
	)));

}
add_action('customize_register', 'gallery_section_customizer');
