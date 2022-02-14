<?php get_header();?>

<h1>Search Results for '<?php echo get_search_query();?>'</h1>
				
<?php get_template_part('template-parts/content','searchresults');?>

<?php previous_posts_link();?>
<?php next_posts_link();?>


<?php get_footer();?>