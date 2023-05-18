<?php

function get_netrep_settings() {
	return array(
		'client_name' => array(
			'name' => 'client_name',
			'type' => 'text',
			'label' => 'Client Name',
			'section' => 'main_section',
			'default_value' => 'John Smith'
		),
		'client_desc' => array(
			'name' => 'client_desc',
			'type' => 'text',
			'label' => 'About Me Header Excerpt',
			'section' => 'main_section',
			'default_value' => 'I am a freelance UI/UX designer'
		),
		'about_home_text' => array(
			'name' => 'about_home_text',
			'type' => 'textarea',
			'label' => 'About Me Text',
			'section' => 'main_section',
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
		),
		'background_header_home' => array(
			'name' => 'background_header_home',
			'type' => 'files',
			'label' => 'Header Background Image',
			'section' => 'main_section',
			'default_value' => get_template_directory_uri() . '/images/Individual-header.jpg'
		),
		'about_img_url' => array(
			'name' => 'about_img_url',
			'type' => 'files',
			'label' => 'About Image URL',
			'section' => 'main_section',
			'default_value' => 'https://domain.com/wp-content/uploads/yourdir/about.png'
		),
		'portfolio_home_text' => array(
			'name' => 'portfolio_home_text',
			'type' => 'textarea',
			'label' => 'Portfolio Home Text',
			'section' => 'main_section',
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
		),
		'portfolio_imgs_url' => array(
			'name' => 'portfolio_imgs_url',
			'type' => 'files',
			'label' => 'Portfolio Images URL List (CSV) Home (rec. 6)',
			'section' => 'main_section',
			'default_value' => 'https://domain.com/wp-content/uploads/yourdir/1.png,https://domain.com/wp-content/uploads/yourdir/2.png'
		),
		'twitter_url' => array(
			'name' => 'twitter_url',
			'type' => 'text',
			'label' => 'Twitter URL',
			'section' => 'main_section',
			'default_value' => 'https://twitter.com/'
		),
		'behance_url' => array(
			'name' => 'behance_url',
			'type' => 'text',
			'label' => 'Behance URL',
			'section' => 'main_section',
			'default_value' => 'https://www.behance.net/'
		),
		'facebook_url' => array(
			'name' => 'facebook_url',
			'type' => 'text',
			'label' => 'Facebopk URL',
			'section' => 'main_section',
			'default_value' => 'https://www.facebook.com/'
		),
		'instagram_url' => array(
			'name' => 'instagram_url',
			'type' => 'text',
			'label' => 'Instagram URL',
			'section' => 'main_section',
			'default_value' => 'https://www.instagram.com/'
		),
		'linkedin_url' => array(
			'name' => 'linkedin_url',
			'type' => 'text',
			'label' => 'LinkedIn URL',
			'section' => 'main_section',
			'default_value' => 'https://www.linkedin.com/'
		),
		'pinterest_url' => array(
			'name' => 'pinterest_url',
			'type' => 'text',
			'label' => 'Pinterest URL',
			'section' => 'main_section',
			'default_value' => 'https://www.pinterest.com/'
		),
		'tumblr_url' => array(
			'name' => 'tumblr_url',
			'type' => 'text',
			'label' => 'Tumblr URL',
			'section' => 'main_section',
			'default_value' => 'https://www.tumblr.com/'
		),
		'youtube_url' => array(
			'name' => 'youtube_url',
			'type' => 'text',
			'label' => 'Youtube URL',
			'section' => 'main_section',
			'default_value' => 'https://www.youtube.com/'
		),
		'about_permalink' => array(
			'name' => 'about_permalink',
			'type' => 'text',
			'label' => 'About Permalink',
			'section' => 'about_section',
			'default_value' => get_site_url() . '/about'
		),
		'about_page_text' => array(
			'name' => 'about_page_text',
			'type' => 'textarea',
			'label' => 'About Page Text',
			'section' => 'about_section',
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
		),
		'about_portfolio_imgs_url' => array(
			'name' => 'about_portfolio_imgs_url',
			'type' => 'files',
			'label' => 'Portfolio Images URL List (CSV) About (rec. 3)',
			'section' => 'about_section',
			'default_value' => 'https://domain.com/wp-content/uploads/yourdir/1.png,https://domain.com/wp-content/uploads/yourdir/2.png'
		),
		'portfolio_about_text' => array(
			'name' => 'portfolio_about_text',
			'type' => 'textarea',
			'label' => 'Portfolio About Text',
			'section' => 'about_section',
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
		),
		'contact_phones' => array(
			'name' => 'contact_phones',
			'type' => 'text',
			'label' => 'Contact Phones',
			'section' => 'about_section',
			'default_value' => 'Phone: +12 345 678 90, Fax Number: +12 345 678 90'
		),
		'contact_address' => array(
			'name' => 'contact_address',
			'type' => 'textarea',
			'label' => 'Contact Address',
			'section' => 'about_section',
			'default_value' => 'Florida'
		),
		'contact_email' => array(
			'name' => 'contact_email',
			'type' => 'textarea',
			'label' => 'Contact Email',
			'section' => 'about_section',
			'default_value' => 'team@america.com'
		),
		'contact_text' => array(
			'name' => 'contact_text',
			'type' => 'textarea',
			'label' => 'Contact Text',
			'section' => 'about_section',
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		),
		
		'portfolio_page_img_urls' => array(
			'name' => 'portfolio_page_img_urls',
			'type' => 'files',
			'label' => 'Portfolio Image URLs',
			'section' => 'portfolio_section',
			'default_value' => 'https://domain.com/wp-content/uploads/yourdir/1.png'
		),
	);
}
