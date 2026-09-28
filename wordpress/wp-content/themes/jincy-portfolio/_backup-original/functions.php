<?php

function jincy_portfolio_styles() {

    wp_enqueue_style(
        'jincy-portfolio-style',
        get_stylesheet_uri()
    );

}

add_action('wp_enqueue_scripts', 'jincy_portfolio_styles');