<?php

// Register scripts
function lp_scripts() {

	/* if(is_page_template('landingpage.php') || (!is_front_page() && is_home()) || is_page_template('custom-template.php')) {} */

	wp_enqueue_style( 'bootstrap-ipay', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'awesome-ipay', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'owl-ipay', get_template_directory_uri().'/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'style-ipay', get_template_directory_uri().'/assets/css/main.css' );
	/* wp_register_script('captcha', 'https://www.google.com/recaptcha/api.js', '', false , true);
	wp_enqueue_script('captcha');
	wp_register_script('bootstrap', get_stylesheet_directory_uri().'/inc/landingPage/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('bootstrap');
	wp_register_script('custom', get_stylesheet_directory_uri().'/inc/landingPage/js/custom.js', array('jquery', 'jquery-ui-slider', 'bootstrap'), false, true);
	wp_enqueue_script('custom');
	wp_register_script('suggestion-send',get_stylesheet_directory_uri().'/inc/landingPage/js/sendmail.js', '', false, true);
	wp_enqueue_script('suggestion-send');
	wp_localize_script( 'suggestion-send', 'PJS', array( 
		'ajaxurl' => admin_url( 'admin-ajax.php' ), 
		)
	); */
}

	add_action( 'wp_enqueue_scripts', 'lp_scripts', 11 );