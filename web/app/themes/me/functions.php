<?php

include_once "custom/cpt.php";
include_once "custom/acf.php";

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-disable-trackbacks');
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_post_type_support( 'page', 'excerpt' );
add_post_type_support( 'post', 'post-formats' );
add_theme_support( 'post-thumbnails' );
add_image_size('post-home', 1440, 99999 );
add_image_size('logo', 400, 300 );

register_nav_menus(
  array(
    'primary'   => __( 'Primary menu', 'me' ),
    'home-links' => __( 'Home links', 'me' ),
    )
  );

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

// function mySearchFilter($query) {
  // $post_type = $_GET['type'];
  // if (!$post_type) {
    // $post_type = 'post';
  // }
    // if ($query->is_search) {
        // $query->set('post_type', $post_type);
    // };
    // return $query;
// };

// add_filter('pre_get_posts','mySearchFilter');

function me_scripts() {
  // Load our main stylesheet.
  //wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array() );
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css', array() );
  wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array() );
  // Load js
  wp_dequeue_script( 'jquery' );
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'me-modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '20150306', false );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '20150306', true );
  wp_enqueue_script( 'me-pace', get_template_directory_uri() . '/js/pace.min.js', array(), '20150306', true );
  wp_enqueue_script( 'me-foundation', get_template_directory_uri() . '/js/foundation.min.js', array(), '20150306', true );
  wp_enqueue_script( 'me-fonts', get_template_directory_uri() . '/js/fonts.js', array(), '20150306', true );
  wp_enqueue_script( 'me-fotorama', get_template_directory_uri() . '/js/fotorama.js', array(), '20150306', true );
  wp_enqueue_script( 'me-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20150306', true );

}

// Qui richiamiamo la funzione degli script
add_action( 'wp_enqueue_scripts', 'me_scripts' );

?>
