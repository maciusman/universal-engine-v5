<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'contact-cta',
    'title'             => __('Contact CTA'),
    'description'       => __('Final call-to-action section with contact options and next steps'),
    'render_template'   => 'blocks/contact-cta/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'phone',
    'keywords'          => array('contact', 'cta', 'consultation'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));