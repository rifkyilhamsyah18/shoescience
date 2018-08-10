<?php
/**
 * Template part for displaying callback section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Businex 1.0.0
 */
if( !businex_get_option( 'disable_callback' ) ): ?>
	
<!-- Callback Section -->
<section class="wrapper block-callback banner-content">
	<div class="banner-overlay">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
					<?php if( businex_get_option( 'callback_title' ) ): ?>
						<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'callback_title' ) ); ?></h2>
					<?php endif; ?>
					<?php if( businex_get_option( 'callback_button_text' ) ): ?>
						<div class="button-container">
							<a href="<?php echo wp_kses_post( businex_get_option( 'callback_button_url' ) ); ?>" class="button-primary button-round">
								<?php echo wp_kses_post( businex_get_option( 'callback_button_text' ) ); ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Callback Section -->

<?php endif; ?>