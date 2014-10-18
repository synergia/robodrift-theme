<?php

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "RoboDrift";
    $developer_uri = "http://vk.com/stsdc";
    $shortname = "rd";
    $version = '0.2';

////////////////////////////////////////////////////////////////////
// include Theme-options.php for Admin Theme settings
////////////////////////////////////////////////////////////////////

   include 'theme-options.php';

////////////////////////////////////////////////////////////////////
// Include shortcodes.php for Bootstrap Shortcodes
////////////////////////////////////////////////////////////////////

    include 'shortcodes.php';

////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css)
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_stylesheets()
    {
        wp_register_style('skel.css', get_template_directory_uri() . '/css/skel.css', array(), '1', 'all' );
        wp_enqueue_style( 'skel.css');
        wp_register_style('fa.css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1', 'all' );
        wp_enqueue_style( 'fa.css');
        wp_register_style('style-wide.css', get_template_directory_uri() . '/css/style-wide.css', array(), '1', 'all' );
        wp_register_style('style-mobile.css', get_template_directory_uri() . '/css/style-mobile.css', array(), '1', 'all' );

        wp_enqueue_style( 'skel.css');
        wp_enqueue_style( 'style-wide.css');
        wp_enqueue_style( 'style-mobile.css');

        wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_stylesheets');

//Editor Style
add_editor_style('css/editor-style.css');

////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
function devdmbootstrap3_theme_scripts() {

    wp_enqueue_script('jquery'); // just enqueue as its already registered
    /*   REGISTER ALL JS FOR SITE */
    wp_register_script('scrolly',get_stylesheet_directory_uri().'/js/jquery.scrolly.min.js', array('jquery'));
    wp_register_script('skel',get_stylesheet_directory_uri().'/js/skel.min.js');
    wp_register_script('init',get_stylesheet_directory_uri().'/js/init.js');
    wp_enqueue_script('scrolly');
    wp_enqueue_script('skel');
    wp_enqueue_script('init');

}
add_action( 'wp_enqueue_scripts', 'devdmbootstrap3_theme_scripts' );



////////////////////////////////////////////////////////////////////
// Add Title Parameters
////////////////////////////////////////////////////////////////////

if(!function_exists('devdmbootstrap3_wp_title')) {

    function devdmbootstrap3_wp_title( $title, $sep ) { // Taken from Twenty Twelve 1.0
        global $paged, $page;

        if ( is_feed() )
            return $title;

        // Add the site name.
        $title .= get_bloginfo( 'name' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            $title = "$title $sep $site_description";

        // Add a page number if necessary.
        if ( $paged >= 2 || $page >= 2 )
            $title = "$title $sep " . sprintf( __( 'Page %s', 'devdmbootstrap3' ), max( $paged, $page ) );

        return $title;
    }
    add_filter( 'wp_title', 'devdmbootstrap3_wp_title', 10, 2 );

}


////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

        register_nav_menus(
            array(
                'main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
            )
        );




////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300,300, true);

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Set Content Width
////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 800;

?>
