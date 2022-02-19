<?php get_header();?>

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
                <?php if( have_rows('banner_images') ): ?>
                    <?php while( have_rows('banner_images') ): the_row(); ?>
                        <div class="banner-image">
                            <img src="<?php the_sub_field('banner_image'); ?>" alt="">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>                
            </div>
        </div>

        <div class="content-block-outer">
            <div class="container">             
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="content-wrap">
                        <div class="content-grid">
                            <div class="content-left" data-aos="fade-left" data-aos-duration="900">
                                <?php the_post_thumbnail();?>
                            </div>
                            <div class="content-right" data-aos="fade-up" data-aos-duration="900">
                                <div class="title">
                                    <h3><?php the_title();?></h3>                                    
                                </div>
                                <div class="content-area">
                                    <?php the_content();?>
                                    <?php if( get_field('download_links') ): ?>
                                        <div class="download">
                                            <div class="download-btn">
                                                <i class="fa fa-download" aria-hidden="true"></i>                                        
                                                <span><?php the_field('dowload_button');?> </span>
                                            </div>
                                            <?php the_field('download_links');?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endwhile; else: endif;?>

<?php get_footer();?>