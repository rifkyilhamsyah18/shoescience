<?php
/**
 * Businex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @since Businex 1.0.0
 */

/**
 * Businex only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function businex_scripts(){

	# Enqueue Vendor's Script & Style
	$scripts = array(
		array(
			'handler'  => 'businex-google-fonts',
			'style'    => esc_url( '//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900' ),
			'absolute' => true
		),
		array(
			'handler' => 'bootstrap',
			'style'   => 'bootstrap/css/bootstrap.min.css',
			'script'  => 'bootstrap/js/bootstrap.min.js',
			'version' => '3.3.7'
		),
		array(
			'handler' => 'kfi-icons',
			'style'   => 'kf-icons/css/style.css',
			'version' => '1.0.0'
		),
		array(
			'handler' => 'owlcarousel',
			'style'   => 'OwlCarousel2-2.2.1/assets/owl.carousel.min.css',
			'script'  => 'OwlCarousel2-2.2.1/owl.carousel.min.js',
			'version' => '2.2.1'
		),
		array(
			'handler' => 'owlcarousel-theme',
			'style'   => 'OwlCarousel2-2.2.1/assets/owl.theme.default.min.css',
			'version' => '2.2.1'
		),
		array(
			'handler' => 'colorbox',
			'style'   => 'colorbox/css/colorbox.min.css',
			'script'  => 'colorbox/js/jquery.colorbox-min.js',
			'version' => '1.6.4'
		),
		array(
			'handler'  => 'businex-style',
			'style'    => get_stylesheet_uri(),
			'absolute' => true,
		),
		array(
			'handler'    => 'businex-script',
			'script'     => get_theme_file_uri( '/assets/js/main.min.js' ),
			'absolute'   => true,
			'prefix'     => '',
			'dependency' => array( 'jquery', 'masonry' )
		)
	);

	businex_enqueue( $scripts );

	$locale = apply_filters( 'businex_localize_var', array(
		'is_admin_bar_showing'        => is_admin_bar_showing() ? true : false,
		'enable_scroll_top_in_mobile' => businex_get_option( 'enable_scroll_top_in_mobile' ) ? 1 : 0,
		'home_slider' => array(
			'autoplay' => businex_get_option( 'slider_autoplay' ),
			'timeout'  => absint( businex_get_option( 'slider_timeout' ) ) * 1000
		),
		'highlight' => array(
			'autoplay' => businex_get_option( 'highlight_autoplay' )
		),
		'is_rtl' => is_rtl(),
		'search_placeholder'=> esc_html__( 'hit enter for search.', 'businex' ),
		'search_default_placeholder'=> esc_html__( 'search...', 'businex' )
	));

	wp_localize_script( 'businex-script', 'BUSINEX', $locale );

	if ( is_singular() && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'businex_scripts' );

/**
* Adds a submit button in search form
* 
* @since Businex Pro 1.0.0
* @param string $form
* @return string
*/
function businex_modify_search_form( $form ){
	return str_replace( '</form>', '<button type="submit" class="search-button"><span class="kfi kfi-search"></span></button></form>', $form );
}
add_filter( 'get_search_form', 'businex_modify_search_form' );

