<?php
/**
* Sets settings for general fields
*
* @since  Businex 1.0.0
* @param  array $settings
* @return array Merged array
*/

function Businex_Customizer_general_settings( $settings ){

	$general = array(
		'site_title_color' => array(
			'label'     => esc_html__( 'Site Title', 'businex' ),
			'transport' => 'postMessage',
			'section'   => 'colors',
			'type'      => 'colors',
		),
		'site_tagline_color' => array(
			'label'     => esc_html__( 'Site Tagline', 'businex' ),
			'transport' => 'postMessage',
			'section'   => 'colors',
			'type'      => 'colors',
		),
		'site_primary_color' => array(
			'label'     => esc_html__( 'Primary', 'businex' ),
			'section'   => 'colors',
			'type'      => 'colors',
		),

		# Theme Options Section
		# Header
		'header_layout' => array(
			'label'     => esc_html__( 'Select Header Layout', 'businex' ),
			'section'   => 'header_options',
			'type'      => 'select',
			'choices'   => array(
				'header_one'   => esc_html__( 'Header Layout One', 'businex' ),
				'header_two'   => esc_html__( 'Header Layout Two', 'businex' ),
				'header_three' => esc_html__( 'Header Layout Three', 'businex' ),
			),
		),
		'header_address' => array(
			'label'   => esc_html__( 'Address for Header Layout Two', 'businex' ),
			'section' => 'header_options',
			'type'    => 'text',
		),
		'header_email' => array(
			'label'   => esc_html__( 'Email for Header Layout Two', 'businex' ),
			'section' => 'header_options',
			'type'    => 'text',
		),
		'header_phone' => array(
			'label'   => esc_html__( 'Phone for Header Layout Two', 'businex' ),
			'section' => 'header_options',
			'type'    => 'text',
		),
		# Layout
		'archive_layout' => array(
			'label'     => esc_html__( 'Archive Layout', 'businex' ),
			'section'   => 'layout_options',
			'type'      => 'select',
			'choices'   => array(
				'left' => esc_html__( 'Left Sidebar', 'businex' ),
				'right' => esc_html__( 'Right Sidebar', 'businex' ),
				'none' => esc_html__( 'No Sidebar', 'businex' ),
			),
		),
		'archive_post_layout' => array(
			'label'     => esc_html__( 'Archive Post Layout', 'businex' ),
			'section'   => 'layout_options',
			'type'      => 'select',
			'choices'   => array(
				'grid' => esc_html__( 'Grid', 'businex' ),
				'simple' => esc_html__( 'Simple', 'businex' ),
			),
		),
		'archive_post_image' => array(
			'label'     => esc_html__( 'Archive Post Image', 'businex' ),
			'section'   => 'layout_options',
			'type'      => 'select',
			'choices'   => array(
				'thumbnail' => esc_html__( 'Thumbnail (150x150)', 'businex' ),
				'medium' => esc_html__( 'Medium (300x300)', 'businex' ),
				'large' => esc_html__( 'Large (1024x1024)', 'businex' ),
				'default' => esc_html__( 'Default (1170x960)', 'businex' ),
			),
		),
		'archive_post_image_alignment' => array(
			'label'     => esc_html__( 'Archive Post Image Alignment', 'businex' ),
			'section'   => 'layout_options',
			'type'      => 'select',
			'choices'   => array(
				'left' => esc_html__( 'Left', 'businex' ),
				'right' => esc_html__( 'Right', 'businex' ),
				'center' => esc_html__( 'Center', 'businex' ),
			),
		),
		'single_layout' => array(
			'label'     => esc_html__( 'Single Page Layout', 'businex' ),
			'section'   => 'layout_options',
			'type'      => 'select',
			'choices'   => array(
				'left' => esc_html__( 'Left Sidebar', 'businex' ),
				'right' => esc_html__( 'Right Sidebar', 'businex' ),
				'compact' => esc_html__( 'Compact', 'businex' ),
			),
		),
		# Blog
		'archive_page_title' => array(
			'label'   => esc_html__( 'Blog Page Title', 'businex' ),
			'section' => 'blog_options',
			'type'    => 'text',
		),
		# Footer
		'footer_layout' => array(
			'label'     => esc_html__( 'Select Footer Layout', 'businex' ),
			'section'   => 'footer_options',
			'type'      => 'select',
			'choices'   => array(
				'footer_one'   => esc_html__( 'Footer Layout One', 'businex' ),
				'footer_two'   => esc_html__( 'Footer Layout Two', 'businex' ),
			),
		),
		'enable_scroll_top_in_mobile' => array(
			'label'     => esc_html__( 'Enable Scroll top in mobile', 'businex' ),
			'section'   => 'footer_options',
			'transport' => 'postMessage',
			'type'      => 'checkbox',
		),
		'disable_footer_widget' => array(
			'label'   => esc_html__( 'Disable Footer Widget', 'businex' ),
			'section' => 'footer_options',
			'type'    => 'checkbox',
		),
		'footer_text' =>  array(
			'label'     => esc_html__( 'Footer Text', 'businex' ),
			'section'   => 'footer_options',
			'type'      => 'textarea',
		)
	);

	return array_merge( $settings, $general );
}
add_filter( 'Businex_Customizer_fields', 'Businex_Customizer_general_settings' );