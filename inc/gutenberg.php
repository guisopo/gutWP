<?php

/**
*   Custom Gutenberg functions.
*/

function guisopo_default_colors() {
  add_theme_support(
    'editor-color-palette', 
    array(
      array(
        'name'  => 'White',
        'slug'  => 'white',
        'color' => '#ffffff'
      ),
      array(
        'name'  => 'Black',
        'slug'  => 'black',
        'color' => '#000000'
      ),
      array(
        'name'  => 'Red',
        'slug'  => 'red',
        'color' => '#ff4444'
      ),
    )
  );
  add_theme_support(
    'editor-font-sizes',
    array(
      array(
        'name'  => 'Normal',
        'sluge' => 'normal',
        'size'  => 16
      ),
      array(
        'name'  => 'Large',
        'sluge' => 'large',
        'size'  => 24
      )
    )
  );
}

add_action('init', 'guisopo_default_colors');

function guisopo_gutenberg_blocks() {
  wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/build/index.js', array( 'wp-blocks', 'wp-editor' ));
  register_block_type( 'guisopo/custom-cta', array(
    'editor_script' => 'custom-cta-js'
  ));
}

add_action('init', 'guisopo_gutenberg_blocks');