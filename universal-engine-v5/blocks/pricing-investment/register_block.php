<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'pricing-investment',
    'title'             => __('Pricing & Investment'),
    'description'       => __('Transparent pricing information and ROI explanation'),
    'render_template'   => 'blocks/pricing-investment/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'money-alt',
    'keywords'          => array('pricing', 'investment', 'roi', 'cost'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));