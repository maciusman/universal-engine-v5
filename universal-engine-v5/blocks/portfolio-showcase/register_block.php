<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'portfolio-showcase',
    'title'             => __('Portfolio Showcase'),
    'description'       => __('Showcase portfolio projects with case studies and filtering'),
    'render_template'   => 'blocks/portfolio-showcase/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'images-alt2',
    'keywords'          => array('portfolio', 'showcase', 'projects'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));