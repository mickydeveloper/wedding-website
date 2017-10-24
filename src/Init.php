<?php

namespace NuvoPoint\Themes\FedericoNicole;

class Init
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'scriptsAndStyles']);
    }

    public function scriptsAndStyles()
    {
        wp_enqueue_style('nuvofront-custom', get_stylesheet_directory_uri() . '/assets/scss/custom.css',
            ['nuvofront-common', 'mobile-nav', 'desktop-nav', 'nuvofront-grid'], FEDERICO_NICOLE_VERSION);
            wp_enqueue_script('init_maps', get_stylesheet_directory_uri() . '/assets/js/maps.js', [],
                FEDERICO_NICOLE_VERSION, true);
            wp_enqueue_script('get_maps',
                '//maps.googleapis.com/maps/api/js?key=AIzaSyDQuYUx4Gv2jQPhIA5UIA31KD8_KY5wfpg&callback=initMaps',
                ['init_maps'], FEDERICO_NICOLE_VERSION, true);
    }
}