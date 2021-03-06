<?php if( have_posts() ): while( have_posts() ): the_post();?>

	<!-- Date -->
	<p><?php echo get_the_date('l jS F, Y');?></p>


	<!-- Content -->
	<?php the_content();?>


	<!-- Author name -->
	<?php 
		$fname = get_the_author_meta('first_name');
		$lname = get_the_author_meta('last_name');
	?>

	<p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>


	<!-- Tags -->
	<?php
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

			<a href="<?php echo get_tag_link($tag->term_id);?>">
				<?php echo $tag->name;?>
			</a>

	<?php endforeach; endif;?>




	
	<!-- Category -->
	<?php 
	$categories = get_the_category();
	foreach($categories as $cat):?>
		
			<a href="<?php echo get_category_link($cat->term_id);?>">
				<?php echo $cat->name;?>
			</a>
	<?php endforeach;?>




	<!-- Comments -->
	<?php comments_template();?>




<?php endwhile; else: endif;?>

