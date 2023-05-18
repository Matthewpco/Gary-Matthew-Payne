			<div class="sec-footer-mn">
				<div class="container">
					<div class="john-footer-blk">
						<h6>SHARE, LIKE, REPEAT</h6>
						<h2>Let's Connect</h2>

						<div class="john-ftr-1">
							<?php
								wp_nav_menu( array(
								  'theme_location'   => 'footer-menu',
								  'menu_class' => '',
								  'menu_id' => 'footer-menu',
								  'container' => ''
								) );
							  ?>
						</div>

						<div class="social-links">
							<?php
								$twitterURL = get_option("twitter_url");
								if(strlen($twitterURL) > 0) { ?>
									<a href="<?php echo $twitterURL; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$behanceURL = get_option("behance_url");
								if(strlen($behanceURL) > 0) { ?>
									<a href="<?php echo $behanceURL; ?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$facebookURL = get_option("facebook_url");
								if(strlen($facebookURL) > 0) { ?>
									<a href="<?php echo $facebookURL; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$instagramURL = get_option("instagram_url");
								if(strlen($instagramURL) > 0) { ?>
									<a href="<?php echo $instagramURL; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$linkedinURL = get_option("linkedin_url");
								if(strlen($linkedinURL) > 0) { ?>
									<a href="<?php echo $linkedinURL; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$pinterestURL = get_option("pinterest_url");
								if(strlen($pinterestURL) > 0) { ?>
									<a href="<?php echo $pinterestURL; ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$tumblrURL = get_option("tumblr_url");
								if(strlen($tumblrURL) > 0) { ?>
									<a href="<?php echo $tumblrURL; ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
								<?php }
							?>
							<?php
								$youtubeURL = get_option("youtube_url");
								if(strlen($youtubeURL) > 0) { ?>
									<a href="<?php echo $youtubeURL; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								<?php }
							?>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script>
		  AOS.init();
		</script>

		<script>
		/*fn for nav toggel*/
		$(".nav-collapse-btn").click(function(){
			$(".nav-main").toggleClass("show-nav");
		});

		</script>
		<?php wp_footer(); ?>
	</body>
</html>
