<?php
/**
 * Used for adding theme support
 */

// Automatic feed links support
add_theme_support( 'automatic-feed-links' );

// Remove html tag margin top
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

// Title
add_theme_support( 'title-tag' );

// Featured images support
add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );

// image wide or full alignment
add_theme_support( 'align-wide' );

// support for responsive embeds
add_theme_support( 'responsive-embeds' );

// editor styles
add_theme_support( 'editor-styles' );

// images sizes
add_image_size('watson_100x100', 100, 100, true);
