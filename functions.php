<?php

/* ==========================================================================
Remove adminbar
========================================================================== */

add_filter('show_admin_bar', '__return_false');


/* ==========================================================================
Theme default support
========================================================================== */

if (!function_exists('base_setup')) {
    function base_setup()
    {

        /* post thumbnail support */
        add_theme_support('post-thumbnails');

        /* Menuer */
        register_nav_menus(
            array(
                'main-menu' => __('Main Menu')
            )
        );
    }
}

add_action('after_setup_theme', 'base_setup');


/* ==========================================================================
Add google fonts
========================================================================== */

function custom_fonts()
{

    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;700&family=Heebo:wght@300&display=swap');
}

add_action('wp_enqueue_scripts', 'custom_fonts');


/* ==========================================================================
Link til styles & tailwind
========================================================================== */

function theme_styles()
{

    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('style.css',  get_stylesheet_uri() . '/style.min.css');
    });
}

add_action('wp_enqueue_scripts', 'theme_styles');


/* ==========================================================================
Widgets
========================================================================== */