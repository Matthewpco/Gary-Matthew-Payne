<?php

require_once("settings/createsettingspage.php");
require_once("settings/autopage.php");

add_action('admin_init', 'add_theme_netrep_settings');
add_action('admin_menu', 'add_theme_netrep_settings_menu_item');
add_action('admin_enqueue_scripts', 'media_uploader_enqueue');
add_action('update_option_client_name', 'netrep_client_name_update', 10, 2);
	
add_theme_support( 'post-thumbnails' );
register_nav_menus( array( 
        'header-menu' => 'Header menu', 
        'footer-menu' => 'Footer menu' 
      ) );

function netrep_comment_count() {
	
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="next-p"';
}

add_filter( 'wpseo_json_ld_output', '__return_false' );