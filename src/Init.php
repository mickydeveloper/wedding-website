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
        wp_enqueue_style('nuvofront-custom', get_stylesheet_directory_uri() . '/assets/scss/custom.css', ['nuvofront-common','mobile-nav', 'desktop-nav','nuvofront-grid'], FEDERICO_NICOLE_VERSION);
    }
}