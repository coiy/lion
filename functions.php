<?php
function lion_load_style() {
  wp_enqueue_style('style-lion', get_stylesheet_uri());
  wp_enqueue_script('jquery1113', get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
  wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
  wp_enqueue_script('function', get_template_directory_uri() . '/js/function.js');
  wp_enqueue_script('getdata', get_template_directory_uri() . '/js/getdata.js');
}
add_action('wp_enqueue_scripts', 'lion_load_style');

function lion_support_thumbnail() {
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 160, 100);
}
add_action('after_setup_theme', 'lion_support_thumbnail');
