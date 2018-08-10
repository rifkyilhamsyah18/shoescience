<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Businex 1.0.0
 */
function businex_setup() {

	/*
 	 * Make theme available for translation.
 	*/
	load_theme_textdomain( 'businex', get_template_directory() . '/languages' );

	# Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	# Set the default content width.
	$GLOBALS['content_width'] = apply_filters( 'businex_content_width', 1050 );

	# Register menu locations.
	register_nav_menus( array(
		'primary'    => esc_html__( 'Primary Menu', 'businex' ),
		'topheader'  => esc_html__( 'Top Header Menu', 'businex' ),
		'social'     => esc_html__( 'Social Menu', 'businex' ),
		'footer'     => esc_html__( 'Footer Menu', 'businex' )
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-header', array(
		'default-image'    => get_parent_theme_file_uri( '/assets/images/placeholder/businex-banner-1920-850.jpg' ),
		'width'            => 1920,
		'height'           => 850,
		'flex-height'      => true,
		'wp-head-callback' => 'businex_header_style',
	));

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/placeholder/businex-banner-1920-850.jpg',
			'thumbnail_url' => '%s/assets/images/placeholder/businex-banner-1920-850.jpg',
			'description'   => esc_html__( 'Default Header Image', 'businex' ),
		),
	) );

	# Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
	));

	# Enable support for selective refresh of widgets in Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	# Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 190,
		'height'      => 50,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	add_theme_support( 'infinite-scroll', array(
	    'container' 	 => '#main-wrap',
	    'footer_widgets' => true,
	    'render'         => 'businex_infinite_scroll_render',
	));

	add_theme_support( 'woocommerce' );

	add_image_size( 'businex-1920-1200', 1920, 1200, true );
	add_image_size( 'businex-1200-850', 1200, 850, true );
	add_image_size( 'businex-1170-710', 1170, 710, true );
}
add_action( 'after_setup_theme', 'businex_setup' );

if( ! function_exists( 'businex_infinite_scroll_render' ) ):
/**
 * Set the code to be rendered on for calling posts,
 * hooked to template parts when possible.
 *
 * Note: must define a loop.
 */
function businex_infinite_scroll_render(){
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/archive/content', '' );
	endwhile;
	wp_reset_postdata();
}
endif;

if( ! function_exists( 'businex_header_style' ) ):
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see businex_setup().
 */
function businex_header_style(){
	$header_text_color = get_header_textcolor();

	# If no custom options for text are set, let's bail.
	# get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	# If we get this far, we have custom styles. Let's do this.
	?>
	<style id="businex-custom-header-styles" type="text/css">
		.wrap-inner-banner .page-header .page-title,
		body.home.page .wrap-inner-banner .page-header .page-title {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	</style>
<?php
}
endif;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @since Businex 1.0.0
 */
function businex_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'businex' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'businex' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'businex' ) . $i,
			'id'            => 'businex-footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'businex' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	

}
add_action( 'widgets_init', 'businex_widgets_init' );