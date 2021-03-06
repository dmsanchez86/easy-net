<?php

add_action( 'genesis_setup', 'bsg_remove_default_stylesheet', 15 ); // Priority 15 ensures it runs after Genesis itself has setup.
add_action( 'wp_enqueue_scripts', 'bsg_enqueue_css_js' );


function bsg_remove_default_stylesheet() {
    // replace style.css - Theme Information (no css)
    // with css/style.min.css -  Compressed CSS for Theme
    remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
}

function bsg_enqueue_css_js() {
    $version = wp_get_theme()->Version;

    // wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    wp_enqueue_style( 'bsg_combined_css', get_stylesheet_directory_uri() . '/css/style.min.css', array(), $version );

    // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    // NOTE: this combined script is loading in the footer
    wp_enqueue_script( 'bsg_combined_js', get_stylesheet_directory_uri() . '/js/javascript.min.js', array('jquery'), $version, true );
}
