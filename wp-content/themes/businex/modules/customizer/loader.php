<?php
/**
* Loads all the components related to customizer 
*
* @since Businex 1.0.0
*/
require get_parent_theme_file_path( '/modules/customizer/framework/customizer.php' );
require get_parent_theme_file_path( '/modules/customizer/panels/panels.php' );
require get_parent_theme_file_path( '/modules/customizer/sections/sections.php' );

require get_parent_theme_file_path( '/modules/customizer/settings/general.php' );
require get_parent_theme_file_path( '/modules/customizer/settings/frontpage.php' );
require get_parent_theme_file_path( '/modules/customizer/defaults/defaults.php' );


function businex_modify_default_settings( $wp_customize ){

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Background', 'businex' );
}
add_action( 'businex_customize_register', 'businex_modify_default_settings' );

function businex_default_styles(){
	
	$site_title_color           = businex_get_option( 'site_title_color' );
	$site_tagline_color         = businex_get_option( 'site_tagline_color' );
	$primary_color              = businex_get_option( 'site_primary_color' );

	$slider_control             = businex_get_option( 'slider_control' );

	$highlight_section_title    = businex_get_option( 'highlight_section_title' );

	$callback_bg                = businex_get_callback_banner_url();

	$footer_callback_bg         = businex_get_footer_callback_banner_url();
	
	?>
	<style type="text/css">
		.offcanvas-menu-open .kt-offcanvas-overlay {
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    background: rgba(0, 0, 0, 0.7);
		    opacity: 1;
		    z-index: 99991;
		    top: 0px;
		}

		.kt-offcanvas-overlay {
		    width: 0;
		    height: 0;
		    opacity: 0;
		    transition: opacity 0.5s;
		}

		<?php if( !businex_get_option( 'enable_header_one' ) ): ?>
			.main-navigation {
				display: table;
				height: 100%;
			}

			.main-navigation #navigation {
				display: table-cell;
				vertical-align: middle;
			}

			.site-header .header-bottom-right {
				height: 100% !important;
				display: table;
				margin-top: 0px;
			}

			.site-header .header-bottom-right > span {
				display: table-cell;
			}

		<?php endif; ?>

		<?php if( !businex_get_option( 'enable_header_two' ) ): ?>
			.main-navigation {
				display: table;
				height: 100%;
			}

			.main-navigation #navigation {
				display: table-cell;
				vertical-align: middle;
			}

			.site-header .header-bottom-right {
				height: 100% !important;
				display: table;
				margin-top: 0px;
			}

			.site-header .header-bottom-right > span {
				display: table-cell;
			}

		<?php endif; ?>

		.masonry-grid.wrap-post-list {
			width: 100% !important;
		}

		<?php if( !$slider_control ): ?>
			.block-slider .controls, .block-slider .owl-pager{
				opacity: 0;
			}
		<?php endif; ?>

		.block-callback {
		   background-image: url(<?php echo esc_url( $callback_bg ); ?> );
		 }

		 .block-footer-callback {
		    background-image: url(<?php echo esc_url( $footer_callback_bg ); ?> );
		  }


		/*======================================*/
		/* Site title */
		/*======================================*/
		.site-header .site-branding .site-title,
		.site-header .site-branding .site-title a {
			color: <?php echo esc_attr( $site_title_color ); ?>;
		} 

		/*======================================*/
		/* Tagline title */
		/*======================================*/
		.site-header .site-branding .site-description {
			color: <?php echo esc_attr( $site_tagline_color ); ?>;
		}

		/*======================================*/
		/* Primary color */
		/*======================================*/

		/*======================================*/
		/* Background Primary color */
		/*======================================*/
		#go-top span:hover, #go-top span:focus, #go-top span:active, .page-numbers.current,
		.searchform .search-button, .button-primary, .wrap-detail-page .contact-form-section input[type="submit"], .wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"], .block-grid .post-content .post-content-inner span.cat a, .block-grid .post-content .post-content-inner .button-container .post-footer-detail .post-format-outer > span span, .comments-area .comment-respond .comment-form .submit, .wrap-detail-page form input[type="submit"], .widget.widget_mc4wp_form_widget input[type="submit"], .block-slider #kt-slide-pager .owl-dot span:hover, .block-slider #kt-slide-pager .owl-dot span:focus, .block-slider #kt-slide-pager .owl-dot span:active, .section-title:before, .section-title:after, .infinite-scroll #infinite-handle span:hover, .infinite-scroll #infinite-handle span:focus, .infinite-scroll #infinite-handle span:active, .kt-contact-form-area .form-group input.form-control[type="submit"], .contact-form-section input[type="submit"], .wrap-detail-page .wpcf7 input[type="submit"] {
			background-color: <?php echo esc_attr( $primary_color ); ?>
		}

		/*======================================*/
		/* Primary border color */
		/*======================================*/
		#go-top span:hover, #go-top span:focus, #go-top span:active,
		.main-navigation ul ul, .page-numbers.current,
		.searchform .search-button, .button-primary, .wrap-detail-page .contact-form-section input[type="submit"], .wrap-detail-page .kt-contact-form-area .form-group input.form-control[type="submit"], .comments-area .comment-respond .comment-form .submit, .wrap-detail-page form input[type="submit"], .widget.widget_mc4wp_form_widget input[type="submit"], .block-slider .controls .owl-prev:hover:before, .block-slider .controls .owl-prev:focus:before, .block-slider .controls .owl-prev:active:before, .block-slider .controls .owl-next:hover:before, .block-slider .controls .owl-next:focus:before, .block-slider .controls .owl-next:active:before, .block-slider #kt-slide-pager .owl-dot span:hover, .block-slider #kt-slide-pager .owl-dot span:focus, .block-slider #kt-slide-pager .owl-dot span:active, .block-highlight .controls .owl-prev:hover:before, .block-highlight .controls .owl-prev:focus:before, .block-highlight .controls .owl-prev:active:before, .block-highlight .controls .owl-next:hover:before, .block-highlight .controls .owl-next:focus:before, .block-highlight .controls .owl-next:active:before, .kt-contact-form-area .form-group input.form-control[type="submit"], .contact-form-section input[type="submit"], .wrap-detail-page .wpcf7 input[type="submit"] {
			border-color: <?php echo esc_attr( $primary_color ); ?>
		}

		/*======================================*/
		/* Primary text color */
		/*======================================*/
		.site-header.site-header-two .header-contact .list:last-child .list-content a, .icon-block-outer .icon-outer span, .icon-block-outer .icon-content-area .button-container .button-text, .icon-block-outer .icon-content-area .button-container .button-text:before, .edit-link .post-edit-link:hover, .edit-link .post-edit-link:focus, .edit-link .post-edit-link:active, .edit-link .comment-edit-link:hover, .edit-link .comment-edit-link:focus, .edit-link .comment-edit-link:active {
			color: <?php echo esc_attr( $primary_color ); ?>
		}

	</style>
	<?php
}
add_action( 'wp_head', 'businex_default_styles' );

/**
* Load customizer preview js file
*/
function businex_customize_preview_js() {
	wp_enqueue_script( 'businex-customize-preview', get_theme_file_uri( '/assets/js/customizer/customize-preview.js' ), array( 'jquery', 'customize-preview'), '1.0', true );
}
add_action( 'customize_preview_init', 'businex_customize_preview_js' );