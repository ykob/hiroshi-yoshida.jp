<?php
  function custom_post_type_gallery(){
    $labels = array(
      'name' => 'gallery'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('gallery', $args);
  }
  add_action('init', 'custom_post_type_gallery');
?>
