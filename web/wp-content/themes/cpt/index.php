<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <main class="main">
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
                            <img src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-white-arrow.png" alt="">
                        </span>Back to
                        home</a>
                </div>
                <div class="links__container">
                    <a href="<?php echo site_url('/about'); ?>" class="homepage__link about__link">About the project</a>
                    <a href="<?php the_field('parer_file'); ?>" download="<?php the_field('paper_file_title'); ?>"
                        class="homepage__link download__links-item">Download paper</a>
                    <a href="<?php the_field('app_file'); ?>" download="<?php the_field('app_file_title'); ?>"
                        class="homepage__link download__links-item">Download appendix</a>
                </div>
            </div>
            <div class="border"></div>
            <div class="logo__block">
                <img src="<?php echo get_theme_file_uri() ?>/assets/img/logo_white.svg" alt="">
            </div>
        </div>
        <div class="border"></div>
        <div class="content" style="background:url(<?php the_field('background_image');?>) no-repeat;
                background-position: center; background-size: contain;">
            <div class="content__block ">
                <img src="<?php the_field('background_image');?>" alt="" class="mobile__background-image">
                <div class=" content__block-top">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/img/logo_home.svg" alt="logo">
                </div>
                <div class="content__container">
                    <div class="content__block-main"><a href="<?php echo site_url('/about')?>"
                            class="homepage__link about__link">About the project</a>
                    </div>
                    <h1 class="title wow fadeInUp " data-wow-duration="0.8s"><?php the_field('title'); ?></h1>
                    <div class="redline wow fadeInUp " data-wow-delay="0.2s" data-wow-duration="0.8s"></div>
                    <div class="content__description wow fadeInUp " data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <?php the_field('subtitle'); ?>
                    </div>
                    <a href="<?php echo site_url('/slide-1') ?>" class="start__button">Start <span
                            class="arrow-animation"><img
                                src="<?php echo get_theme_file_uri() ?>/assets/img/icons/arrow-long-right(black)..svg"
                                alt="" class="arrow__icon "></span></a>
                    <div class="download__links ">
                        <a href="<?php the_field('paper_file'); ?>" download="<?php the_field('paper_file_title'); ?>"
                            class="homepage__link download__links-item">Download paper</a>
                        <a href="<?php the_field('app_file'); ?>" download="<?php the_field('app_file_title'); ?>"
                            class="homepage__link download__links-item">Download appendix</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php wp_footer(); ?>
</body>

</html>