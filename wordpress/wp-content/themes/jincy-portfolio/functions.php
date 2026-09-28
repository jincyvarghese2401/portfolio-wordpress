<?php
/**
 * Jincy Portfolio theme functions.
 */

function jincy_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('script', 'style'));
}
add_action('after_setup_theme', 'jincy_portfolio_setup');

function jincy_portfolio_assets() {
    $version = wp_get_theme()->get('Version');

    // Google Fonts: Plus Jakarta Sans (headings), Inter (body), JetBrains Mono (labels)
    wp_enqueue_style(
        'jincy-portfolio-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'jincy-portfolio-style',
        get_stylesheet_uri(),
        array('jincy-portfolio-fonts'),
        $version
    );

    wp_enqueue_script(
        'jincy-portfolio-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $version,
        true
    );
}
add_action('wp_enqueue_scripts', 'jincy_portfolio_assets');

// Preconnect to Google Fonts for faster loading
function jincy_portfolio_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin');
    }
    return $urls;
}
add_filter('wp_resource_hints', 'jincy_portfolio_resource_hints', 10, 2);
