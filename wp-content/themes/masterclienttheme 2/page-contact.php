<?php /* Template Name: Contact Us Template */

get_header();

$phones = explode(",", get_option("contact_phones"));

?>

<div class="inner-about-mn blog-main-headr-3">
	<div class="container">
		<div class="inner-about-blk" data-aos="fade-down" data-aos-duration="1000">
			<h1>Contact</h1>
		</div>
	</div>
</div>

<div class="contact-mid-inner">
	<div class="container">
		<div class="contact-mid-one">
			<div class="contact-mid-blk-1 mid-cntct" data-aos="fade-down" data-aos-duration="1000">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Contact-1.png"/>
				<h5>Call Us Any Time</h5>
				<ul>
					<?php
						foreach($phones as $phone) {
							$phone_parts = explode(":", trim($phone));
							
							if(count($phone_parts) >= 2) {
								echo '<li><a href="tel:' . trim($phone_parts[1]) . '">' . trim($phone_parts[0]) . ': ' . trim($phone_parts[1]) . '</a></li>';
							}
						}
					?>
				</ul>
			</div>
			<div class="contact-mid-blk-1 mid-cntct-1" data-aos="fade-up" data-aos-duration="1000">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Contact-2.png"/>
				<h5>Address</h5>
				<p><?php echo str_replace("\n", "<br />", get_option("contact_address")); ?></p>
			</div>
			<div class="contact-mid-blk-1 mid-cntct-2" data-aos="fade-down" data-aos-duration="1000">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Contact-3.png"/>
				<h5>Email</h5>
				<ul>
					<?php
						$emails = explode("\n", get_option("contact_email"));
						
						foreach($emails as $email) {
							echo '<li><a href="mailto:' . $email . '">' . $email . '</a></li>';
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="sec-contact-News-inner">
	<div class="container">
		<div class="john-contact-blk">
			<h2>Get In Touch With Me</h2>
			<?php echo setting_to_paragraphs(get_option("contact_text")); ?>
			<div class="john-contact-top" data-aos="zoom-in" data-aos-duration="1000">

			<form action="action_page.php">
				<div class="main-cntct-fm">
				<input type="text" id="fname" name="firstname" placeholder="Your Name:" required>
				</div>
				<div class="main-cntct-fm">
				<input type="tel" id="lname" name="Phone Num:" placeholder="Phone Num:" required>
				</div>
				<div class="main-cntct-fm cntct-fm-1">
				<input type="text" id="email" name="email" placeholder="Email:" required>
				</div>
				<textarea id="Message" name="Message:" placeholder="Message:" style="height:200px" required></textarea >

				<input class="cntct-btn" type="submit" value="Submit Now!" required >

			  </form>
		  </div>
		</div>
	</div>
</div>

<?php
		
get_footer();
