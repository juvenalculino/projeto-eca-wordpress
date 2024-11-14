<?php
/**
 * @package Vcard CV Resume
 * Setup the WordPress core custom header feature.
 *
 * @uses vcard_cv_resume_header_style()
*/
function vcard_cv_resume_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vcard_cv_resume_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 200,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'vcard_cv_resume_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vcard_cv_resume_custom_header_setup' );

if ( ! function_exists( 'vcard_cv_resume_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vcard_cv_resume_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'vcard_cv_resume_header_style' );

function vcard_cv_resume_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'vcard-cv-resume-basic-style', $custom_css );
	endif;
}
endif;