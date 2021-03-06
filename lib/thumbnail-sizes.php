<?php

if( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

if( function_exists( 'add_image_size' ) ) {
  add_image_size( 'admin-thumb', 150, 150, false );
  add_image_size( 'opengraph', 1200, 630, true );

  add_image_size( 'item-l-4', 392, 9999, false );
  add_image_size( 'item-l-3', 283, 9999, false );

  add_image_size( 'demo-thumb', 273, 273, false );

  add_image_size( 'gallery', 1200, 9999, false );
}
