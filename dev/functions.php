<?php
if ( ! function_exists( 'workrightnw_setup' ) ) :

function workrightnw_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'workrightnw', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'workrightnw' ),
        'social'  => __( 'Social Links Menu', 'workrightnw' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // workrightnw_setup

add_action( 'after_setup_theme', 'workrightnw_setup' );


if ( ! function_exists( 'workrightnw_init' ) ) :

function workrightnw_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // workrightnw_setup

add_action( 'init', 'workrightnw_init' );


if ( ! function_exists( 'workrightnw_custom_image_sizes_names' ) ) :

function workrightnw_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'workrightnw_custom_image_sizes_names' );
endif;// workrightnw_custom_image_sizes_names



if ( ! function_exists( 'workrightnw_widgets_init' ) ) :

function workrightnw_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'workrightnw_widgets_init' );
endif;// workrightnw_widgets_init



if ( ! function_exists( 'workrightnw_customize_register' ) ) :

function workrightnw_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'workrightnw_customize_register' );
endif;// workrightnw_customize_register


if ( ! function_exists( 'workrightnw_enqueue_scripts' ) ) :
    function workrightnw_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery.2.2.3.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-popper' );
    wp_enqueue_script( 'workrightnw-popper', get_template_directory_uri() . '/vendor/popper.js/popper.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-bootstrap' );
    wp_enqueue_script( 'workrightnw-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-jquerymobilecustomized' );
    wp_enqueue_script( 'workrightnw-jquerymobilecustomized', get_template_directory_uri() . '/vendor/Camera-master/scripts/jquery.mobile.customized.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-jqueryeasing' );
    wp_enqueue_script( 'workrightnw-jqueryeasing', get_template_directory_uri() . '/vendor/Camera-master/scripts/jquery.easing.1.3.js', false, null, true);

    wp_deregister_script( 'workrightnw-camera' );
    wp_enqueue_script( 'workrightnw-camera', get_template_directory_uri() . '/vendor/Camera-master/scripts/camera.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-jqueryslimmenu' );
    wp_enqueue_script( 'workrightnw-jqueryslimmenu', get_template_directory_uri() . '/vendor/menu/src/js/jquery.slimmenu.js', false, null, true);

    wp_deregister_script( 'workrightnw-wow' );
    wp_enqueue_script( 'workrightnw-wow', get_template_directory_uri() . '/vendor/WOW-master/dist/wow.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-owlcarousel' );
    wp_enqueue_script( 'workrightnw-owlcarousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-jqueryappear' );
    wp_enqueue_script( 'workrightnw-jqueryappear', get_template_directory_uri() . '/vendor/jquery.appear.js', false, null, true);

    wp_deregister_script( 'workrightnw-jquerycountto' );
    wp_enqueue_script( 'workrightnw-jquerycountto', get_template_directory_uri() . '/vendor/jquery.countTo.js', false, null, true);

    wp_deregister_script( 'workrightnw-jqueryfancybox' );
    wp_enqueue_script( 'workrightnw-jqueryfancybox', get_template_directory_uri() . '/vendor/fancybox/dist/jquery.fancybox.min.js', false, null, true);

    wp_deregister_script( 'workrightnw-theme' );
    wp_enqueue_script( 'workrightnw-theme', get_template_directory_uri() . '/js/theme.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'workrightnw-style' );
    wp_enqueue_style( 'workrightnw-style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'workrightnw-responsive' );
    wp_enqueue_style( 'workrightnw-responsive', get_template_directory_uri() . '/css/responsive.css', false, null, 'all');

    wp_deregister_style( 'workrightnw-style-1' );
    wp_enqueue_style( 'workrightnw-style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'workrightnw_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>