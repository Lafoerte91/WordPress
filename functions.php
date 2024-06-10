<?php


if(!function_exists('yg_theme_setup')) :
  function yg_theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' ); // поддержка автоматического обновления

    /** tag-title **/
    add_theme_support( 'title-tag' ); // поддержка тега title

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status'); // поддержка форматов
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // поддержка миниатюр

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); // поддержка HTML5

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' ); // поддержка виджетов

    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults ); // поддержка заголовка

    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) ); // поддержка логотипа



  }
endif;

add_action('after_setup_theme','yg_theme_setup'); // подключение функции