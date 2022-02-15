<?php
/**
 * Template Name: Team template
 */
get_header();
?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

<section class="content">
        <div class="banner-slider-wrap">
            <div class="banner-content" data-aos="fade-up" data-aos-duration="900">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_field('banner_caption'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider">
                <div class="banner-image">
                    <img src="<?php the_field('banner_image'); ?>" alt="">
                </div>
            </div>
        </div>

        <div class="content-block-outer">
            <div class="container">             
                <div class="row justify-content-md-center">
                    <div class="col-md-9 col-xl-7">
                        <div class="services-content" data-aos="fade-up" data-aos-duration="900">
                            <div class="title">
                                <h3><?php the_title();?></h3>                                    
                            </div>
                            <div class="content-area">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <?php if( have_rows('single') ): ?>
        
                        <?php while( have_rows('single') ): the_row(); ?>
                            
                            <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                                <div class="team-block">
                                    <div class="team-image">
                                        <img src="<?php the_sub_field('photo'); ?>" alt="">
                                    </div>
                                    <div class="team-content">
                                        <h6><?php the_sub_field('name'); ?></h6>
                                        <?php the_sub_field('designation'); ?>
                                        <ul>
                                            <li><a target="blank" href="<?php the_sub_field('facebook'); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a target="blank" href="<?php the_sub_field('twitter'); ?>"><i class="fa fa-twitter-square"></i></a></li>
                                            <li><a target="blank" href="<?php the_sub_field('linkedin'); ?>"><i class="fa fa-linkedin-square"></i></a></li>                                            
                                            <li><a target="blank" href="<?php the_sub_field('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                                        
                            <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12" data-aos="zoom-in" data-aos-duration="900">
                        <div class="ggr-team">
                            <img src="<?php the_field('group_photo'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endwhile; else: endif;?>

<?php get_footer();?>




