<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container d-flex align-items-center justify-content-between">

            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid logo" />
            <?php
            wp_nav_menu(
                array(
                    'theme_location'=>'top-menu',
                    'menu_class'=>'top-menu d-flex '
                )
            );
            ?>
        </div>
    </header>