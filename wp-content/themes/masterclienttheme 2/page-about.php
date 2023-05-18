<?php /* Template Name: About Us Template */

get_header();

$portfolio_urls = explode(",", get_option("about_portfolio_imgs_url"));

?>

<div class="inner-about-mn blog-main-headr">
	<div class="container">
		<div class="inner-about-blk" data-aos="fade-up" data-aos-duration="1000">
			<h1>About</h1>
		</div>
	</div>
</div>


<div class="sec-aboutme-one">
	<div class="container">
		<div class="john-About-one">
			<div class="john-About-Meone" data-aos="fade-up" data-aos-duration="1000">
				<img src="<?php echo get_option("about_img_url"); ?>" />
			</div>
			<div class="john-About-Meone abt-meone" data-aos="fade-up" data-aos-duration="1000">
				<h2>About Me</h2>
				<?php echo setting_to_paragraphs(get_option("about_page_text")); ?>

			</div>
		</div>
	</div>
</div>

<div class="sec-portfolio-mn">
	<div class="container">
		<div class="john-portfolio-blk" data-aos="fade-down" data-aos-duration="1000">
			<h2>Portfolio</h2>
			<p><?php echo get_option("portfolio_about_text"); ?></p>
		</div>
		<div class="portfolio-blk-1 portfolio-one" data-aos="fade-down" data-aos-duration="1000">
			<?php
			for($index=0; $index<count($portfolio_urls); $index++) {
				$portfolio_url = $portfolio_urls[$index];
				
				?>
				<a>
				  <img src="<?php echo $portfolio_url; ?>" class="thumbnail">
				</a>

				<!-- lightbox container hidden with CSS -->
				<!--<a href="#_" class="lightbox" id="img<?php echo $index; ?>">-->
				<!--  <img src="<?php echo $portfolio_url; ?>">-->
				<!--</a>-->
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
		
get_footer();
