<?php
add_action( 'wp_enqueue_scripts', 'new_theme_enqueue_styles' );

function new_theme_enqueue_styles() {
    wp_enqueue_style(
        'new-theme-style',
        get_stylesheet_uri()
    );
}
