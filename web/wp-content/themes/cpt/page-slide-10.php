<?php wp_head();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; the_title(); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="containerforheader">
        <div class="headerfors10">
            <div class="left">
                <a href="/"><button class="bthbut"><img
                            src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-left-arrow.png" alt=""> back
                        to home</button></a>
                <a class="atpbut" href="/about">about the project</a>
            </div>
            <div class="right">
                <a href="/slide-1"><button class="strtbut">start<img
                            src="<?php echo get_theme_file_uri(); ?>/assets/img/icons/right-arrow.svg"
                            alt="arrow"></button></a>
            </div>
        </div>
    </div>

    <div class="container containerfls">
        <div class="left__block leftof10s">
            <div class="menu__title-close"><span class="menu__title">Close</span>
                <div class="burger">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="menu__icon burgerforslides">
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
                                <img src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-left-arrow.png"
                                    alt="">
                            </span>Back to home</a>
                    </div>
                    <div class="links__container">
                        <a href="/about" class="homepage__link about__link">About the project</a>
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

            <div class="third-part"
            style="height:auto;">
                <h2 class="wow fadeIn" data-wow-duration="0.8s"><?php the_field('title_left');?></h2>
                <div class="redLine fadeIn" data-wow-delay="0.2s" data-wow-duration="0.8s"></div>
                <div class="big wow fadeIn" data-wow-delay="0.5s" data-wow-duration="0.8s">
                    <?php the_field('text_in_left_part');?>
                </div>
            </div>
            <div class="dbuttons">
                <div>
                    <a href="<?php the_field('parer_file', 7); ?>" download="<?php the_field('paper_file_title', 7);?>"
                        class="downlpaper">Download Paper<img
                            src="<?php echo get_theme_file_uri();?>/assets/img/icons/arrow-down.svg" alt=""></a>
                </div>
                <div>
                    <a href="<?php the_field('app_file', 7); ?>" download="<?php the_field('app_file_title', 7); ?>"
                        class="downlappend">Download Appendix<img
                            src="<?php echo get_theme_file_uri();?>/assets/img/icons/arrow-down.svg" alt=""></a>
                </div>
            </div>
            <div class="menulist">
                <h3 class="chapters">Chapters</h3>
                <div class="orange-line"></div>
                <ul>
                    <a href="/slide-1">
                        <li><span class="number">1</span><span class="dot">. </span>In your neighborhood</li>
                    </a>
                    <a href="/slide-2">
                        <li><span class="number">2</span><span class="dot">. </span>Arrested</li>
                    </a>
                    <a href="/slide-3">
                        <li><span class="number">3</span><span class="dot">. </span>Bail & booking</li>
                    </a>
                    <a href="/slide-4">
                        <li><span class="number">4</span><span class="dot">. </span>Pre-trail jail</li>
                    </a>
                    <a href="/slide-5">
                        <li><span class="number">5</span><span class="dot">. </span>Trial & sentencing</li>
                    </a>
                    <a href="/slide-6">
                        <li><span class="number">6</span><span class="dot">. </span>Prison</li>
                    </a>
                    <a href="/slide-7">
                        <li><span class="number">7</span><span class="dot">. </span>Release assessment</li>
                    </a>
                    <a href="/slide-8">
                        <li><span class="number">8</span><span class="dot">. </span>Release</li>
                    </a>
                    <a href="/slide-9">
                        <li><span class="number">9</span><span class="dot">. </span>Parole</li>
                    </a>
                </ul>
            </div>
            <div class="fourth-part">
                <ul>
                    <li>
                        <a href="/slide-1">
                            <div class="visited"></div>
                        </a>

                    </li>
                    <li>
                        <a href="/slide-2">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-3">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-4">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-5">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="slide-6">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-7">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-8">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-9">
                            <div class="visited"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-10">
                            <div class="current"></div>
                        </a>
                    </li>

                    <li class="mobbut">
                        <a href="/" class="next-slide"><span>back to home</span> <img class="right-arrow"
                                src="<?php echo get_theme_file_uri();?>/assets/img/icons/right-white-arrow.png"
                                alt="arrow"></a>
                    </li>
                    <li class="mobbut mobbut2">
                        <a href="/slide-9"><span>previous step</span>
                            > </a>
                    </li>
                </ul>
            </div>
            <div class="fifth-part">
                <a href="/slide-9"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-left-arrow.png"
                        alt="arrow"> <span>previous step</span></a>
                <a class="next-slide" href="/"><span>back to home</span> <img class="right-arrow"
                        src="<?php echo get_theme_file_uri();?>/assets/img/icons/right-white-arrow.png" alt="arrow"></a>
            </div>
        </div>
        <div class="right_block rb10">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/background_10.png);" alt="" class="background">
            <div class="infolist">
                <div class="first-block block">
                    <h3><?php the_field('title_1');?></h3>
                    <span class="orangeline"></span>
                    <p><?php the_field('about_1');?></p>
                    <div>
                        <?php if( have_rows('first_list')):?>
                        <ul>
                            <?php
      while( have_rows('first_list')): the_row();
      ?>
                            <li><?php the_sub_field('item_1');?></li>
                            <li><?php the_sub_field('item_2');?></li>
                            <li><?php the_sub_field('item_3');?></li>
                            <li><?php the_sub_field('item_4');?></li>
                            <li><?php the_sub_field('item_5');?></li>
                            <?php endwhile;
                  endif;?>
                        </ul>
                        <?php if( have_rows('first_list')):?>
                        <ul>
                            <?php
      while( have_rows('first_list')): the_row();
      ?>
                            <li><?php the_sub_field('item_6');?></li>
                            <li><?php the_sub_field('item_7');?></li>
                            <li><?php the_sub_field('item_8');?></li>
                            <li><?php the_sub_field('item_9');?></li>
                            <?php endwhile;
                  endif;?>
                        </ul>
                    </div>
                </div>
                <div class="second-block block">
                    <h3><?php the_field('title_2');?></h3>
                    <span class="orangeline"></span>
                    <p><?php the_field('about_1');?></p>
                    <div>
                        <?php if( have_rows('legal_system_technologies')):?>
                        <ul>
                            <?php
      while( have_rows('legal_system_technologies')): the_row();
      ?>
                            <h4>Legal System Technologies</h4>
                            <li><?php the_sub_field('item_1');?></li>
                            <li><?php the_sub_field('item_2');?></li>
                            <li><?php the_sub_field('item_3');?></li>
                            <li><?php the_sub_field('item_4');?></li>
                            <?php endwhile;
                  endif;?>
                        </ul>
                        <?php if( have_rows('non-legal_system_technologies')):?>
                        <ul>
                            <?php
                     while( have_rows('non-legal_system_technologies')): the_row();
                     ?>
                            <h4>Non-legal System Technologies </h4>
                            <li><?php the_sub_field('item_1');?></li>
                            <li><?php the_sub_field('item_2');?></li>
                            <li><?php the_sub_field('item_3');?></li>
                            <li><?php the_sub_field('item_4');?></li>
                            <?php endwhile;
                  endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fourth-part">
        <div class="containerforheader">
            <div class="right_block mobile">
                <div class="fourth-part">
                    <ul>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="visited"></div>
                        </li>
                        <li>
                            <div class="current"></div>
                        </li>
                        <li class="mobbut">
                            <a href="/slide-9"><span>previous step</span>
                            </a>
                        </li>
                        <li class="mobbut mobbut2">
                            <a href="/" class="next-slide"><span>back to home</span> <img class="right-arrow"
                                    src="<?php echo get_theme_file_uri();?>/assets/img/icons/right-white-arrow.png"
                                    alt="arrow"></a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php wp_footer();?>
</body>

</html>