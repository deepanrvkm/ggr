<?php
/**
 * Template Name: Services template
 */
get_header();
?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <section class="content">
        <div class="banner-slider-wrap">
            <div class="banner-content" data-aos="fade-up" data-aos-duration="1200">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Focused on Eternal Traditional Gold Value</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider">
                <div class="banner-image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/banner1.jpg" alt="">
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
                    <div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="service-block">
                            <div class="service-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/services1.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h5>Refining services</h5>
                                <p>Gulf Gold Refinery provides high quality gold and silver refining services. We produce gold bars of standard sizes and purities. Our refined gold, with purity up to 9999, is extensively tested and verified throughout the refining process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="service-block">
                            <div class="service-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/services2.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h5>Assaying services</h5>
                                <p>Building on our thorough refining process, we have the knowledge, the skills, the experience, as well as the tools that give us the ability to confirm the gold and silver content in an alloy or metal scrap in a standardized assay process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="service-block">
                            <div class="service-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/services3.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h5>Precious metal brokerage</h5>
                                <p>Adding to our portfolio of services that are currently available to our clients, we acknowledge that physical gold and silver trading is available to clients and this is one of our very well established services in the market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="service-block">
                            <div class="service-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/services4.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h5>Financing services</h5>
                                <p>To provide clients with the financing that they require to execute their business activities smoothly and successfully.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endwhile; else: endif;?>

<?php get_footer();?>




