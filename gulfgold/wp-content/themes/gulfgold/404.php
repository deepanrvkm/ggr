<?php get_header(); ?>

<section class="content">
    <div class="content-block-outer">
        <div class="container">             
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="content-only">
                        <h1 style="color:#f6921e">404 ERROR</h1>
                        <p  style="color:#f6921e">Sorry the page not found</p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="get-btn">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>