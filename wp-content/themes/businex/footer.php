<?php
/**
 * The template for displaying the footer
 * Contains the closing of the body tag and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since Businex 1.0.0
 */
?>	
		<?php if( businex_get_option( 'disable_footer_widget') ){
			$return =  false;
		}else {
			?>
				<section class="wrapper block-top-footer">
					<div class="container">
						<div class="row">
						<?php 
							$count = 0;
							for( $i = 1; $i <= 4; $i++ ){
								?>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<?php dynamic_sidebar( 'businex-footer-sidebar-'.$i ); ?>
								</div>
								<?php
							}
							if( $count > 0 ){
								$return = true;
							}else{
								$return = false;
							}
						?>
						</div>
					</div>
				</section>
			<?php
		}

		?>
	
		<?php
			if( businex_get_option( 'footer_layout' ) == 'footer_one' ):
		?>
		<footer class="wrapper site-footer" role="contentinfo">
			<div class="footer-social">
				<div class="socialgroup">
					<?php businex_get_menu( 'social' ); ?>
				</div>
			</div>
			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="site-info">
								<?php echo wp_kses_post( html_entity_decode( businex_get_option( 'footer_text' ) ) ); ?>
							</div><!-- .site-info -->
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="footer-menu">
								<?php businex_get_menu( 'footer' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon / Footer two -->
		<?php endif; ?>

		<?php
			if( businex_get_option( 'footer_layout' ) == 'footer_two' ):
		?>
		<footer class="wrapper site-footer site-footer-two" role="contentinfo">
			<div class="footer-social">
				<div class="socialgroup">
					<?php businex_get_menu( 'social' ); ?>
				</div>
			</div>
			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="site-info">
								<?php echo wp_kses_post( html_entity_decode( businex_get_option( 'footer_text' ) ) ); ?>
							</div><!-- .site-info -->
							<div class="footer-menu">
								<?php businex_get_menu( 'footer' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon / Footer one -->
		<?php endif; ?>
		<?php wp_footer(); ?>
	
		<script>
			/**
			* Fire slider for homepage
			* @link https://owlcarousel2.github.io/OwlCarousel2/docs/started-welcome.html
			* @since Businex 1.0.0
			*/
			function homeSlider(){
				var item_count = parseInt(jQuery( '.block-slider .slide-item').length);
				jQuery(".home-slider").owlCarousel({
					items: 1,
					autoHeight: false,
					autoHeightClass: 'name',
					animateOut: 'fadeOut',
			    	navContainer: '.block-slider .controls',
			    	dotsContainer: '#kt-slide-pager',
			    	autoplay : BUSINEX.home_slider.autoplay,
			    	autoplayTimeout : parseInt( BUSINEX.home_slider.timeout ),
			    	loop : ( item_count > 1 ) ? true : false,
			    	rtl: ( BUSINEX.is_rtl == '1' ) ? true : false,
				});
			};

			jQuery( document ).ready( function(){
				homeSlider();
			});
		</script>
	</body>
</html>