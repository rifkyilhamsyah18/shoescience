<?php
/**
* Sets the panels and returns to Businex_Customizer
*
* @since  Businex 1.0.0
* @param  array An array of the panels
* @return array
*/
function Businex_Customizer_panels( $panels ){

	$panels = array(
		'frontpage_options' => array(
			'title' => esc_html__( 'Front Page Options', 'businex' )
		),
		'theme_options' => array(
			'title' => esc_html__( 'Theme Options', 'businex' )
		)
	);

	return $panels;	
}
add_filter( 'Businex_Customizer_panels', 'Businex_Customizer_panels' );