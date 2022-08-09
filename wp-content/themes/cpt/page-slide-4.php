<?php wp_head();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; the_title(); ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body>
    <div class="container">
        <div class="left__block">
            <div class="fixed">
                <div>
            <div class="first-part">
                <a href="/"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-left-arrow.png"
                        alt="arrow"> BACK TO HOME</a>
                <img class="logo" src="<?php echo get_theme_file_uri();?>/assets/img/logo_sliders.svg" alt="">
            </div>
            <div class="second-part">
                <a href="/about">about the project</a>
                <a href="<?php the_field('app_file', 7); ?>"
                    download="<?php the_field('app_file_title', 7); ?>">download appendix</a>
            </div>
            </div>
            <div class="third-part">
                <div class="left-text">
                <h2 class="wow fadeIn" data-wow-duration="0.8s"><?php the_field('title');?></h2>
                <div class="redLine wow fadeIn" data-wow-delay="0.2s" data-wow-duration="0.8s"></div>
                <div class="wow fadeIn" data-wow-delay="0.5s" data-wow-duration="0.8s">
                    <?php the_field('text_in_left_part');?>
            </div>
</div>
            </div>
            <div class="bottom-fix">
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
                            <div class="current"></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-5">
                            <div></div>
                        </a>
                    </li>
                    <li>
                        <a href="slide-6">
                            <div></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-7">
                            <div></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-8">
                            <div></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-9">
                            <div></div>
                        </a>
                    </li>
                    <li>
                        <a href="/slide-10">
                            <div></div>
                        </a>
                    </li>
                    <li class="mobbut">
                        <a href="/slide-5" class="next-slide"><span>next step</span> <img class="right-arrow"
                                src="<?php echo get_theme_file_uri();?>/assets/img/icons/right-white-arrow.png"
                                alt="arrow"></a>
                    </li>
                    <li class="mobbut mobbut2">
                        <a href="/slide-3"><span>previous step</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="fifth-part">
                <a href="/slide-3"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-left-arrow.png"
                        alt="arrow"> <span>previous step</span></a>
                <a class="next-slide" href="/slide-5"><span>next step</span> <img class="right-arrow"
                        src="<?php echo get_theme_file_uri();?>/assets/img/icons/right-white-arrow.png" alt="arrow"></a>
            </div>
        </div>
        </div>
        </div>

        <div class="right-block">
        <img  class="background" src="<?php echo the_post_thumbnail_url();?>" alt="">
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
                                <img src="<?php echo get_theme_file_uri() ?>/assets/img/icons/gray-left-arrow.png"
                                    alt="">
                            </span>Back to
                            home</a>
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
            <div class="i i1" id="i4-1">i
                <div class="ring"></div>
                <span class="connector connector1"></span>
                <div class="pop-up pop-up1">
                    <div class="close-pop-up"><img
                            src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-crestic.png" alt="x"></div>
                    <h3><?php the_field('title_for_pop-up_1');?></h3>
                    <span class="orange-line"></span>
                    <p><?php the_field('description_for_pop-up_1');?></p>

                    <button class="learn-more lm1">learn more</button>
                </div>
            </div>

            <div class="i i2" id="i4-2">i
                <div class="ring"></div>
                <span class="connector connector2"></span>
                <div class="pop-up pop-up2">
                    <div class="close-pop-up"><img
                            src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-crestic.png" alt="x"></div>
                    <h3><?php the_field('title_for_pop-up_2');?></h3>
                    <span class="orange-line"></span>
                    <p><?php the_field('description_for_pop-up_2');?></p>

                    <button class="learn-more lm2">learn more</button>
                </div>
            </div>

            <div class="i i3" id="i4-3">i
                <div class="ring"></div>
                <span class="connector connector3"></span>
                <div class="pop-up pop-up3">
                    <div class="close-pop-up"><img
                            src="<?php echo get_theme_file_uri();?>/assets/img/icons/gray-crestic.png" alt="x"></div>
                    <h3><?php the_field('title_for_pop-up_3');?></h3>
                    <span class="orange-line"></span>
                    <p><?php the_field('description_for_pop-up_3');?></p>

                    <button class="learn-more lm3">learn more</button>
                </div>
            </div>
        </div>
    </div>

    <div class="all-info al1 panel_lk_recall floatform">
        <button class="close"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/crestic.png"
                alt="x"></button>
        <div class="containerforall-info">
            <h3><?php the_field('title_for_pop-up_1');?></h3>
            <span class="orange-line"></span>
            <p><?php the_field('description_for_pop-up_1');?></p>
            <div class="moreinfo">
                <div>more info on</div>
            </div>

</div>
      </div>
   </div>

   <div class="all-info al1 panel_lk_recall floatform">
      <button class="close"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/crestic.png" alt="x"></button>
      <div class="containerforall-info">
         <h3><?php the_field('title_for_pop-up_1');?></h3>
         <span class="orange-line"></span>
        <div class="first-paragraph"><?php the_field('description_for_pop-up_1');?></div>
         <div class="moreinfo">
            <div>more info on</div>
         </div>
         <h4><?php the_field('subtitle_1');?></h4>
     <?php the_field('more_info_for_pop-up_1');?>
      <?php if( have_rows('lilst_items')):?>
      <ul>
      <?php
      while( have_rows('lilst_items')): the_row();
      ?>
                <li><?php echo the_sub_field('item_1');?></li>
                <li><?php echo the_sub_field('item_2');?></li>
                <?php endwhile;

    endif; ?>

      </ul>
      </div>
   </div>

   <div class="all-info al2 panel_lk_recall floatform">
      <button class="close"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/crestic.png" alt="x"></button>
      <div class="containerforall-info">
         <h3><?php the_field('title_for_pop-up_2');?></h3>
         <span class="orange-line"></span>
         <div class="first-paragraph"><?php the_field('description_for_pop-up_2');?></div>
         <div class="moreinfo">
            <div>more info on</div>
         </div>
         <h4><?php the_field('subtitle_2');?></h4>
     <?php the_field('more_info_for_pop-up_2');?>
    
              <?php if( have_rows('lilst_items_2')):?>
      <ul>
      <?php
      while( have_rows('lilst_items_2')): the_row();
      ?>
                <li><?php echo the_sub_field('item_1');?></li>
                <li><?php echo the_sub_field('item_2');?></li>
                <li><?php echo the_sub_field('item_3');?></li>
                <li><?php echo the_sub_field('item_4');?></li>
                <li><?php echo the_sub_field('item_5');?></li>
                <?php endwhile;

    endif; ?>

      </ul>
      </div>
   </div>

   <div class="all-info al3 panel_lk_recall floatform">
      <button class="close"><img src="<?php echo get_theme_file_uri();?>/assets/img/icons/crestic.png" alt="x"></button>
      <div class="containerforall-info">
         <h3><?php the_field('title_for_pop-up_3');?></h3>
         <span class="orange-line"></span>
        <div class="first-paragraph"><?php the_field('description_for_pop-up_3');?></div> 
         <div class="moreinfo">
            <div>more info on</div>
         </div>
          <h4><?php the_field('subtitle_3');?></h4>
     <?php the_field('more_info_for_pop-up_3');?>
         
      </div>
   </div>
      <?php wp_footer();?>
</body>

</html>