<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <div class="container">

        <a href="<?php echo home_url(); ?>" class="logo">
            Jincy<span>.</span>
        </a>

        <nav class="navbar">

            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>

        </nav>

    </div>

</header>