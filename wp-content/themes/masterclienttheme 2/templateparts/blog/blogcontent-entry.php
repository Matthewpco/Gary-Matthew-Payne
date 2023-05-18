
<div class="blk-detailed-blog detailed-blog-2">
	<!-- Col-1 -->
	<div class="col-blog-1">
		<h3><?php the_title() ?></h3>
		<img class="orange-line" src="<?php echo get_template_directory_uri(); ?>/images/orange-line.png"/>
		<div class="author-box">
			<img class="author-img" src="<?php echo get_template_directory_uri(); ?>/images/author-img.png"/>
			<div class="author-content">
				<b><?php echo get_option("client_name"); ?></b>
				<p><?php the_date(); ?></p>
			</div>
		</div>
	</div>
	
	<!-- Col-2 -->
	<div class="col-blog-2">
		<?php the_post_thumbnail('medium') ?>
		
		<?php the_content(); ?>
	</div>
	<!-- Col-2 -->


	<!-- Col-3 -->
	<div class="col-blog-3">
	

	</div>


	<!-- Col-3 -->

	<!-- Col-4 -->
	<div class="col-blog-4">
	
		<div class="related-tag">
			<h4>RELATED TAGS</h4>
			<ul>
				<?php
					$posttags = get_the_tags();
					if ($posttags) {
						foreach($posttags as $tag) {
							echo '<a href="' . get_tag_link($tag->term_id) . '"><li>' . $tag->name . '</li></a>'; 
						}
					}
				?>
			</ul>
		</div>



	</div>
</div>
