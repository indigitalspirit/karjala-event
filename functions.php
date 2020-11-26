<?php
/**
 * karjala-event functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package karjala-event
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'karjala_event_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function karjala_event_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on karjala-event, use a find and replace
		 * to change 'karjala_event' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'karjala_event', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'karjala_event' ),
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
				'karjala_event_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'karjala_event_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function karjala_event_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'karjala_event_content_width', 640 );
}
add_action( 'after_setup_theme', 'karjala_event_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function karjala_event_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'karjala_event' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'karjala_event' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'karjala_event_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function karjala_event_scripts() {

	//TODO
	//if( is_homepage() )

	wp_enqueue_style( 'karjala_event-font', 'https://fonts.googleapis.com/css?family=Oswald%3A300%2C400%2C400i%2C600%7CMuli%3A300%2C400%2C400i%2C600%7CCrimson+Text%3A300%2C400%2C400i%2C600&#038;subset=latin-ext&#038;', array(), _S_VERSION );

	wp_enqueue_style( 'karjala_event-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION );


	if( !is_home() && !is_front_page() ) {
		wp_enqueue_style( 'karjala_event-part1', get_template_directory_uri() . '/css/part1.css', array(), _S_VERSION );
	}

	
		wp_enqueue_style( 'karjala_event-part2', get_template_directory_uri() . '/css/part2.css', array(), _S_VERSION );
	
	

	wp_enqueue_style( 'karjala_event-common', get_template_directory_uri() . '/css/common.css', array(), _S_VERSION );

	if( is_page('Блог') ) {
		wp_enqueue_style( 'karjala_event-blog', get_template_directory_uri() . '/css/blog.css', array(), _S_VERSION );

	}


	if( is_page('Корпоративы') ) {
		wp_enqueue_style( 'karjala_event-corporate', get_template_directory_uri() . '/css/corporate.css', array(), _S_VERSION );

	}

	if( is_page('Магазин') ) {
		wp_enqueue_style( 'karjala_event-shop', get_template_directory_uri() . '/css/shop.css', array(), _S_VERSION );

	}

	if( is_page('Свадьбы') ) {
		wp_enqueue_style( 'karjala_event-marridge', get_template_directory_uri() . '/css/marridge.css', array(), _S_VERSION );

	}

	if( is_page('Походы') || is_page('Праздники') ) {
		wp_enqueue_style( 'karjala_event-trips', get_template_directory_uri() . '/css/trips.css', array(), _S_VERSION );
	}

	if( is_page('Карта сайта') ) {
		wp_enqueue_style( 'karjala_event-map', get_template_directory_uri() . '/css/map.css', array(), _S_VERSION );
	}
	

	if( is_404() ) {
		wp_enqueue_style( 'karjala_event-404', get_template_directory_uri() . '/css/404.css', array(), _S_VERSION );
	}
	

	if( is_home() || is_front_page() ) {
		wp_enqueue_style( 'karjala_event-index', get_template_directory_uri() . '/css/index.css', array(), _S_VERSION );
	}


	wp_style_add_data( 'karjala_event-style', 'rtl', 'replace' );




	/**** scripts */
	
	
	wp_enqueue_script('karjala_event-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, null, true);

	wp_enqueue_script('karjala_event-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', null, null, true);
	

	wp_enqueue_script('karjala_event-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);

	wp_enqueue_script('karjala_event-custom-scripts', get_template_directory_uri() . '/js/custom.js', null, null, true);



	wp_enqueue_script( 'karjala_event-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'karjala_event_scripts' );

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

