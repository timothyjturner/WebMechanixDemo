<?php
include_once 'inc/helper-functions.php';

//Site CSS
function wmd_styles() {
    $timestamp = date('U');

    wp_register_style('wmdstyles', get_stylesheet_directory_uri() . '/styles/webmechanixdemo.css', array(), $timestamp, 'all');
    wp_enqueue_style('wmdstyles');
}
add_action('wp_enqueue_scripts', 'wmd_styles'); // Add Theme Stylesheet


include_once 'blocks.php';