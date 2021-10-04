<?php

add_theme_support('menus');

add_theme_support('post-thumbnails');

function twpp_setup_theme()
{
  register_nav_menus(array(
    'side-nav' => 'サイドナビゲーション',
  ));
}
add_action('after_setup_theme', 'twpp_setup_theme');

register_nav_menus(array(
  'side'   => 'サイド',
));

function wpbeg_script()
{

  wp_enqueue_style('style', get_template_directory_uri() . '/scss/style.css', array(), '1.0.0');
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wpbeg_script');