/**
* Modify some markup for comment section
*
* @since Businex 1.0.0
* @param array $defaults
* @return array $defaults
*/
function businex_modify_comment_form_defaults( $defaults ){

	$user = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';

	$defaults[ 'logged_in_as' ] = '<p class="logged-in-as">' . sprintf(
          /* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
          __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a> <a href="%4$s">Log out?</a>', 'businex' ),
          get_edit_user_link(),
          /* translators: %s: user name */
          esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.', 'businex' ), $user_identity ) ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( get_the_ID() ) ) )
      ) . '</p>';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'businex_modify_comment_form_defaults',99 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 *
 * @since Businex 1.0.0
 * @return void
 */
function businex_pingback_header(){
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'businex_pingback_header' );

/**
* Add a class in body when previewing customizer
*
* @since Businex 1.0.0
* @param array $class
* @return array $class
*/
function businex_body_class_modification( $class ){
	if( is_customize_preview() ){
		$class[] = 'keon-customizer-preview';
	}
	
	if( is_404() || ! have_posts() ){
 		$class[] = 'content-none-page';
	}

	if( ( is_front_page() && ! is_home() ) || is_search() ){

		$class[] = 'grid-col-3';
	}else if( is_home() || is_archive() ){

		$class[] = 'grid-col-2';
	}

	return $class;
}
add_filter( 'body_class', 'businex_body_class_modification' );

if( ! function_exists( 'businex_get_ids' ) ):
/**
* Fetches setting from customizer and converts it to an array
*
* @uses businex_explode_string_to_int()
* @return array | false
* @since Businex 1.0.0
*/
function businex_get_ids( $setting ){

    $str = businex_get_option( $setting );
    if( empty( $str ) )
    	return;

    return businex_explode_string_to_int( $str );

}
endif;

if( !function_exists( 'businex_section_heading' ) ):
/**
* Prints the heading section for home page
*
* @return void
* @since Businex 1.0.0
*/
function businex_section_heading( $args ){

	$defaults = array(
	    'divider'  => false,
	    'query'    => true,
	    'sub_title' => false
	);

	$args = wp_parse_args( $args, $defaults );

	# No need to query if already inside the query.
	if( !$args[ 'query'] ){
		set_query_var( 'args', $args );
		get_template_part( 'template-parts/page/home', 'heading' );
		return;
	}

	$id = businex_get_option( $args[ 'id' ] );

	if( !empty( $id ) ){

		$query = new WP_Query( array(
			'p' => $id,
			'post_type' => 'page'
		));

		while( $query->have_posts() ){
			$query->the_post();
			set_query_var( 'args', $args );
			get_template_part( 'template-parts/page/home', 'heading' );
		}
		wp_reset_postdata();
	}
}
endif;

if( ! function_exists( 'businex_inner_banner' ) ):
/**
* Includes the template for inner banner
*
* @return void
* @since Businex 1.0.0
*/
function businex_inner_banner(){

	$description = false;

	if( is_archive() ){

		# For all the archive Pages.
		$title       = get_the_archive_title();
		$description = get_the_archive_description();
	}else if( !is_front_page() && is_home() ){

		# For Blog Pages.
		$title = single_post_title( '', false );
	}else if( is_search() ){

		# For search Page.
		$title = esc_html__( 'Search Results for: ', 'businex' ) . get_search_query();
	}else if( is_front_page() && is_home() ){
		# If Latest posts page
		
		$title = businex_get_option( 'archive_page_title' );
	}else{

		# For all the single Pages.
		$title = get_the_title();
	}

	$args = array(
		'title'       => $title,
		'description' => $description
	);

	set_query_var( 'args', $args );
	get_template_part( 'template-parts/inner', 'banner' );
}
endif;

if( !function_exists( 'businex_get_piped_title' ) ):
/**
* Returns the title and sub title from piped title
*
* @return array
* @since Businex 1.0.0
*/
function businex_get_piped_title(){

	$title = str_replace( "\|", "&exception", get_the_title() );

	$arr = explode( '|', $title );
	$data = array(
		'title' => $arr[ 0 ],
		'sub_title'  => false
	);

	if( isset( $arr[ 1 ] ) ){
		$data[ 'sub_title' ] = trim( $arr[ 1 ] );
	}

	$data[ 'title' ] = str_replace( '&exception', '|', $arr[ 0 ] );
	return $data;
}
endif;


if( !function_exists( 'businex_remove_pipe' ) ):
/**
* Removes Pipes from the title
*
* @return string
* @since Businex 1.0.0
*/
function businex_remove_pipe( $title, $force = false ){

	if( $force || ( is_page() && !is_front_page() ) ){

		$title = str_replace( "\|", "&exception", $title );
		$arr = explode( '|', $title );

		$title = str_replace( '&exception', '|', $arr[ 0 ] );
	}

	return $title;
}
add_filter( 'the_title', 'businex_remove_pipe',9999 );

endif;

function businex_remove_title_pipe( $title ){
	$title[ 'title' ] = businex_remove_pipe( $title[ 'title' ], true );
	return $title;
}
add_filter( 'document_title_parts', 'businex_remove_title_pipe',9999 );

if( !function_exists( 'businex_get_icon_by_post_format' ) ):
/**
* Gives a css class for post format icon
*
* @return string
* @since Businex 1.0.0
*/
function businex_get_icon_by_post_format(){
	$icons = array(
		'standard' => 'kfi-pushpin-alt',
		'sticky'  => 'kfi-pushpin-alt',
		'aside'   => 'kfi-documents-alt',
		'image'   => 'kfi-image',
		'video'   => 'kfi-arrow-triangle-right-alt2',
		'quote'   => 'kfi-quotations-alt2',
		'link'    => 'kfi-link-alt',
		'gallery' => 'kfi-images',
		'status'  => 'kfi-comment-alt',
		'audio'   => 'kfi-volume-high-alt',
		'chat'    => 'kfi-chat-alt',
	);

	$format = get_post_format();
	if( empty( $format ) ){
		$format = 'standard';
	}

	return apply_filters( 'businex_post_format_icon', $icons[ $format ] );
}
endif;

if( !function_exists( 'businex_has_sidebar' ) ):

/**
* Check whether the page has sidebar or not.
*
* @see https://codex.wordpress.org/Conditional_Tags
* @since Businex 1.0.0
* @return bool Whether the page has sidebar or not.
*/
function businex_has_sidebar(){

	if( is_page() || is_search() || is_single() ){
		return false;
	}

	return true;
}
endif;

if( !function_exists( 'businex_is_search' ) ):
/**
* Conditional function for search page / jet pack supported
* @since Businex 1.0.0
* @return Bool 
*/

function businex_is_search(){

	if( ( is_search() || ( isset( $_POST[ 'action' ] ) && $_POST[ 'action' ] == 'infinite_scroll'  && isset( $_POST[ 'query_args' ][ 's' ] ))) ){
		return true;
	}

	return false;
}
endif;

function businex_post_class_modification( $classes ){

	# Add no thumbnail class when its search page
	if( businex_is_search() && ( 'post' !== get_post_type() && !has_post_thumbnail() ) ){
		$classes[] = 'no-thumbnail';
	}
	return $classes;
}
add_filter( 'post_class', 'businex_post_class_modification' );

require_once get_parent_theme_file_path( '/inc/setup.php' );
require_once get_parent_theme_file_path( '/inc/template-tags.php' );
require_once get_parent_theme_file_path( '/modules/loader.php' );
require_once get_parent_theme_file_path( '/trt-customize-pro/example-1/class-customize.php' );
require_once get_parent_theme_file_path( '/modules/tgm-plugin-activation/loader.php' );

if( !function_exists( 'businex_get_homepage_sections' ) ):
/**
* Returns the section name of homepage
* @since Businex 1.0.0
* @return array 
*/
function businex_get_homepage_sections(){

	$arr = array(
		'slider',
		'services',
		'about',
		'callback',
		'testimonials',
		'portfolio',
		'highlight',
		'contact',
		'footer-callback',
	);

	return apply_filters( 'businex_homepage_sections', $arr );
}
endif;

/**
* Predefined demo Import file setup. 
* @link https://wordpress.org/plugins/one-click-demo-import/
* @since Businex 1.0.0
* @return array
*/
function businex_ocdi_import_files() {
	return array(
		array(
		  'import_file_name'             => esc_html__( 'Theme Demo Content', 'businex' ),
		  'categories'                   => array( 'Category 1', 'Category 2' ),
		  'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/businex.xml',
		  'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/businex.wie',
		  'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/businex.dat',
		  'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'screenshot.png',
		  'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'businex' ),
		  'preview_url'                  => 'https://www.demo.keonthemes.com/businex',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'businex_ocdi_import_files' );

/**
* Change menu, front page display as in demo after completing demo import
* @link https://wordpress.org/plugins/one-click-demo-import/
* @since Businex 1.0.0
* @return null
*/
function businex_ocdi_after_import_setup() {

    // Assign menus to their locations.
    $primary_menu = get_term_by('name', 'Primary Menu', 'nav_menu');
    $top_header_menu = get_term_by('name', 'Top Header Menu', 'nav_menu');
    $social_menu = get_term_by('name', 'Social Menu', 'nav_menu');
    $footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');
    set_theme_mod( 'nav_menu_locations' , array( 
          'primary'    => $primary_menu->term_id,
          'topheader'  => $top_header_menu->term_id,
          'social'     => $social_menu->term_id,
          'footer'     => $footer_menu->term_id
         ) 
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Front' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'businex_ocdi_after_import_setup' );

/**
* Disable branding of One Click Demo Import
* @link https://wordpress.org/plugins/one-click-demo-import/
* @since Businex 1.0.0
* @return Bool
*/
function businex_ocdi_branding(){
	return true;
}
add_filter( 'pt-ocdi/disable_pt_branding', 'businex_ocdi_branding' );