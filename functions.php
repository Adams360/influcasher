<?php
// Setup
define('INF_DEV_MODE', true);

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );


// Hooks
add_action( 'wp_enqueue_scripts', 'inf_enqueue' );
add_action( 'after_setup_theme', 'inf_setup_theme' );

// Shortcodes