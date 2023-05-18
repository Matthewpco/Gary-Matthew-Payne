<?php

require_once("netrepsettings.php");

function theme_option_page() {
?>
<div class="wrap">
<h1>NetRep Theme Options Page</h1>
<form method="post" action="options.php">
<?php
// display settings field on theme-option page
settings_fields("theme-options-grp");
// display all sections for theme-options page
do_settings_sections("theme-options");
submit_button();
?>
</form>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/settings/js/imageupload.js"></script>
<?php
}

function netrep_render_setting_control($item) {
	$cur_value = get_option($item['name']);
	
	if($item['type'] == 'text') {
		echo '<input type="text" name="' . $item['name'] . '" value="' . htmlentities($cur_value) . '" style="width: 100%;"/>';
	}
	else if($item['type'] == 'textarea') {
		echo '<textarea name="' . $item['name'] . '" style="width: 100%;" rows="6">' . htmlentities($cur_value) . '</textarea>';
	}
	else if($item['type'] == 'files') {
		echo '<input type="text" name="' . $item['name'] . '" value="' . htmlentities($cur_value) . '" style="width: 100%;"/>';
		echo '<button id="btn-' . $item['name'] . '" class="btn btn-primary netrep-upload">Upload Images Via Media Library</button>';
	}
}

function theme_section_description() {
	
}

function add_theme_netrep_settings_menu_item() {
	add_theme_page("NetRep Customization", "NetRep Customization", "manage_options", "theme-options", "theme_option_page", null, 99);
}

function add_theme_netrep_settings() {
	// collect all the settings we need
	$settings = get_netrep_settings();
	
	$grouped_settings = group_settings($settings);
	
	foreach($grouped_settings as $group_name => $group) {
		// create a section for the settings
		add_settings_section($group_name, strtoupper(str_replace("_", " ", $group_name)), 'theme_section_description','theme-options');
		
		// add options to db
		foreach($group as $setting) {
			$option_callback_fn = function() use ($setting) {
				netrep_render_setting_control($setting);
			};
			
			add_option($setting['name'], $setting['default_value']);
			add_settings_field($setting['name'],$setting['label'],$option_callback_fn, 'theme-options',$group_name);
			register_setting('theme-options-grp', $setting['name']);
		}
	}
}

function group_settings($settings) {
	$grouped = array();
	
	foreach($settings as $setting) {
		if(!isset($grouped[$setting['section']])) {
			$grouped[$setting['section']] = array();
		}
		
		$grouped[$setting['section']][$setting['name']] = $setting;
	}
	
	return $grouped;
}

function setting_to_paragraphs($text) {
	$paras = array_filter(explode("\n", $text), function($para) {
			return strlen(trim($para)) > 0;
		});
	
	return implode("\n", array_map(function($para) {
		return '<p>' . trim($para) . '</p>';
	}, $paras));
}

function media_uploader_enqueue() {
	wp_enqueue_media();
	wp_enqueue_script('media-uploader');
}
