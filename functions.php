<?php
function lion_load_style() {
  wp_enqueue_style('style-lion', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'lion_load_style');

function lion_support_thumbnail() {
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 160, 100);
}
add_action('after_setup_theme', 'lion_support_thumbnail');
