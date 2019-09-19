<?php


function theme_setup_gutenberg() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary', 'sc-evo' ),
            'slug' => 'primary',
            'color' => '#FFCC00',
        ),
        array(
            'name' => __( 'Black', 'sc-evo' ),
            'slug' => 'black',
            'color' => '#212B35',
        ),
        array(
            'name' => __( 'Gray dark', 'sc-evo' ),
            'slug' => 'gray-dark',
            'color' => '#50535B',
        ),
        array(
            'name' => __( 'Gray medium', 'sc-evo' ),
            'slug' => 'gray-medium',
            'color' => '#e9e9ea',
        ),
        array(
            'name' => __( 'Gray light', 'sc-evo' ),
            'slug' => 'gray-light',
            'color' => '#e9e9ea',
        ),
        array(
            'name' => __( 'White', 'sc-evo' ),
            'slug' => 'white',
            'color' => '#ffffff',
        ),
    ) );
}

add_action( 'after_setup_theme', 'theme_setup_gutenberg' );


 ?>
