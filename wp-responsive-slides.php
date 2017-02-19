<?php
defined( 'ABSPATH' ) or die( 'Welcome you may forget your road!!' );
/*
Plugin Name: Wordpress Responsive Slider
Plugin URI:  https://github.com/imsyedahmed/wp-responsive-slides
Description: Wordpress Responsive Slider with ResponsiveSlides.js
Version:     1.0.0
Author:      Syed Ahmed
Author URI:  https://imsyedahmed.github.io/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

class WP_Responsive_Slides{
  public function __construct(){
    // plugin activation code
    register_activation_hook(__FILE__, array($this, 'wp_res_sld_activation'));

    // plugin deactivation code
    register_deactivation_hook(__FILE__, array($this, 'wp_res_sld_deactivation'));

    // plugin admin enqueue scripts & style

    // plugin front end enqueue styles
    add_action('wp_enqueue_scripts', array($this, 'wp_res_sld_front_styles'));

    // plugin front end enqueue scripts
    add_action('wp_enqueue_scripts', array($this, 'wp_res_sld_front_scripts'));

    // plugin shortcode initialize


  }

  // slider activation code goes here
  public function wp_res_sld_activation(){

  }

  // slider deactivation code goes here
  public function wp_res_sld_deactivation(){

  }

  // slider front scripts
  public function wp_res_sld_front_scripts(){
    wp_enqueue_script('jquery');
    // responsive slide core JS inlcude
    wp_register_script('responsiveslides_core', plugins_url('js/responsiveslides.min.js', __FILE__),array("jquery"));
    wp_enqueue_script('responsiveslides_core');
    // responsive slide initialize JS inlcude
    wp_register_script('responsiveslides_init', plugins_url('js/responsiveslides.init.js', __FILE__));
    wp_enqueue_script('responsiveslides_init');
  }

  public function wp_res_sld_front_styles(){
    wp_register_style('responsiveslides_style', plugins_url('css/responsiveslides.css', __FILE__));
    wp_enqueue_style('responsiveslides_style');
  }

}

global $wp_res_slides;

$wp_res_slides = new WP_Responsive_Slides();

?>
