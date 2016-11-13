<?php


// Register Custom Navigation Walker
require_once('asset/libs/wp_bootstrap_navwalker.php');


function load_file(){
  //load style
  wp_enqueue_style('bootstrap-styles',get_template_directory_uri().'/asset/css/bootstrap.min.css');
  wp_enqueue_style('main-styles',get_template_directory_uri().'/style.css');

  // load script
  wp_enqueue_script('jquery',get_template_directory_uri().'/asset/js/jquery-2.2.4.js');
  wp_enqueue_script('bootstrap-scripts',get_template_directory_uri().'/asset/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'load_file');
/**
* Register main nav
**/

// register_nav_menus(array(
// 	'main-nav' => 'Main Navigation'
// ));

register_nav_menus(array(
	'menu-utama' => 'Main Navigation'
));

/**
*Register Sidebar
**/
register_sidebar(array(
  'name'          => 'main-sidebar',
  'description'   => 'This is the main sidebar',
  'before_widget' => '<div class="col-md-12">',
  'after_widget'  => "</div>",
  'before_title'  => '<h4>',
  'after_title'   => "</h4>"
));

/**
*Add thumbnail feature
**/
add_theme_support('post-thumbnails');
add_image_size('small_thumb', 300, 300, true);
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'video', 'quote', 'status' ) );

$args = array(
  'flex-width'    => true,
	'width'         => 800,
  'flex-height'   => true,
	'height'        => 677,
	'default-image' => get_template_directory_uri() . '/asset/img/sunset.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

// merubah the_excerpt
function get_excerpt_text(){
  return 50;
}
function return_excerpt_text(){
  return '....';
}
add_filter('excerpt_more','return_excerpt_text');
add_filter('excerpt_length','get_excerpt_text');

?>
