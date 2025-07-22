<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function theme_engine_customize_register($wp_customize) {
  $wp_customize->add_section('theme_brand_settings', [
    'title'    => __('Brand Settings', 'universal-engine-v5'),
    'priority' => 30
  ]);
  $wp_customize->add_setting('contact_phone_number', [ 'default' => '', 'transport' => 'refresh' ]);
  $wp_customize->add_control('contact_phone_number', [
      'label'   => __('Contact Phone Number', 'universal-engine-v5'),
      'section' => 'theme_brand_settings',
      'type'    => 'text'
  ]);
}
add_action('customize_register', 'theme_engine_customize_register');