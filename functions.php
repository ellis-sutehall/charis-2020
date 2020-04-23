<?php
/**
 * charis-2020 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package charis-2020
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'charis_2020_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function charis_2020_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on charis-2020, use a find and replace
		 * to change 'charis-2020' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'charis-2020', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'charis-2020' ),
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
				'charis_2020_custom_background_args',
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

		add_theme_support('woocommerce');

	}
endif;
add_action( 'after_setup_theme', 'charis_2020_setup' );

function charis_2020_setup() {
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function charis_2020_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'charis_2020_content_width', 640 );
}
add_action( 'after_setup_theme', 'charis_2020_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function charis_2020_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'charis-2020' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'charis-2020' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Filters', 'charis-2020' ),
			'id'            => 'filter',
			'description'   => esc_html__( 'Add widgets here.', 'charis-2020' ),
			'before_widget' => '<div id="%1$s" class="column is-one-quarter widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	// Custom Widget area for header
	register_sidebar( array(
		'name' => __( 'Header Area', 'charis-sutehall' ),
		'id' => 'sidebar-2',
		'description' => __( 'An optional widget area for your site header', 'charis-sutehall' ),
		'before_widget' => '<div id="%1$s" class="headwidget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) 
	);

	// Footer Widgets

	register_sidebar ( array (
		'name' => 'Footer 1',
		'id' => 'footer-one',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar ( array (
		'name' => 'Footer 2',
		'id' => 'footer-two',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar ( array (
		'name' => 'Footer 3',
		'id' => 'footer-three',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'charis_2020_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function charis_2020_scripts() {
	wp_enqueue_style( 'charis-2020-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'charis-2020-style', 'rtl', 'replace' );

	wp_enqueue_style( 'charis-2020-style-app', get_template_directory_uri() . '/dist/css/app.css', array(), _S_VERSION );

	wp_enqueue_script( 'charis-2020-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'charis-2020-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'charis-2020-app', get_template_directory_uri() . '/src/js/app.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'charis_2020_scripts' );

// Remove default WooCommerce Stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

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

// Custom

// Add template for Widget filters to shop landing page
function widget_shop_filter() {
	require_once get_template_directory() . '/inc/widget-filters.php';
}
add_action( 'woocommerce_before_shop_loop',  'widget_shop_filter', 100 );


// Reorder Single Product Page
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );

// Move product description into 'Summary' hook
// function woocommerce_template_product_description() {
// 	wc_get_template( 'single-product/tabs/description.php' );
// }
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

// Remove the description product tab
function remove_description_product_tab( $tabs ) {
	// Remove the description tab
    unset( $tabs['description'] );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'remove_description_product_tab', 98 );

// Add the product description after the product short description
function add_description_in_summary() {
	global $post;
    // Product description output
    echo '<div class="product-post-content">' . the_content() . '</div>';
}
add_action( 'woocommerce_single_product_summary', 'add_description_in_summary', 25 );

function woocommerce_breadcrumbs_custom() {
	return array(
		'delimiter'   => ' &#47; ',
		'wrap_before' => '<nav class="woocommerce-breadcrumb container" itemprop="breadcrumb">',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	);
}
add_filter( 'woocommerce_breadcrumb_defaults', 'woocommerce_breadcrumbs_custom' );


function custom_format_comment_listing($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	  <div id="comment-<?php comment_ID(); ?>">
		   <div class="comment-moderation">
			   <?php if ($comment->comment_approved == '0') : ?>
				  <p><?php _e('Your review is awaiting moderation.') ?></p>
			   <?php endif; ?>
		   </div>
		   <div class="user-comment">
				<?php comment_text() ?>
		   </div>
		   <div class="comment-author">
				<?php printf(__('<div class="fn">&ndash; %s</div>'), get_comment_author()) ?>
		   </div>
		   <div class="comment-meta commentmetadata">
				<small><em><?php printf(__('%1$s at %2$s'), get_comment_date('j F, Y'),  get_comment_time()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?></em></small>
		   </div>
	  </div>
 <?php }

// Add Classes to WC Loop Title
function woocommerce_template_loop_product_title() {
	echo '<h2 class="title is-5 woocommerce-loop-product__title">' . get_the_title() . '</h2>';
}

