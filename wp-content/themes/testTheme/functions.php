<?php

require get_template_directory() . '/custom-header.php';

// Holds wordpress custom scripts to be included.  Declare function then run in add action
function test_enqueue() {
	wp_enqueue_style('customStyleId', get_template_directory_uri() . '/css/test.css', array(), '1.0.0', 'all');

	if(is_page('Home')){
		wp_enqueue_script('customJsId', get_template_directory_uri() . '/js/email-validation.js', array(), '1.0.0', true);
	}
}

// hook that gives connection wordpress execution process to a custom function.  Gets triggered by wp_head();
add_action('wp_enqueue_scripts', 'test_enqueue');

// activitate specific theme support with a hook.  Easier to use functions because easy to keep track
function test_theme_setup(){
	add_theme_support( 'custom-header' );
	add_theme_support('menus');
	// description registering our nav menu hook
	register_nav_menu('main', 'Main Header Navigation');
	
	
};

// use init because adding more functions to test them setup
add_action('init', 'test_theme_setup');

?>