<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function theme_engine_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'] );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    register_nav_menus( ['primary' => esc_html__( 'Primary Menu', 'universal-engine-v5' )] );
}
add_action( 'after_setup_theme', 'theme_engine_setup' );