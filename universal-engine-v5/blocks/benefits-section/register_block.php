<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'benefits-section',
    'title'             => __('Benefits Section'),
    'description'       => __('Section highlighting benefits of professional advertising films'),
    'render_template'   => 'blocks/benefits-section/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'awards',
    'keywords'          => array('benefits', 'features', 'advantages'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));