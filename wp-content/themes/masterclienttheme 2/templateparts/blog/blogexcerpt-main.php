
<div class="inner-blog-1">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	<div class="inner-blog-content">
		<span><?php echo get_the_date(); ?></span>
		<?php
			  if ( is_sticky() && is_home() && ! is_paged() ) {
				printf( '<span class="sticky-post">%s</span>', 'Featured' );
			  }
			  the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
	    ?>
		<?php the_excerpt(); ?>
		<a class="read-btn" href="<?php echo get_permalink(); ?>">Read More</a>
	</div>
</div>
