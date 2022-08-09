<?php

get_header();
?>
<section class="about">
    <div class="about__list">
        <div class="about__container">
            <div class="about__list-paper">
                <div class="red__block">
                    <span>
                        About the project
                    </span>
                </div>
                <h1 class="title"><?php the_field('about_title'); ?></h1>
                <div class="redline"></div>
                <div class="bold__paragraph">
                    <?php the_field('about_subtitle'); ?>
                </div>
                <div class="content__paragraph">
                    <p>
                        <span><?php the_field('bold_part_content_paragraph'); ?></span>
                        <?php the_field('content_paragraph'); ?>
                    </p>

                    <?php the_field('second_paragraph'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="about__sections">
        <div class="about__container">
            <div class="about__sections-item download__section">
                <div class="row-about">
                    <div class="title__box">
                        <h2 class="section__title">Download Documents</h2>
                    </div>
                    <div class="section__description">
                        <h3 class="description__title"><?php the_field('download_title'); ?></h3>
                        <div class="redline"></div>
                        <div class="description__text">
                            <span><?php the_field('download_bold_part_paragraph'); ?></span>
                            <?php the_field('download_paragraph'); ?>
                        </div>
                        <div class="download__buttons">
                            <a href="<?php the_field('paper_file'); ?>"
                                download="<?php the_field('paper_file_title'); ?>"
                                class="download__buttons-item download__paper">Download Paper <span><img
                                        src="<?php echo get_theme_file_uri() ?>/assets//img/icons/arrow-down.svg"
                                        alt=""></span></a>
                            <a href="<?php the_field('app_file'); ?>" download="<?php the_field('app_file_title'); ?>"
                                class="download__buttons-item download__app">Download Appendix <span><img
                                        src="<?php echo get_theme_file_uri() ?>/assets/img/icons/arrow-down.svg"
                                        alt=""></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__sections-item authors__section">
                <div class="row-about">
                    <div class="title__box authors__title">
                        <h2 class="section__title">Authors</h2>
                    </div>
                    <div class="authors__items">
                        <?php
						$authors = new WP_Query(array(
							'numberposts' => -1,
							'post_type'   => 'authors',
						));

						while($authors->have_posts()){
							$authors->the_post();?>
                        <div class="authors__items-item">
                            <div class="item-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                    alt="Author img"></div>
                            <div class="item-name"><?php the_field('first_name_and_last_name'); ?></div>
                            <div class="redline"></div>
                            <div class="item-job"><?php the_field('job_title'); ?></div>
                        </div>
                        <?php
						}
						?>

                    </div>
                </div>
            </div>
            <div class="about__sections-item download__section acknowledgements__section">
                <div class="row-about">
                    <div class="title__box">
                        <h2 class="section__title">Acknowledgements</h2>
                    </div>
                    <div class="section__description ">
                        <h3 class="description__title"><?php the_field('acknowledgements_title') ?></h3>
                        <div class="redline"></div>
                        <div class="description__text">
                            <span><?php the_field('acknowledgements_part_paragraph') ?></span>
                            <?php the_field('acknowledgements_main_paragraph'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>