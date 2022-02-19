<!--/=== Footer Start ===/-->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-block-outer">
                            <div class="footer-block" data-aos="fade-up" data-aos-duration="900">
                                <div class="logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
                                    </a>
                                </div>
                                <div class="footer-text">
                                    <p><?php the_field('footer_text', 'option'); ?></p>
                                </div>
                            </div>
                            <div class="footer-block" data-aos="fade-up" data-aos-duration="900">
                                <h6>Services</h6>
                                <ul>
                                    <li><a href="<?php the_permalink() ?>/services">Refining services</a></li>
                                    <li><a href="<?php the_permalink() ?>/services">Assaying services</a></li>
                                    <li><a href="<?php the_permalink() ?>/services">Precious metal brokerage</a></li>
                                    <li><a href="<?php the_permalink() ?>/services">Financing services</a></li>
                                </ul>
                            </div>
                            <div class="footer-block" data-aos="fade-up" data-aos-duration="900">
                                <h6>Our Company</h6>
                                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) );?> 
                            </div>
                            <div class="footer-block" data-aos="fade-up" data-aos-duration="900">
                                <h6>Contact</h6>
                                <div class="link">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <a target="blank" href="https://www.google.com/maps/place/25%C2%B020'43.5%22N+55%C2%B029'06.8%22E/@25.3454288,55.4830424,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x3ce734d29dfc853d!8m2!3d25.3454288!4d55.4852311?hl=en"><?php the_field('address', 'option'); ?></a>
                                </div>
                                <div class="link">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:<?php the_field('phone', 'option'); ?>">+<?php the_field('phone', 'option'); ?></a>
                                </div>
                                <div class="link">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                                </div>
                                <ul class="social-media">
                                    <li><a href="<?php the_field('twitter_link', 'option'); ?>" target="blank"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="<?php the_field('linkedin_link', 'option'); ?>" target="blank"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="<?php the_field('facebook_link', 'option'); ?>" target="blank"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="<?php the_field('instagram_link', 'option'); ?>" target="blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; 2022 Gulf Gold Refinery
                        </div>
                    </div>
                </div>
            </div>
            <div class="go-top">
                <a href="#" class="scrollto" data-attr-scroll="top">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </footer>
    <!--/=== Footer End ===/-->
    <?php wp_footer();?>
</body>

</html>