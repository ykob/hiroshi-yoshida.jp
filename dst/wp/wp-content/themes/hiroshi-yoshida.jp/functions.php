<?php
  add_theme_support('post-thumbnails');
  
  function custom_post_type_gallery(){
    $labels = array(
      'name' => 'gallery'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array('title', 'thumbnail')
    );
    register_post_type('gallery', $args);
  }
  add_action('init', 'custom_post_type_gallery');
  
  function custom_taxonomy_gallery() {
    register_taxonomy(
      'gallery-group',
      'gallery',
      array(
        'hierarchical' => true, 
        'label' => __( '作品グループ' )
      )
    );
  }
  add_action( 'init', 'custom_taxonomy_gallery' );
?>
