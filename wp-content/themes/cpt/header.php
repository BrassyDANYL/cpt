<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="about__container">
            <div class="header__buttons">
                <div class="header__buttons-left">
                    <div class="back__to-block">

                        <a href="<?php echo site_url(); ?>" class="back__to"><span>
                                <img class="desk__arrow"
                                    src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-white-arrow.png"
                                    alt="">
                                <img class="mobile__arrow"
                                    src="<?php echo get_theme_file_uri() ?>/assets/img/icons/lefr-blue-arrow.png"
                                    alt="">
                            </span>Back to
                            home</a>
                    </div>
                    <a href="<?php echo site_url('/about') ?>" class="homepage__link about__page-link">About the
                        project</a>
                </div>
                <div class="header__buttons-right">
                    <a href="<?php echo site_url('/slide-1')?>" class="start__button">Start <span
                            class="arrow arrow-animation"><img
                                src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-blue-arrow.png" alt=""
                                class="arrow__icon "></span></a>
                </div>
            </div>
            <div class="menu__title-close"><span class="menu__title">Close</span>
                <div class="burger">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="menu__icon">

                <span class="menu__title">Menu</span>
                <div class="burger">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="menu__body">
                <div class="menu__container">
                    <div class="back__to-block">
                        <a href="<?php echo site_url(); ?>" class="back__to"><span>
                                <img class="left-arrow__mobile"
                                    src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-white-arrow.png"
                                    alt="">
                                <img class="left-arrow__desk"
                                    src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-white-arrow-desk.png"
                                    alt="arrow">
                            </span>Back to
                            home</a>
                    </div>
                    <div class="links__container">
                        <div class="menu__links">
                            <a href="<?php echo site_url('/about') ?>" class="homepage__link about__link">About the
                                project</a>
                            <a href="<?php the_field('paper_file'); ?>"
                                download="<?php the_field('paper_file_title'); ?>"
                                class="homepage__link download__buttons-item download__paper">Download Paper</a>
                            <a href="<?php the_field('app_file'); ?>" download="<?php the_field('app_file_title'); ?>"
                                class="homepage__link download__buttons-item download__app">Download Appendix
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border"></div>
                <div class="logo__block">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/img/logo_white.svg" alt="">
                </div>
            </div>
    </header>