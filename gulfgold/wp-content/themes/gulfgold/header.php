<!DOCTYPE html>
<html lang="en" <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo( 'charset' );?>" />
    <title><?php bloginfo( 'name' );?></title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=0, width=device-width;" />
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.ico" />

	<?php wp_head();?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjQz592rqmKnA07HHROaBLQNj4mdKYQps&amp;sensor=false"></script>  
</head>

<body <?php body_class();?>>
	<?php wp_body_open();?>
    <!--/=== Header Start ===/-->
    <span id="top"></span>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-inner">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
                            </a>
                        </div>
                        <div class="main-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-outer' ) );?> 
                            <div class="link-block">
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
                            </div>
                            <ul class="social-media">
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="menu-icon">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    