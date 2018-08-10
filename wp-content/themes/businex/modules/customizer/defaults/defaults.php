<?php
/**
* Generates default options for customizer.
*
* @since  Businex 1.0.0
* @access public
* @param  array $options 
* @return array
*/
	
function businex_default_options( $options ){

	$defaults = array(
		# Site identity
		'site_title'         	         => esc_html__( 'Businex', 'businex' ),
		'site_title_color'   	         => '#10242b',
		'site_tagline'       	         => esc_html__( 'Business WP Theme', 'businex' ),
		'site_tagline_color' 	         => '#4d4d4d',

		# Primary color
		'site_primary_color' 	         => '#fb5e1c',

		# Slider
		'enable_posts_slider'            => false,
		'slider_control'     	         => true,
		'slider_timeout'     	         => 5,
		'slider_autoplay'    	         => true,
		'disable_slider'    	         => false,

		# Service
		'service_section_title'          => esc_html__( 'Our Services', 'businex' ),
		'disable_service'                => false,

		# Callback
		'callback_title'                 => esc_html__( 'Best Business WordPress Theme', 'businex' ),
		'callback_button_text'           => esc_html__( 'Get a Quote', 'businex' ),
		'callback_button_url'            => esc_html__( '#', 'businex' ),
		'disable_callback'               => false,

		# About
		'about_section_title'            => esc_html__( 'Message from CEO', 'businex' ),
		'disable_about'                  => false,
		
		# Portfolio
		'portfolio_title'                => esc_html__( 'Some Works', 'businex' ),
		'disable_portfolio'              => false,

		# Testimonial
		'testimonial_title'              => esc_html__( 'Client Testimonials', 'businex' ),
		'disable_testimonial'            => false,

		# Highlight
		'highlight_section_title'        => esc_html__( 'Trending Posts', 'businex' ),
		'highlight_control'     	     => true,
		'highlight_autoplay'    	     => true,
		'disable_highlight'    	         => false,

		# Contact
		'contact_title'            		 => esc_html__( 'Reach out & say hello', 'businex' ),
		'disable_contact'          		 => false,

		# Footer Callback
		'footer_callback_title'          => esc_html__( 'Ready to create experiences?', 'businex' ),
		'footer_callback_button_text'    => esc_html__( 'Learn More', 'businex' ),
		'footer_callback_button_url'     => esc_html__( '#', 'businex' ),
		'disable_footer_callback'        => false,

		# Theme options
		# Header
		'header_layout'                  => 'header_two',
		'disable_top_header'             => false,
		'header_address'                 => esc_html__( 'Rock Street, San Francisco', 'businex' ),
		'header_email'                   => esc_html__( 'company@mail.com', 'businex' ),
		'header_phone'                   => esc_html__( '1 (234) 567-891', 'businex' ),

		# Layout
		'archive_layout'			     => 'right',
		'archive_post_layout'            => 'grid',
		'archive_post_image'             => 'default',
		'archive_post_image_alignment'   => 'center',
		'single_layout'			         => 'compact',

		# Blog
		'archive_page_title'			 => 'Welcome to Businex',

		# Footer
		'footer_layout'                  => 'footer_two',
		'enable_scroll_top_in_mobile'    => false,
		'disable_footer_widget'          => false,
		'footer_text'                    => businex_get_footer_text(),
	);

	return array_merge( $options, $defaults );
}
add_filter( 'Businex_Customizer_defaults', 'businex_default_options' );

if( !function_exists( 'businex_get_footer_text' ) ):
/**
* Generate Default footer text
*
* @return string
* @since Businex 1.0.0
*/
function businex_get_footer_text(){
	$text = esc_html__( ' Copyright &copy; All Rights Reserved. ', 'businex' );
	$text .= esc_html__( 'Businex Theme by', 'businex' ).' <a href="'.esc_url( '//keonthemes.com' ).'" target="_blank">';
	$text .= esc_html__( 'Keon Themes', 'businex' ).'</a>';
							
	return $text;
}
endif;