<?php get_header();?>

<section class="content">
    <div class="content-block-outer">
        <div class="container">             
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="content-only">
                        <h2>Search Results for '<?php echo get_search_query();?>'</h2>				
                        <?php get_template_part('template-parts/content','searchresults');?>                    
                        <?php previous_posts_link();?>
                        <?php next_posts_link();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>