<?php
/*This file is part of ixion-child, ixion child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function ixion_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'ixion_child_enqueue_child_styles' );

add_post_type_support( 'post', 'excerpt' );

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'post_audio' );

// A custom function that calls register_post_type
function post_audio() {

  // Set various pieces of text, $labels is used inside the $args array
  $labels = array(
     'name' => _x( 'Audios', 'Audios exclusivos para membros' ),
     'singular_name' => _x( 'Audio', 'Assunto do Audio' )
  );

  // Set various pieces of information about the post type
  $args = array(
    'labels' => $labels,
    'description' => 'Audios exclusivos para membros',
    'public' => true
  );

  // Register the movie post type with all the information contained in the $arguments array
  register_post_type( 'audio', $args );
}

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'post_video' );

// A custom function that calls register_post_type
function post_video() {

  // Set various pieces of text, $labels is used inside the $args array
  $labels = array(
     'name' => _x( 'Videos', 'Videos Recomendados' ),
     'singular_name' => _x( 'Video', 'Assunto do video' )
  );

  // Set various pieces of information about the post type
  $args = array(
    'labels' => $labels,
    'description' => 'Videos Recomendados',
    'public' => true
  );

  // Register the movie post type with all the information contained in the $arguments array
  register_post_type( 'video', $args );
}

add_action( 'init', 'podcasts_post_type' );
function podcasts_post_type() {
  $labels = array(
     'name' => _x( 'Podcasts', 'post type general name' ),
     'singular_name' => _x( 'podcast', 'post type singular name' )
  );
  $args = array(
    'labels' => $labels,
    'description' => 'podcasts',
    'supports'    => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
    'public' => true
  );
  register_post_type( 'podcasts', $args );


}

function podcasts_taxonomy(){
  register_taxonomy(
  'categoria_podcasts',
  'podcasts',
  array(
      'label' => __('Categorias dos podcasts'),
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'categoria_podcasts', 'with_front' => false),
      'hierarchical' => true,
      'exclude_from_search'   => false,
      )
  );
}
add_action('init', 'podcasts_taxonomy');
