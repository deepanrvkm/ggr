<?php
/**
 * Template Name: Contact template
 */
get_header();
?>
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
                    <div class="col-md-12">
                        <div class="content-wrap">
                        <div class="content-grid">
                            <div class="content-left contact" data-aos="fade-left" data-aos-duration="900">
                                <div class="contact-details">
                                    <h3><?php the_title();?></h3>
                                    <div class="link">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <a target="blank" href="https://www.google.com/maps/place/25%C2%B020'43.5%22N+55%C2%B029'06.8%22E/@25.3454288,55.4830424,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x3ce734d29dfc853d!8m2!3d25.3454288!4d55.4852311?hl=en">SAIF Zone 9244, Sharjah</a>
                                    </div>
                                    <div class="link">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <a href="tel:97165529909">+971 6552 9909</a>
                                    </div>
                                    <div class="link">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <a href="mailto:info@gulfrefinery.com">info@gulfrefinery.com</a>
                                    </div>
                                    <ul class="social-media">
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content-right" data-aos="fade-up" data-aos-duration="900">
                                <div class="title">
                                    <h3>Please send us a message</h3>                                    
                                </div>
                                <div class="content-area">
                                    <div class="contact-form">
                                        <form>
                                            <div class="contact-row">
                                                <div class="contact-grid">
                                                    <label>Name</label>
                                                    <input type="text" placeholder="Enter your name" class="text-box" required>
                                                </div>
                                                <div class="contact-grid">
                                                    <label>Country</label>
                                                    <input type="text" placeholder="Enter your country" class="text-box" required>
                                                </div>
                                            </div>
                                            <div class="contact-row">
                                                <div class="contact-grid">
                                                    <label>Email</label>
                                                    <input type="text" placeholder="Enter your email" class="text-box" required>
                                                </div>
                                                <div class="contact-grid">
                                                    <label>Telephone</label>
                                                    <input type="text" placeholder="Enter your telephone" class="text-box" required>
                                                </div>
                                            </div>
                                            <div class="contact-row">
                                                <div class="contact-grid">
                                                    <label>Message</label>
                                                    <textarea placeholder="Enter your message" class="text-box text-area"></textarea>
                                                </div>
                                            </div>
                                            <div class="contact-row">
                                                <div class="contact-grid">
                                                    <button type="submit" class="send-btn">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
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