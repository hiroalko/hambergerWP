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
