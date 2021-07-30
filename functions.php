<?php
/**
 * Humberto functions
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'humberto_setup' ) ) :

function humberto_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'humberto', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
    
    /**
     * Enable custom header.
     */
    $args = array(
	    'flex-width'    => true,
	    'width'         => 980,
	    'flex-height'   => true,
	    'height'        => 200,
	    'default-image' => get_template_directory_uri() . '/images/header.jpg',
	);
	add_theme_support( 'custom-header', $args );
	
	/**
     * Enable custom logo.
     */
	$defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
    
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
    add_post_type_support( 'page', 'post-formats' );
    add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form' ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    
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
endif; // humberto_setup
add_action( 'after_setup_theme', 'humberto_setup' );

/*----------------------------------------*\
    Functions you will find in /functions
\*----------------------------------------*/

/**
 * Enqueue styles and scripts
 */
require_once ( get_stylesheet_directory() . '/functions/scripts-styles.php' );

/**
 * Register sidebars
 */
 require_once ( get_stylesheet_directory() . '/functions/widgets.php' );

/**
 * Register menus
 */
require_once ( get_stylesheet_directory() . '/functions/menus.php' );

/**
 * Make readmore to a link.
 */
require_once ( get_stylesheet_directory() . '/functions/readmore.php' );

/**
 * Theme options customizer: to choose layout with or without sidebar
 */
require_once ( get_stylesheet_directory() . '/functions/customizer.php' );
require_once ( get_stylesheet_directory() . '/functions/extras.php' );

/**
 * SEO options for some metatags
 */
require_once ( get_stylesheet_directory() . '/functions/theme-options-seo.php' );

/**
 * Delete emojis
 */
require_once ( get_stylesheet_directory() . '/functions/emojis.php' );

/**
 * Deactivate xmlrp
 */
add_filter( 'xmlrpc_enabled', '__return_false' );
 
 