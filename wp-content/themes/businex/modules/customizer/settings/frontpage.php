<?php
/**
* Sets setting field for homepage
* 
* @since  Businex 1.0.0
* @param  array $settings
* @return array Merged array of settings
*
*/
function businex_frontpage_settings( $settings ){

	$home_settings = array(
		# Settings for slider
		'slider_page' => array(
			'label'       => esc_html__( 'Add Page IDs for Pages Slider', 'businex' ),
			'section'     => 'slider',
			'type'        => 'text',
			'description' => esc_html__( 'Input page id. Separate with comma. for eg. 2,9,23. Supports Maximum 3 sliders.', 'businex' )
		),
		'enable_posts_slider' => array(
			'label'   => esc_html__( 'Enable Posts Slider', 'businex' ),
			'section' => 'slider',
			'type'    => 'checkbox',
		),
		'slider_category' => array(
			'label'   => esc_html__( 'Choose Category for Posts Slider', 'businex' ),
			'description' => esc_html__( 'Pages slider will be override', 'businex' ),
			'section' => 'slider',
			'type'    => 'dropdown-categories',
		),
		'slider_control' => array(
			'label'     => esc_html__( 'Show Slider Control', 'businex' ),
			'section'   => 'slider',
			'type'      => 'checkbox',
			'transport' => 'postMessage',
		),
		'slider_autoplay' => array(
			'label'   => esc_html__( 'Slider Auto Play', 'businex' ),
			'section' => 'slider',
			'type'    => 'checkbox'
		),
		'slider_timeout' => array(
			'label'    => esc_html__( 'Slider Timeout ( in sec )', 'businex' ),
			'section'  => 'slider',
			'type'     => 'number'
		),
		'disable_slider' => array(
			'label'   => esc_html__( 'Disable Slider Section', 'businex' ),
			'section' => 'slider',
			'type'    => 'checkbox',
		),
		
		# Settings for service section
		'service_page' => array(
			'label'   => esc_html__( 'Service Page', 'businex' ),
			'section' => 'home_service',
			'type'    => 'text',
			'description' => esc_html__( 'Input page id. Separate with comma. for eg. 2,9,23', 'businex' )
		),
		'disable_service' => array(
			'label'   => esc_html__( 'Disable Service Section', 'businex' ),
			'section' => 'home_service',
			'type'    => 'checkbox',
		),
		
		# Settings for about page
		'about_section_title' => array(
			'label'   => esc_html__( 'About Section Title', 'businex' ),
			'section' => 'home_about',
			'type'    => 'text',
		),
		'about_page'  => array(
			'label'   => esc_html__( 'Select About Page', 'businex' ),
			'section' => 'home_about',
			'type'    => 'dropdown-pages',
		),
		'disable_about' => array(
			'label'   => esc_html__( 'Disable About Us Section', 'businex' ),
			'section' => 'home_about',
			'type'    => 'checkbox',
		),

		# Settings for callback section
		'callback_image' => array(
			'label'   => esc_html__( 'Background Image', 'businex' ),
			'section' => 'home_callback',
			'type'    => 'image',
		),
		'callback_title' => array(
			'label'   => esc_html__( 'Title', 'businex' ),
			'section' => 'home_callback',
			'type'    => 'text',
		),
		'callback_button_text' => array(
			'label'   => esc_html__( 'Button Text', 'businex' ),
			'section' => 'home_callback',
			'type'    => 'text',
		),
		'callback_button_url' => array(
			'label'   => esc_html__( 'Button URL', 'businex' ),
			'section' => 'home_callback',
			'type'    => 'text',
		),
		'disable_callback' => array(
			'label'   => esc_html__( 'Disable Callback Section', 'businex' ),
			'section' => 'home_callback',
			'type'    => 'checkbox',
		),
		
		# Settings for portfolio section
		'portfolio_title' => array(
			'label'   => esc_html__( 'Enter Title Page for Portfolio', 'businex' ),
			'section' => 'home_portfolio',
			'type'    => 'text',
		),

		'portfolio_page' => array(
			'label'   => esc_html__( 'Portfolio Page', 'businex' ),
			'section' => 'home_portfolio',
			'type'    => 'text',
			'description' => esc_html__( 'Input page id. Separate with comma. for eg. 2,9,23', 'businex' )
		),
		'disable_portfolio' => array(
			'label'   => esc_html__( 'Disable Portfolio Section', 'businex' ),
			'section' => 'home_portfolio',
			'type'    => 'checkbox',
		),

		# Settings for Testimonials
		'testimonial_title' => array(
			'label'   => esc_html__( 'Testimonial Section Title', 'businex' ),
			'section' => 'home_testimonial',
			'type'    => 'text',
		),
		'testimonial_page' => array(
			'label'   => esc_html__( 'Testimonial Pages', 'businex' ),
			'section' => 'home_testimonial',
			'type'    => 'text',
			'description' => esc_html__( 'Input page id. Separate with comma. for eg. 2,9,23', 'businex' )
		),
		'disable_testimonial' => array(
			'label'   => esc_html__( 'Disable Testimonial Section', 'businex' ),
			'section' => 'home_testimonial',
			'type'    => 'checkbox',
		),

		# Settings for highlight
		'highlight_section_title' => array(
			'label'   => esc_html__( 'Highlight Section Title', 'businex' ),
			'section' => 'home_highlight',
			'type'    => 'text',
		),
		'highlight_category' => array(
			'label'   => esc_html__( 'Choose Highlight Category', 'businex' ),
			'section' => 'home_highlight',
			'type'    => 'dropdown-categories',
		),
		'highlight_control' => array(
			'label'     => esc_html__( 'Show Slider Control', 'businex' ),
			'section'   => 'home_highlight',
			'type'      => 'checkbox',
			'transport' => 'postMessage',
		),
		'highlight_autoplay' => array(
			'label'   => esc_html__( 'Slider Auto Play', 'businex' ),
			'section' => 'home_highlight',
			'type'    => 'checkbox'
		),
		'disable_highlight' => array(
			'label'   => esc_html__( 'Disable Highlight Section', 'businex' ),
			'section' => 'home_highlight',
			'type'    => 'checkbox',
		),

		# Settings for Contact
		'contact_title' => array(
			'label'   => esc_html__( 'Contact Section Title', 'businex' ),
			'section' => 'home_contact',
			'type'    => 'text',
		),
		'contact_shortcode' => array(
			'label'   => esc_html__( 'Shortcode', 'businex' ),
			'section' => 'home_contact',
			'description' => esc_html__( 'Add a Contact Form 7 Shortcode.', 'businex' ),
			'type'    => 'text',
		),
		'disable_contact' => array(
			'label'   => esc_html__( 'Disable Contact Section', 'businex' ),
			'section' => 'home_contact',
			'type'    => 'checkbox',
		),

		# Settings for footer callback section
		'footer_callback_image' => array(
			'label'   => esc_html__( 'Background Image', 'businex' ),
			'section' => 'home_footer_callback',
			'type'    => 'image',
		),
		'footer_callback_title' => array(
			'label'   => esc_html__( 'Title', 'businex' ),
			'section' => 'home_footer_callback',
			'type'    => 'text',
		),
		'footer_callback_button_text' => array(
			'label'   => esc_html__( 'Button Text', 'businex' ),
			'section' => 'home_footer_callback',
			'type'    => 'text',
		),
		'footer_callback_button_url' => array(
			'label'   => esc_html__( 'Button URL', 'businex' ),
			'section' => 'home_footer_callback',
			'type'    => 'text',
		),
		'disable_callback' => array(
			'label'   => esc_html__( 'Disable Footer Callback Section', 'businex' ),
			'section' => 'home_footer_callback',
			'type'    => 'checkbox',
		),
	);

	return array_merge( $home_settings, $settings );
}
add_filter( 'Businex_Customizer_fields', 'businex_frontpage_settings' );