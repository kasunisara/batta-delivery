<?php

 /**
 * Batta Delivery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Batta Delivery
 */

 function batta_delivery_scripts(){
     wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.3.2', true);
     wp_enqueue_style('bootstrap-css',get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.3.2', 'all' );
     wp_enqueue_style('batta-delivery-style',get_stylesheet_uri(), array(), '1.0', 'all' );
 }
 add_action('wp_enqueue_scripts', 'batta_delivery_scripts' );