<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'services-comprehensive',
    'title'             => __('Comprehensive Services'),
    'description'       => __('Complete services overview with categories and subcategories'),
    'render_template'   => 'blocks/services-comprehensive/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'portfolio',
    'keywords'          => array('services', 'comprehensive', 'production'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));