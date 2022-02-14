<?php
/**
 * Template Name: Services template
 */
get_header();
?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <section class="content">
        <div class="banner-slider-wrap">
            <div class="banner-content" data-aos="zoom-in" data-aos-duration="1200">
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
                    <div class="col-md-10 col-xl-8 col-xxl-7">
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
                <div class="row">

                    <?php if( have_rows('services') ): ?>
    
                        <?php while( have_rows('services') ): the_row(); ?>

                            <div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                                <div class="service-block">
                                    <div class="service-image">
                                        <img src="<?php the_sub_field('service_image'); ?>" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h5><?php the_sub_field('service_title'); ?></h5>
                                        <?php the_sub_field('service_content'); ?>
                                    </div>
                                </div>
                            </div>                                
                                                        
                            <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>

    </section>

<?php endwhile; else: endif;?>

<?php get_footer();?>




