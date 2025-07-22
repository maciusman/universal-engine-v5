<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'client-testimonials',
    'title'             => __('Client Testimonials'),
    'description'       => __('Showcase client testimonials and success stories'),
    'render_template'   => 'blocks/client-testimonials/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'format-quote',
    'keywords'          => array('testimonials', 'clients', 'reviews'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));