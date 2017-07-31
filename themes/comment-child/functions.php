<?php


/**
 * Enqueue's scripts and styles
 */
function cfct_load_assets() {
	//Variable for assets url
	$cfct_assets_url = get_template_directory_uri() . '/assets/';

	// Styles
	wp_enqueue_style('bootstrap', $cfct_assets_url . 'css/bootstrap.min.css', array(), CFCT_URL_VERSION);
	wp_enqueue_style('dante', $cfct_assets_url . 'css/dante.css', array(), CFCT_URL_VERSION);
	
 
	 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Scripts
	wp_enqueue_script('bootstrap', $cfct_assets_url . 'js/bootstrap.js', array('jquery'), CFCT_URL_VERSION);
	//wp_enqueue_script('placeholder', $cfct_assets_url . 'js/jquery.placeholder.min.js', array('jquery'), CFCT_URL_VERSION);
	wp_enqueue_script('script', $cfct_assets_url . 'js/script.js', array('jquery', 'placeholder'), CFCT_URL_VERSION);
	wp_enqueue_script('dante',  $cfct_assets_url . 'js/dante.js', array('jquery'), CFCT_URL_VERSION);


}
add_action('wp_enqueue_scripts', 'cfct_load_assets');




?>