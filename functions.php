<?php
function lion_load_style() {
  wp_enqueue_style('style-lion', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'lion_load_style');
