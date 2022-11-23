<?php

if (!function_exists('midgardstheme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features
     *
     *  It is important to set up these functions before the init hook so that none of these
     *  features are lost.
     *
     *  @since MidgardsTheme 1.0.0
     */
    function midgardstheme_setup()
    {
        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'midgardstheme'),
            'footer' => __('Footer Menu', 'midgardstheme')
        ));

        add_theme_support('post-formats', [
            'gallery',
            'image',
            'quote',
            'video',
        ]);
        // Add theme support for Automatic Feed Links
        add_theme_support('automatic-feed-links');

        // Add theme support for Featured Images
        add_theme_support('post-thumbnails');

        // Add theme support for Custom Background
        $background_args = [
            'default-color'          => '',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        ];
        add_theme_support( 'custom-background', $background_args );

        // Add theme support for Custom Header
        $header_args = [
            'default-image'      => '',
            'width'              => 0,
            'height'             => 0,
            'flex-width'         => true,
            'flex-height'        => true,
            'uploads'            => true,
            'random-default'     => false,
            'header-text'        => true,
            'default-text-color' => 'OOOO',
            'video'              => true,
        ];
        add_theme_support('custom-header', $header_args);

        // Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

        // Add theme support for document Title tag
        add_theme_support('title-tag');

        // Add theme support for Translation

        add_image_size('midgards-gallery', '500', '300', true);
    }

    add_action('after_setup_theme', 'midgardstheme_setup');

    // Loads in all the stylesheets and scripts
    function add_theme_scripts()
    {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'add_theme_scripts');

    function mg_custom_excerpt_length()
    {
        return 5;
    }
    add_filter('excerpt_length', 'mg_custom_excerpt_length', 999);


endif;
