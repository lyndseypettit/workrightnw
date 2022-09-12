<?php
if ( ! function_exists( 'charles_theme_setup' ) ) :

function charles_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'charles_theme', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'charles_theme' ),
        'social'  => __( 'Social Links Menu', 'charles_theme' ),
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
endif; // charles_theme_setup

add_action( 'after_setup_theme', 'charles_theme_setup' );


if ( ! function_exists( 'charles_theme_init' ) ) :

function charles_theme_init() {

    
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
endif; // charles_theme_setup

add_action( 'init', 'charles_theme_init' );


if ( ! function_exists( 'charles_theme_custom_image_sizes_names' ) ) :

function charles_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'charles_theme_custom_image_sizes_names' );
endif;// charles_theme_custom_image_sizes_names



if ( ! function_exists( 'charles_theme_widgets_init' ) ) :

function charles_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'charles_theme_widgets_init' );
endif;// charles_theme_widgets_init



if ( ! function_exists( 'charles_theme_customize_register' ) ) :

function charles_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'charles_theme_customize_register' );
endif;// charles_theme_customize_register


if ( ! function_exists( 'charles_theme_enqueue_scripts' ) ) :
    function charles_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );
    wp_deregister_script( 'charles_theme-popper' );
    wp_enqueue_script( 'charles_theme-popper', get_template_directory_uri() . '/vendor/popper.js/popper.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-bootstrap' );
    wp_enqueue_script( 'charles_theme-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-jquerymobilecustomized' );
    wp_enqueue_script( 'charles_theme-jquerymobilecustomized', get_template_directory_uri() . '/vendor/Camera-master/scripts/jquery.mobile.customized.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-jqueryeasing' );
    wp_enqueue_script( 'charles_theme-jqueryeasing', get_template_directory_uri() . '/vendor/Camera-master/scripts/jquery.easing.1.3.js', false, null, true);

    wp_deregister_script( 'charles_theme-camera' );
    wp_enqueue_script( 'charles_theme-camera', get_template_directory_uri() . '/vendor/Camera-master/scripts/camera.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-jqueryslimmenu' );
    wp_enqueue_script( 'charles_theme-jqueryslimmenu', get_template_directory_uri() . '/vendor/menu/src/js/jquery.slimmenu.js', false, null, true);

    wp_deregister_script( 'charles_theme-wow' );
    wp_enqueue_script( 'charles_theme-wow', get_template_directory_uri() . '/vendor/WOW-master/dist/wow.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-owlcarousel' );
    wp_enqueue_script( 'charles_theme-owlcarousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-jqueryappear' );
    wp_enqueue_script( 'charles_theme-jqueryappear', get_template_directory_uri() . '/vendor/jquery.appear.js', false, null, true);

    wp_deregister_script( 'charles_theme-jquerycountto' );
    wp_enqueue_script( 'charles_theme-jquerycountto', get_template_directory_uri() . '/vendor/jquery.countTo.js', false, null, true);

    wp_deregister_script( 'charles_theme-jqueryfancybox' );
    wp_enqueue_script( 'charles_theme-jqueryfancybox', get_template_directory_uri() . '/vendor/fancybox/dist/jquery.fancybox.min.js', false, null, true);

    wp_deregister_script( 'charles_theme-theme' );
    wp_enqueue_script( 'charles_theme-theme', get_template_directory_uri() . '/js/theme.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'charles_theme-style' );
    wp_enqueue_style( 'charles_theme-style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'charles_theme-responsive' );
    wp_enqueue_style( 'charles_theme-responsive', get_template_directory_uri() . '/css/responsive.css', false, null, 'all');

    wp_deregister_style( 'charles_theme-style-1' );
    wp_enqueue_style( 'charles_theme-style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'charles_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wc_pg_helpers.php";

    /* Pinegrow generated Include Resources End */

/* Setting up theme supports options */

function charles_theme_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'charles_theme_setup_theme_supports');

/* End of setting up theme supports options */


/* Setting up WooCommerce filters */
/* Pinegrow generated WooCommerce Filters Begin */

    /* This filter lets us multiple variants of the same template name. It also handles locating the templates that are present in the theme or plugin. */        
    add_filter( 'wc_get_template', function( $template, $template_name, $args, $template_path, $default_path ) {
        global $pg_wc_use_template, $pg_wc_use_template_cache_charles_theme;
        if(!isset($pg_wc_use_template_cache_charles_theme)) $pg_wc_use_template_cache_charles_theme = array();
        
        if( !empty($pg_wc_use_template) ) {
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . str_replace( '.php', '-'.$pg_wc_use_template.'.php', $template_name);
            $template_key = $template_name . '-' . $pg_wc_use_template;
        } else {
            $template_key = $template_name;
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . $template_name;
        }
            
        if(isset($pg_wc_use_template_cache_charles_theme[ $template_key ])) {
            if($pg_wc_use_template_cache_charles_theme[ $template_key ]) {
                $template = $template_variant;
            }
        } else if(file_exists($template_variant)) {
            $template = $template_variant;
            $pg_wc_use_template_cache_charles_theme[ $template_key ] = true;
        } else {
            $pg_wc_use_template_cache_charles_theme[ $template_key ] = false;
        }
 
        return $template;
    }, 10, 5 );  
            
    /* Pinegrow generated WooCommerce Filters End */
/* End Setting up WooCommerce filters */

?>