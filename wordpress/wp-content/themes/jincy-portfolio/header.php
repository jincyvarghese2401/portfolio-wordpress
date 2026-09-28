<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jincy Varghese — PHP & Laravel Developer based in the UAE.">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header" id="siteHeader">
    <div class="container header-inner">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="Jincy Varghese — Home">
            <span class="logo-mark">JV</span>
            <span class="logo-text">Jincy<span>.</span></span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false" aria-controls="primaryNav">
            <span></span><span></span><span></span>
        </button>

        <nav class="navbar" id="primaryNav" aria-label="Primary">
            <a href="#home" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#skills" class="nav-link">Skills</a>
            <a href="#experience" class="nav-link">Experience</a>
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#contact" class="nav-link nav-cta">Contact</a>
        </nav>

    </div>
</header>
