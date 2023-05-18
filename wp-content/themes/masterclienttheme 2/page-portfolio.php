<?php /* Template Name: Portfolio Template */
get_header();

$portfolio_urls = explode(",", get_option("portfolio_page_img_urls"));
?>

<div class="inner-about-mn blog-main-headr-port">
	<div class="container">
		<div class="inner-about-blk" data-aos="fade-down" data-aos-duration="1000">
			<h1>Portfolio</h1>
		</div>
	</div>
</div>


<div class="inner-portfolio-mn">
	<div class="container">
		<div class="inner-portfolio-blk">
			<div class="inner-prtfolio-1" data-aos="zoom-in" data-aos-duration="1000">
				<?php
					for($index=0; $index<count($portfolio_urls); $index++) {
						$portfolio_url = $portfolio_urls[$index];
						
						?> <img src="<?php echo $portfolio_url; ?>"> <?php
					}
				?>
			</div>
			
			

		</div>
	</div>
</div>
<?php
		
get_footer();
