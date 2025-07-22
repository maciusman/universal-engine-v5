<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'why-choose-us',
    'title'             => __('Why Choose Us'),
    'description'       => __('Section highlighting why clients should choose Alchemiq'),
    'render_template'   => 'blocks/why-choose-us/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'thumbs-up',
    'keywords'          => array('why', 'choose', 'advantages'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));