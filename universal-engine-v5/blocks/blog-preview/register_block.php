<?php
if ( ! defined( 'ABSPATH' ) ) exit;

acf_register_block_type(array(
    'name'              => 'blog-preview',
    'title'             => __('Blog Preview'),
    'description'       => __('Preview of latest blog posts and expert content'),
    'render_template'   => 'blocks/blog-preview/block.php',
    'category'          => 'universal-engine-v5',
    'icon'              => 'admin-post',
    'keywords'          => array('blog', 'articles', 'content'),
    'supports'          => array(
        'align' => false,
        'anchor' => true,
    ),
));