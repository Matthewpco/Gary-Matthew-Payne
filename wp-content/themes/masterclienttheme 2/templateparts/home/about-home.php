
<div class="sec-aboutme-1">
	<div class="container">
		<div class="john-About-Mn" data-aos="fade-up" data-aos-duration="1000">
			<div class="john-About-Me1">
				<img src="<?php echo get_option("about_img_url"); ?>" />
			</div>
			<div class="john-About-Me1 abt-me2">
				<h2>About Me</h2>
				<?php echo setting_to_paragraphs(get_option("about_home_text")); ?>
				<a href="<?php echo get_option("about_permalink"); ?>">Learn More</a>
			</div>
		</div>
	</div>
</div>
