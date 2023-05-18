
<div class="sec-detailed-blog">
	<div class="container">
		<div class="main-detailed-blog">

			<div class="blk-detailed-blog detailed-blog-1">
				<ul>
					<?php
						$twitterURL = get_option("twitter_url");
						if(strlen($twitterURL) > 0) { ?>
							<li class="tw-i"><a href="<?php echo $twitterURL; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<?php }
					?>
					
					<?php
						$behanceURL = get_option("behance_url");
						if(strlen($behanceURL) > 0) { ?>
							<li class="be-i"><a href="<?php echo $behanceURL; ?>"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						<?php }
					?>
					
					<?php
						$facebookURL = get_option("facebook_url");
						if(strlen($facebookURL) > 0) { ?>
							<li class="fb-i"><a href="<?php echo $facebookURL; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<?php }
					?>
					
					<?php
						$instagramURL = get_option("instagram_url");
						if(strlen($instagramURL) > 0) { ?>
							<li class="in-i"><a href="<?php echo $instagramURL; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<?php }
					?>
					
					<?php
						$linkedinURL = get_option("linkedin_url");
						if(strlen($linkedinURL) > 0) { ?>
							<li class="lnk-i"><a href="<?php echo $linkedinURL; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<?php }
					?>
				</ul>
			</div>
