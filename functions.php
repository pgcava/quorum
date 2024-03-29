<?php
/**
 * Quorum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Quorum
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function quroum_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Quorum, use a find and replace
	 * to change 'quroum' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'quroum', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'quroum' ),
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
			'quroum_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'quroum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function quroum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'quroum_content_width', 640 );
}
add_action( 'after_setup_theme', 'quroum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function quroum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'quroum' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'quroum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'quroum_widgets_init' );

/**
 * Admin bar margin top remove
 */
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

/**
 * Enqueue scripts and styles.
 */
function quroum_scripts() {
	wp_enqueue_style( 'quroum-style', get_stylesheet_uri(), array(), _S_VERSION );

	// Adobe Fonts
	wp_enqueue_style( 'quorum-fonts', 'https://use.typekit.net/twc8agw.css', array(), _S_VERSION );

	// Custom css
	wp_enqueue_style( 'quorum-custom-style', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION );

	// jQuery
	wp_register_script( 'quorum-jquery', get_template_directory_uri() . '/plugins/jQuery/jquery-3.6.0.min.js', null, null, true);
	wp_enqueue_script( 'quorum-jquery' );

	// Lightbox2
	wp_enqueue_style( 'lightbox2-style', get_template_directory_uri() . '/plugins/lightbox2/css/lightbox.min.css', false);
	wp_register_script( 'lightbox2-script', get_template_directory_uri() . '/plugins/lightbox2/js/lightbox.min.js', null, null, true );
	wp_enqueue_script('lightbox2-script');

	// Slick
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/plugins/slick/slick.css', false);
	wp_register_script( 'slick-script', get_template_directory_uri() . '/plugins/slick/slick.min.js', null, null, true );
	wp_enqueue_script('slick-script');

	// Custom scripts
	wp_register_script( 'quorum-custom-scripts', get_template_directory_uri() . '/js/custom.js', null, null, true);
	wp_enqueue_script( 'quorum-custom-scripts' );
	wp_localize_script( 'quorum-custom-scripts', 'quorum', array('ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	// Sliders
	wp_register_script( 'quorum-sliders', get_template_directory_uri() . '/js/_sliders.js', null, null, true);
	wp_enqueue_script( 'quorum-sliders' );
	
}
add_action( 'wp_enqueue_scripts', 'quroum_scripts' );

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

/**
 * Sierotki ACF
 */
function acf_orphans($value, $post_id, $field) {
	if ( class_exists( 'iworks_orphan' ) ) {
		$orphan = new \iworks_orphan();
		$value = $orphan->replace( $value );
	}
	return $value;
}
add_filter('acf/format_value/type=textarea', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=wysiwyg', 'acf_orphans', 10, 3);
add_filter('acf/format_value', 'acf_orphans', 10, 3);


add_action('wp_ajax_send_contact_form', 'send_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'send_contact_form');
function send_contact_form(){
	$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
	$mail = isset( $_POST['mail'] ) ? $_POST['mail'] : '';
	$phone = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
	$type = isset( $_POST['type'] ) ? $_POST['type'] : '';

	if($type == 'residences'){
		$type_name = 'Mieszkaniem';
	}else{
		$type_name = 'Biurem';
	}

	$to = 'kontakt@resicapital.pl';
	$subject = '[quorumapartments.pl] Prośba o kontakt';
	$message = "Data zgłoszenia: " . date('d/m/Y H:i:s', time()) . "<br/>Imię i nazwisko: " . $name . "<br/>Adres e-mail: " . $mail . "<br/>Telefon: " . $phone . "<br/>Jest zainteresowany: " . $type_name;
	$headers = array('Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $mail . '>');
	
	$sent = false;
	$sent = wp_mail($to, $subject, $message, $headers);

	echo $sent;

	die();
}