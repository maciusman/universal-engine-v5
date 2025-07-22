<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'hero-intro',
    'title'             => __('Hero Introduction'),
    'description'       => __('Main hero section with company introduction and value proposition'),
    'render_template'   => 'blocks/hero-intro/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'star-filled',
    'keywords'          => array('hero', 'intro', 'banner'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));