<?php
/**
 * Template part for displaying about us section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Businex 1.0.0
 */
if( !businex_get_option( 'disable_about' ) ):
	$id = businex_get_option( 'about_page' );
	if( $id ):
		$query = new WP_Query( apply_filters( 'businex_about_page_args',  array( 
			'post_type'  => 'page', 
			'p'          => $id, 
		)));
		while( $query->have_posts() ): 
			$query->the_post();
			$image = businex_get_thumbnail_url( array(
				'size' => 'thumbnail'
			));
	?>
	<!-- About Section -->
	<section class="wrapper block-about">
		<div class="thumb-block-outer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
						<div class="content-outer">
							<div class="section-title-group">
								<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'about_section_title' ) ); ?></h2>
							</div>
							<div class="thumb-outer">
								<div class="thumb-inner">
									<?php the_post_thumbnail( 'thumbnail' ); ?>
								</div>
							</div>
    						<h3>
    							<a href="<?php the_permalink(); ?>">
    								<?php the_title();
    								if( get_edit_post_link()){
										businex_edit_link();
									}
    								?>
    							</a>
    						</h3>
							<?php businex_excerpt(100); ?>
							<div class="button-container">
								<a href="<?php the_permalink(); ?>" class="button-primary button-round">
									<?php esc_html_e( 'View More', 'businex' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- End About Section -->
	<?php 
		endwhile;
		wp_reset_postdata();
	endif;
endif;
