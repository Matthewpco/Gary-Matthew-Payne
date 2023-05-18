<?php

function netrep_client_name_update($old_value, $new_value) {
	// check if required pages already exist
	if(get_page_by_title("About") == null) {
		$my_post = array(
			'post_title'    => 'About',
			'post_content'  => 'This post is rendered via a template.',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'page-about.php'
		);
		
		wp_insert_post($my_post);
	}
	
	if(get_page_by_title("Contact") == null) {
		$my_post = array(
			'post_title'    => 'Contact',
			'post_content'  => 'This post is rendered via a template.',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'page-contact.php'
		);
		
		wp_insert_post($my_post);
	}
	
	if(get_page_by_title("Portfolio") == null) {
		$my_post = array(
			'post_title'    => 'Portfolio',
			'post_content'  => 'This post is rendered via a template.',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'page-portfolio.php'
		);
		
		wp_insert_post($my_post);
	}
}
