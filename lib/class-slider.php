<?php
defined( 'ABSPATH' ) or die( 'Welcome you may forget your road!!' );

class Slider{
  
  public function __construct(){
    add_action('init', array($this, 'create_slider_post_type'));
  }

  public function create_slider_post_type(){
    $labels = array(
       'menu_name' => _x('Sliders', 'responsive_slider'),
    );
    $args = array(
       'labels' => $labels,
       'hierarchical' => true,
       'description' => 'Slideshows',
       'supports' => array('title', 'editor'),
       'public' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'show_in_nav_menus' => true,
       'publicly_queryable' => true,
       'exclude_from_search' => false,
       'has_archive' => true,
       'query_var' => true,
       'can_export' => true,
       'rewrite' => true,
       'capability_type' => 'post'
    );
    register_post_type('responsive_slider', $args);
  }
}
