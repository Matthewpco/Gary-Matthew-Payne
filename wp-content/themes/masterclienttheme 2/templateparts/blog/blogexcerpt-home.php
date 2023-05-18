
<div class="newRecent-blk">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	<div class="blog-block"><h6><?php echo get_the_date(); ?></h6>
	<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
	
	<?php the_excerpt(); ?>
	</div>
	
</div>
