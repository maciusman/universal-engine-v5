<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'process-explanation',
    'title'             => __('Process Explanation'),
    'description'       => __('Step-by-step explanation of the production process'),
    'render_template'   => 'blocks/process-explanation/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'list-view',
    'keywords'          => array('process', 'steps', 'workflow'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));