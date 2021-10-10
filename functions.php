<?php

// add_theme_support('menus');

// add_theme_support('post-thumbnails');




register_nav_menus(array(
  'side'   => 'サイド',

));

function wpbeg_script()
{
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1');
  wp_enqueue_style('style', get_template_directory_uri() . '/scss/style.css', array(), '1.0.0');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wpbeg_script');

add_theme_support('automatic-feed-links');
add_theme_support('custom-header');
add_theme_support("custom-background");
add_theme_support("title-tag");
