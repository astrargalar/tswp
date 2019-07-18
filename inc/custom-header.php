<?php
function tswp_custom_header()
{
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
  ));

  add_theme_support('custom-background', array(
    'default-color' => 'FFF',
    'default-image' => get_template_directory_uri() . '/img/header-image.jpg',
    'default-repeat' => 'repeat',
    'default-position-x' => '',
    'default-position-y' => '',
    'default-size' => '',
    'default-attachment' => 'fixed'
  ));

  add_theme_support('customize-selective-refresh-widgets');

  add_theme_support('custom-header', apply_filters('tswp_custom_header_args', array(
    'default-image' => get_template_directory_uri() . '/img/background-image.jpg',
    'default-text-color' => '000',
    'width' => 1200,
    'height' => 720,
    'flex-width' => true,
    'flex-height' => true,
    'video' => true
  )));
}

add_action('after_setup_theme', 'tswp_custom_header');
