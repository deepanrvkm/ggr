<?php
/**
 * Template Name: Team template
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
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Sudheesh Soman</h6>
                                <p>General Director</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Vipin Raj</h6>
                                <p>Sales Director</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Dhanya Nambiar</h6>
                                <p>Compliance Officer</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Sudheesh Soman</h6>
                                <p>General Director</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Vipin Raj</h6>
                                <p>Sales Director</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Dhanya Nambiar</h6>
                                <p>Compliance Officer</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Vipin Raj</h6>
                                <p>Sales Director</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-duration="900">
                        <div class="team-block">
                            <div class="team-image">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h6>Sudheesh Soman</h6>
                                <p>General Director</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-12" data-aos="zoom-in" data-aos-duration="900">
                        <div class="ggr-team">
                            <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/content/team.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endwhile; else: endif;?>

<?php get_footer();?>




