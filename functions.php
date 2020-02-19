<?php
/**
 * Elegrad Mobile functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elegrad_Mobile
 */

if ( ! function_exists( 'elegrad_mobile_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function elegrad_mobile_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Elegrad Mobile, use a find and replace
		 * to change 'elegrad-mobile' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'elegrad-mobile', get_template_directory() . '/languages' );

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

		/**
		* Register support for Gutenberg wide images in your theme
		*/
		add_theme_support( 'align-wide' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'appBottomMenu' => esc_html__( 'Bottom Menu', 'elegrad-mobile' ),
			'appBottomMenuAdmin' => esc_html__( 'Bottom Menu Admin', 'elegrad-mobile' ),
			'appSidebarMenu' => esc_html__( 'Sidebar Menu', 'elegrad-mobile' ),
			'appActionButtonMenu' => esc_html__( 'Action Button Menu', 'elegrad-mobile' ),
		) );

		require get_template_directory() . '/inc/walker_appBottom.php';
		require get_template_directory() . '/inc/walker_appSidebar.php';
		require get_template_directory() . '/inc/walker_appActionButton.php';

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
		add_theme_support( 'custom-background', apply_filters( 'elegrad_mobile_custom_background_args', array(
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
add_action( 'after_setup_theme', 'elegrad_mobile_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elegrad_mobile_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'elegrad_mobile_content_width', 640 );
}
add_action( 'after_setup_theme', 'elegrad_mobile_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elegrad_mobile_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'elegrad-mobile' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Widgets will be placed in the offcanvas sidebar, before footer credits', 'elegrad-mobile' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'elegrad_mobile_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function elegrad_mobile_scripts() {
	$my_theme = wp_get_theme();
	wp_enqueue_style( 'elegrad-mobile-style', get_stylesheet_uri(), false, esc_html( $my_theme->get( 'Version' ) ) );
	// wp_enqueue_style( 'clustering-css', 'https://get.mavo.io/mavo.css' );
	// wp_enqueue_style( 'clustering-css-default', get_template_directory_uri() . '/js/plugins/MarkerCluster.Default.css' );

	wp_enqueue_script( 'elegrad-mobile-jquery', get_template_directory_uri() . '/js/lib/jquery-3.4.1.min.js', array(), '20200101', true );
	wp_enqueue_script( 'elegrad-mobile-popper', get_template_directory_uri() . '/js/lib/popper.min.js', array(), '20200101', true );
	wp_enqueue_script( 'elegrad-mobile-bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array(), '20200101', true );
	wp_enqueue_script( 'elegrad-mobile-owl', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array(), '20200101', true );
	// wp_enqueue_script('leaflet_realtime', get_theme_file_uri( '/js/plugins/leaflet.markercluster.js' ), Array('wp_leaflet_map'), '2.3.0', true);
	// wp_enqueue_script( 'elegrad-mobile-app', get_template_directory_uri() . '/js/app.js', array(), '20200101', true );
	wp_enqueue_script( 'elegrad-mobile-app', get_template_directory_uri() . '/js/base.js', array(), '20200101', true );

	if ( is_page_template('page-airports.php') ) {
		wp_enqueue_script( 'elegrad-mobile-mavo', 'https://get.mavo.io/mavo.js', array(), '20200101', true );
	}
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elegrad_mobile_scripts' );

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
 * All CPTs and Taxs
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Login Page Customize
 */
require get_template_directory() . '/inc/app-login.php';
/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/gravity.php';
//require get_template_directory() . '/inc/gravity-styles.php';


add_action('leaflet_map_loaded', 'fs_leaflet_loaded');
function fs_leaflet_loaded() {
	// plugin CDN
	// wp_enqueue_script('leaflet_realtime', 'https://unpkg.com/leaflet-realtime@2.2.0/src/L.Realtime.js', Array('wp_leaflet_map'), '2.3.0', true);
	
	// custom js
	// wp_enqueue_script('leaflet_realtime_js', get_theme_file_uri( '/js/plugins/leaflet_realtime.js' ), Array('leaflet_realtime'), '2.3.0', true);
}

add_filter( 'facetwp_is_main_query', function( $bool, $query ) {
    return ( true === $query->get( 'facetwp' ) ) ? true : $bool;
}, 10, 2 );


// Add user role as class in body tag
function jetflow_add_role_to_body($classes) {
	if( is_user_logged_in() ) {
		global $current_user;
		$user_role = $current_user->roles;
		return array_merge( $classes, array( $user_role[0] ) );
	} else {
		$classes[] = 'loggedout';
		return $classes;
	}
}
add_filter('body_class','jetflow_add_role_to_body');