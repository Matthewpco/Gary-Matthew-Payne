<?php
require_once("menus/custommenu.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link href="<?php echo get_stylesheet_uri(); ?>?ver=1.0" rel="stylesheet" type="text/css" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title><?php if(is_front_page() || is_home()){
			echo get_bloginfo('name');
		} else{
			echo wp_title(''); echo ' | ';  bloginfo( 'name' );
		}?></title>
		
		<style type="text/css">
			/*.inner-prtfolio-1 {*/
			/*	background-image: url(<?php echo get_option("portfolio_img_url_1"); ?>);*/
			/*}*/
			/*.iner-port-1 {*/
			/*	background-image: url(<?php echo get_option("portfolio_img_url_2"); ?>);*/
			/*}*/
			/*.iner-port-2 {*/
			/*	background-image: url(<?php echo get_option("portfolio_img_url_3"); ?>);*/
			/*}*/
			/*.iner-port-3 {*/
			/*	background-image: url(<?php echo get_option("portfolio_img_url_4"); ?>);*/
			/*}*/
			/*.iner-port-4 {*/
			/*	background-image: url(<?php echo get_option("portfolio_img_url_5"); ?>);*/
			/*}*/
		</style>
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php if(function_exists( 'wp_body_open' )) { wp_body_open(); } ?>
		<div class="wrapper">
			<!-- HEADER START -->

			<header>
				<div class="main-navbar">
					<div class="container">
						<div class="logo">
							<a href="<?php echo get_site_url(); ?>"><?php echo get_option("client_name"); ?></a>
						</div>
						<button class="nav-collapse-btn" ><i class="fa fa-bars"></i></button>
						<div class="nav-main">

							<div class="navbar">
								<?php
									wp_nav_menu( array(
									  'theme_location'   => 'header-menu',
									  'menu_class' => '',
									  'menu_id' => 'header-menu',
									  'container' => '',
									  'walker' => new NetRep_Menu_Walker()
									) );
								  ?>
							</div>

						</div>
					</div>
				</div>
			</header>
			<!-- HEADER END -->
