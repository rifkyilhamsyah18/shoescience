<?php
/**
* Sets sections for Businex_Customizer
*
* @since  Businex 1.0.0
* @param  array $sections
* @return array Merged array
*/
function Businex_Customizer_sections( $sections ){

	$businex_sections = array(
		
		# Section for Fronpage panel
		'slider' => array(
			'title' => esc_html__( 'Slider', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_service' => array(
			'title' => esc_html__( 'Service', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_about' => array(
			'title' => esc_html__( 'About', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_callback' => array(
			'title' => esc_html__( 'Callback', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_portfolio' => array(
			'title' => esc_html__( 'Portfolio', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_testimonial' => array(
			'title' => esc_html__( 'Testimonial', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_highlight' => array(
			'title' => esc_html__( 'Highlight Posts', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_contact' => array(
			'title' => esc_html__( 'Contact', 'businex' ),
			'panel' => 'frontpage_options'
		),
		'home_footer_callback' => array(
			'title' => esc_html__( 'Footer Callback', 'businex' ),
			'panel' => 'frontpage_options'
		),

		# Section for Theme Options panel
		'header_options' => array(
			'title' => esc_html__( 'Header Options', 'businex' ),
			'panel' => 'theme_options'
		),
		'layout_options' => array(
			'title' => esc_html__( 'Layout Options', 'businex' ),
			'panel' => 'theme_options'
		),
		'blog_options' => array(
			'title' => esc_html__( 'Blog Options', 'businex' ),
			'panel' => 'theme_options'
		),
		'footer_options' => array(
			'title' => esc_html__( 'Footer Options', 'businex' ),
			'panel' => 'theme_options'
		)
	);

	return array_merge( $businex_sections, $sections );
}
add_filter( 'Businex_Customizer_sections', 'Businex_Customizer_sections' );