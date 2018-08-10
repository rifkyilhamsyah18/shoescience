<?php
/**
 * Displays header contact
 * @since Businex 1.0.0
 */
?>

<div class="header-contact" id="header-contact-area">
<?php if ( businex_get_option( 'header_address') ): ?>
	<div class="list">
		<div class="list-icon">
			<span class="kfi kfi-pin-alt"></span>
		</div>
		<div class="list-content">
			<h3><?php echo esc_html__( 'LOCATION', 'businex' ); ?></h3>
			<?php echo wp_kses_post( businex_get_option( 'header_address' ) ); ?>
		</div>
	</div>
<?php endif; ?>
<?php if ( businex_get_option( 'header_email') ): ?>
	<div class="list">
		<div class="list-icon">
			<span class="kfi kfi-mail-alt"></span>
		</div>
		<div class="list-content">
			<h3><?php echo esc_html__( 'EMAIL', 'businex' ); ?></h3>
			<a href="mailto:<?php echo wp_kses_post(  businex_get_option( 'header_email' ) ); ?>">
				<?php echo wp_kses_post(  businex_get_option( 'header_email' ) ); ?>
			</a>
		</div>
	</div>
<?php endif; ?>
<?php if ( businex_get_option( 'header_phone') ): ?>
	<div class="list">
		<div class="list-icon">
			<span class="kfi kfi-phone"></span>
		</div>
		<div class="list-content">
			<h3><?php echo esc_html__( 'CALL NOW', 'businex' ); ?></h3>
			<a href="tel:<?php echo wp_kses_post(  businex_get_option( 'header_phone' ) ); ?>">
				<?php echo wp_kses_post(  businex_get_option( 'header_phone' ) ); ?>
			</a>
		</div>
	</div>
<?php endif; ?>
</div>