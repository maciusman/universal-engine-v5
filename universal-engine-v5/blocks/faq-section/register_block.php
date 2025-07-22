<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'faq-section',
    'title'             => __('FAQ Section'),
    'description'       => __('Frequently asked questions with expandable answers'),
    'render_template'   => 'blocks/faq-section/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'editor-help',
    'keywords'          => array('faq', 'questions', 'answers'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));