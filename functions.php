<?php
function custom_theme_scripts() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom-style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
?>
