<footer class="footer"
    style="background:url('<?php echo get_theme_file_uri()?>/assets/img/footer_about.png') no-repeat; background-size: cover; background-position: center;">
    <div class=" about__container">

        <div class="header__buttons footer__buttons">
            <div class="header__buttons-left footer__buttons-left">
                <div class="back__to-block">
                    <a href="/" class="back__to"><span>
                            <img class="arrow left__arrow"
                                src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-white-arrow.png" alt="">
                        </span>Back to
                        home</a>
                </div>
                <a href="<?php echo site_url('/about') ?>" class="homepage__link about__page-link">About the project</a>
            </div>
            <div class="header__buttons-right footer__buttons-right">
                <a href="<?php echo site_url('/slide-1'); ?>" class="start__button">Start <span
                        class="arrow arrow-animation"><img
                            src="<?php echo get_theme_file_uri() ?>/assets/img/icons/left-blue-arrow.png" alt="arrow"
                            class="arrow__icon "></span></a>
            </div>
        </div>
        <div class="logo__block">
            <img src="<?php echo get_theme_file_uri() ?>/assets/img/logo_white.svg" alt="Logo" class="logo__block-img">
        </div>
    </div>

</footer>

</body>

</html>
<?php wp_footer(); ?>