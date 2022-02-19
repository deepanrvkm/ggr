<?php get_header();?>

<section class="content">
        <div class="banner-slider-wrap">
            <div class="banner-content" data-aos="fade-up" data-aos-duration="1200">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_field('banner_caption'); ?></h2>
                            <p><?php the_field('banner_text'); ?></p>
                            <a href="#" class="begin-btn scrollto" data-attr-scroll="section1">Click to begin</a>
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

        <div class="grid-block our-services"  id="section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">                             
                            <?php if( have_posts() ): while( have_posts() ): the_post();?>
                                <h2>Our Services</h2>
                                <p><?php the_field('our_services'); ?></p>
                            <?php endwhile; else: endif;?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $inner_page = new WP_Query( 'pagename=services' );
                        while ( $inner_page->have_posts() ) : $inner_page->the_post();

                        if( have_rows('services') ): 
                            $i = 0;
                            while( have_rows('services') ): the_row(); ?>
                                <?php $i++; ?>
                                <?php if( $i > 3 ): ?>
                                    <?php break; ?>
                                <?php endif; ?> 

                                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="900">
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
                                                            
                                <?php endwhile;

                        endif; 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="view-all">
                            <a href="<?php the_permalink() ?>/services">View All Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="getintouch-outer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="getintouch" data-aos="zoom-in" data-aos-duration="900">
                            <h3>Want to know more about our company?<br/>
                                Curious what else we do?</h3>
                            <a href="<?php the_permalink() ?>/contact" class="get-btn">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-block our-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title" data-aos="zoom-in" data-aos-duration="900">
                            <?php if( have_posts() ): while( have_posts() ): the_post();?>
                                <h2>Meet our team</h2>
                                <p><?php the_field('our_services'); ?></p>
                            <?php endwhile; else: endif;?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $inner_page = new WP_Query( 'pagename=our-team' );
                        while ( $inner_page->have_posts() ) : $inner_page->the_post();

                        if( have_rows('single') ): 
                            $i = 0;
                            while( have_rows('single') ): the_row(); ?>
                                <?php $i++; ?>
                                <?php if( $i > 3 ): ?>
                                    <?php break; ?>
                                <?php endif; ?> 

                                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="900">
                                    <div class="team-block">
                                        <div class="team-image">
                                            <img src="<?php the_sub_field('photo'); ?>" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h6><?php the_sub_field('name'); ?></h6>
                                            <?php the_sub_field('designation'); ?>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <?php endwhile;
    
                        endif; 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="view-all">
                            <a href="<?php the_permalink() ?>/our-team">View All Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="map-outer" data-aos="fade-up" data-aos-duration="900">
            <div id="map-canvas"></div>
        </div>
    </section>

<?php get_footer();?>