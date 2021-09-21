<?php

function inf_enqueue() {
    $uri = get_theme_file_uri();
    $ver = INF_DEV_MODE ? time() : false;

    wp_register_style( 'inf_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800;900&display=swap', [], $ver);
    wp_register_style( 'inf_custom_styles', $uri . '/assets/css/styles.css', [], $ver );

    wp_register_script( 'inf_custom_script', $uri . '/assets/js/app.js', ['jquery'], $ver, true );

    wp_enqueue_style(  'inf_google_fonts');
    wp_enqueue_style(  'inf_custom_styles');
    wp_enqueue_script( 'jquery'); 
    wp_enqueue_script( 'inf_custom_script'); 
}