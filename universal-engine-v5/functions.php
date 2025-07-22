<?php
/**
 * Universal Engine V5 Functions and Definitions
 * @package Universal Engine V5
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Include theme support and customizer files.
require_once get_template_directory() . '/inc/theme-support.php';
require_once get_template_directory() . '/inc/theme-customizer.php';

// Add a custom block category for this theme's blocks.
add_filter( 'block_categories_all', function( $categories ) {
    // Check if the category already exists to avoid errors.
    $existing_slugs = wp_list_pluck( $categories, 'slug' );
    if ( ! in_array( 'universal-engine-v5', $existing_slugs, true ) ) {
        $categories[] = array(
            'slug'  => 'universal-engine-v5',
            'title' => 'Universal Engine V5',
            'icon'  => 'admin-customizer',
        );
    }
    return $categories;
}, 10, 1 );

// Register all ACF blocks found in the /blocks/ directory.
add_action('acf/init', function() {
    $blocks_dir = get_template_directory() . '/blocks/';
    if (is_dir($blocks_dir)) {
        foreach (glob($blocks_dir . '*/register_block.php') as $file) {
            require_once $file;
        }
    }
});

// Enqueue compiled scripts and styles.
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('universal-engine-v5-main-styles', get_template_directory_uri() . '/dist/main.css', [], '1.0.0');
    wp_enqueue_script('universal-engine-v5-main-script', get_template_directory_uri() . '/dist/app.js', [], '1.0.0', true);
});