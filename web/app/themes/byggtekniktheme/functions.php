<?php

if (!function_exists('byggtekniktheme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features
     *
     *  It is important to set up these functions before the init hook so that none of these
     *  features are lost.
     *
     *  @since MidgardsTheme 1.0.0
     */
    function byggtekniktheme_setup()
    {
        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'byggtekniktheme'),
            'footer' => __('Footer Menu', 'byggtekniktheme')
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
        add_theme_support('custom-background', $background_args);

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

        // Add theme support for Custom Footer
        $footer_args = [
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
        add_theme_support('custom-footer', $footer_args);

        // Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

        // Add theme support for document Title tag
        add_theme_support('title-tag');

        // Add theme support for Translation

        add_image_size('midgards-gallery', '500', '300', true);
        }

    add_action('after_setup_theme', 'byggtekniktheme_setup');

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


    function mytheme_add_woocommerce_support()
    {
        add_theme_support( 'woocommerce', array(

            'thumbnail_image_width' => 300,
            'thumbnail_image_height' => 150,
            'single_image_width'    => 50,
            'crop' => 0,

            'product_grid' => array(
                'default_rows' => 4,
                'min_rows'        => 1,
                'max_rows'        => 5,
                'default_columns' => 3,
                'min_columns'     => 1,
                'max_columns'     => 4,
        )));
    }

    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

    add_action( 'after_setup_theme', 'yourtheme_setup');
    function yourtheme_setup()
    {
        add_theme_support( 'wc-product-gallery-slider' );
    }


endif;
