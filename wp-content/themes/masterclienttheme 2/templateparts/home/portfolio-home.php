
<?php
	$portfolio_urls = explode(",", get_option("portfolio_imgs_url"));
?>

<div class="sec-portfolio-mn">
	<div class="container">
		<div class="john-portfolio-blk">
			<h2>Portfolio</h2>
			<p><?php echo setting_to_paragraphs(get_option("portfolio_home_text")); ?></p>
		</div>
		<div class="portfolio-blk-1 portfolio-1 port-1">
			<?php
			for($index=0; $index<count($portfolio_urls); $index++) {
				$portfolio_url = $portfolio_urls[$index];
				
				?>
				<a>
				  <img src="<?php echo $portfolio_url; ?>" class="thumbnail">
				</a>

				<!-- lightbox container hidden with CSS -->
				<a href="#_" class="lightbox" id="img<?php echo $index; ?>">
				  <img src="<?php echo $portfolio_url; ?>">
				</a>
			<?php
			}
			?>

		</div>

			
	</div>
</div>
