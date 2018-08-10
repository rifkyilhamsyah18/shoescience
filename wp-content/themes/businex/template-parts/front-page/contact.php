<?php
/**
 * Template part for displaying contact section
 *
 * @since Businex 1.0.0
 */

if( !businex_get_option( 'disable_contact' ) ):
?>

<section class="wrapper block-contact">
	<div class="container">
		<div class="section-title-group">
			<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'contact_title' ) ); ?></h2>
		</div>
	</div>
	<div class="container contact-form-detail">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
				<div class="contact-form-section">
					<?php echo do_shortcode( businex_get_option( 'contact_shortcode' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif;