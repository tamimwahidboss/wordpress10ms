<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ogani_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'wp10ms', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages. @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'wp10ms' ),
			'footer-menu-1' => esc_html__( 'Footer Menu 1', 'wp10ms' ),
			'footer-menu-2' => esc_html__( 'Footer Menu 2', 'wp10ms' ),
			'footer-menu-3' => esc_html__( 'Footer Menu 3', 'wp10ms' ),
		)
	);

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
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
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'ogani_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for core custom logo. @link https://codex.wordpress.org/Theme_Logo
	// add_theme_support(
	// 	'custom-logo',
	// 	array(
	// 		'height'      => 250,
	// 		'width'       => 250,
	// 		'flex-width'  => true,
	// 		'flex-height' => true,
	// 	)
	// );

	// add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'ogani_setup' );

// Set the content width in pixels, based on the theme's design and stylesheet.
// function ogani_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'ogani_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'ogani_content_width', 0 );

// Register widgets
// function wp10ms_footer_social() {

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	if ( get_the_ID() ) {
		$more = sprintf( '<a class="read-more d-none" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Read More', 'wp10ms' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

