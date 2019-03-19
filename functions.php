<?php
if ( ! function_exists( 'iboltema_setup' ) ) :

function iboltema_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'iboltema', get_template_directory() . '/languages' );
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
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'iboltema' ),
        'social'  => __( 'Social Links Menu', 'iboltema' ),
    ) );

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
}
endif; // iboltema_setup

add_action( 'after_setup_theme', 'iboltema_setup' );


if ( ! function_exists( 'iboltema_init' ) ) :

function iboltema_init() {

    
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
endif; // iboltema_setup

add_action( 'init', 'iboltema_init' );


if ( ! function_exists( 'iboltema_widgets_init' ) ) :

function iboltema_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'iboltema_widgets_init' );
endif;// iboltema_widgets_init



if ( ! function_exists( 'iboltema_customize_register' ) ) :

function iboltema_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'iboltema_customize_register' );
endif;// iboltema_customize_register


if ( ! function_exists( 'iboltema_enqueue_scripts' ) ) :
    function iboltema_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyCBxW0j5YjdmgZnBI-lEP4zBrzmvzoLQ0s&amp;sensor=false', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/asserts/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/asserts/js/popper.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/asserts/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'owlcarousel' );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/asserts/js/owl.carousel.js', false, null, true);

    wp_deregister_script( 'infobox' );
    wp_enqueue_script( 'infobox', get_template_directory_uri() . '/asserts/js/infobox.js', false, null, true);

    wp_deregister_script( 'markerclusterer' );
    wp_enqueue_script( 'markerclusterer', get_template_directory_uri() . '/asserts/js/markerclusterer.js', false, null, true);

    wp_deregister_script( 'mapa' );
    wp_enqueue_script( 'mapa', get_template_directory_uri() . '/asserts/js/mapa.js', false, null, true);

    wp_deregister_script( 'cbmain' );
    wp_enqueue_script( 'cbmain', get_template_directory_uri() . '/components/pg.chocka-blocks/js/cb-main.js', false, null, true);

    wp_deregister_script( 'jqueryeasypiechart' );
    wp_enqueue_script( 'jqueryeasypiechart', get_template_directory_uri() . '/components/pg.chocka-blocks/js/jquery.easy-pie-chart.js', false, null, true);

    wp_deregister_script( 'jqueryfitvids' );
    wp_enqueue_script( 'jqueryfitvids', get_template_directory_uri() . '/components/pg.chocka-blocks/js/jquery.fitvids.js', false, null, true);

    wp_deregister_script( 'jquerymbytplayer' );
    wp_enqueue_script( 'jquerymbytplayer', get_template_directory_uri() . '/components/pg.chocka-blocks/js/jquery.mb.YTPlayer.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Oxygen:300,400,700', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/asserts/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'owlcarousel' );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/asserts/css/owl.carousel.css', false, null, 'all');

    wp_deregister_style( 'owlthemedefault' );
    wp_enqueue_style( 'owlthemedefault', get_template_directory_uri() . '/asserts/css/owl.theme.default.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/asserts/css/animate.css', false, null, 'all');

    wp_deregister_style( 'cbstyle' );
    wp_enqueue_style( 'cbstyle', get_template_directory_uri() . '/components/pg.chocka-blocks/css/cb-style.css', false, null, 'all');

    wp_deregister_style( 'home' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/asserts/css/home.css', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800', false, null, 'all');

    wp_deregister_style( 'style-3' );
    wp_enqueue_style( 'style-3', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400', false, null, 'all');

    wp_deregister_style( 'estilo' );
    wp_enqueue_style( 'estilo', get_template_directory_uri() . '/asserts/css/estilo.css', false, null, 'all');

    wp_deregister_style( 'style-4' );
    wp_enqueue_style( 'style-4', 'https://fonts.googleapis.com/css?family=Oxygen:300,400,700', false, null, 'all');

    wp_deregister_style( 'style-5' );
    wp_enqueue_style( 'style-5', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800', false, null, 'all');

    wp_deregister_style( 'style-6' );
    wp_enqueue_style( 'style-6', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'iboltema_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>