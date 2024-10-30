<?php
/*==========================================================
 * @package jalil_Toolkit
 * @version 1.0.0
 */
/*
Plugin Name: Jalil Toolkit
Plugin URI: http://jalil.thenextlevel.com.au/
Description: jalil Toolkit is a helper plugin for jalil theme.This plugin only used for the jalil theme.It is a required plugin for jalil theme.
Author: jewel1994
Version: 1.0.0
Author URI: http://thenextlevel.com.au/
============================================================*/

// Exit if accessed directly 
if (! defined('ABSPATH')){
    exit;
}

// Define
define('JALIL_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/');
define('JALIL_ACC_PATH', plugin_dir_path( __FILE__ ));

// Print Shortcode in widget
add_filter( 'widget_text', 'do_shortcode' );

// Loading Kc addons 
require_once(JALIL_ACC_PATH . 'kc-addons/kc-blocks.php');

// Theme Shortcode
require_once(JALIL_ACC_PATH . 'theme-shortcodes/theme-slide.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/count-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/title-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/btn-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/video-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/service-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/team-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/project-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/testimonial-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/pricing-table-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/progress-bar-shortcode.php');
require_once(JALIL_ACC_PATH . 'theme-shortcodes/post-shortcode.php');
//Loading custom post type file
require_once(JALIL_ACC_PATH . 'inc/jalil-toolkit-post-type.php');

// Load plugin textdomain.
function jalil_textdomain(){
  load_plugin_textdomain( 'jalil-toolkit', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action('plugin_loaded' , 'jalil_textdomain');

//Register Toolkit Files
function jalil_toolkit_files(){
    wp_enqueue_style( 'animate', plugin_dir_url( __FILE__ ) .'assets/css/animate.min.css' );
    wp_enqueue_style( 'owl-theme-default', plugin_dir_url( __FILE__ ) .'assets/css/owl.theme.default.css' );
    wp_enqueue_style( 'owl-carouel', plugin_dir_url( __FILE__ ) .'assets/css/owl.carousel.css' );
    wp_enqueue_style( 'magnific-popup', plugin_dir_url( __FILE__ ) .'assets/css/magnific-popup.css' );
    wp_enqueue_style( 'jalil-toolkit', plugin_dir_url( __FILE__ ) .'assets/css/jalil-toolkit.css' );
    wp_enqueue_script('owl-carousel', plugin_dir_url( __FILE__ ) .'assets/js/owl.carousel.min.js', array('jquery'), '3.0.4', true);
    wp_enqueue_script('wow', plugin_dir_url( __FILE__ ) .'assets/js/wow.min.js', array('jquery'), '3.0.4', true);
    wp_enqueue_script('counterup', plugin_dir_url( __FILE__ ) .'assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoints', plugin_dir_url( __FILE__ ) .'assets/js/waypoints.min.js', array('jquery'), '2.0.3', true);
    wp_enqueue_script('magnific-popup', plugin_dir_url( __FILE__ ) .'assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
    wp_enqueue_script('jalil-active', plugin_dir_url( __FILE__ ) .'assets/js/active.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'jalil_toolkit_files');