<?php get_header();?>


				
<!-- Sidebar widget -->
<?php if( is_active_sidebar('blog-sidebar') ):?>

        <?php dynamic_sidebar('blog-sidebar');?>

<?php endif;?>


<!-- Blog Listing 	 -->
<h1><?php echo single_cat_title();?></h1>

<?php get_template_part('template-parts/content','archive');?>


<?php previous_posts_link();?>
<?php next_posts_link();?>

			


<?php get_footer();?>