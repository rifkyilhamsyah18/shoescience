<?php
/**
 * Template part for displaying testimonial section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Businex 1.0.0
 */

if( !businex_get_option( 'disable_testimonial' ) ):
	$testi_ids = businex_get_ids( 'testimonial_page' );

	if( count( $testi_ids ) > 0 ):

		$query = new WP_Query( apply_filters( 'businex_testimonial_args', array( 
			'post_type'      => 'page',
			'post__in'       => $testi_ids,
			'posts_per_page' => 4,
			'orderby'        => 'post__in'
		)));

		if( $query->have_posts() ):
?>
			<section class="wrapper block-testimonial">
				<div class="section-title-group">
					<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'testimonial_title' ) ); ?></h2>
				</div>
				<div class="content-inner">
					<div class="container">
						<div class="controls"></div>
						<div class="row">
							<div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
								<div class="owl-carousel testimonial-carousel">
									<?php 
										while ( $query->have_posts() ):
											$query->the_post(); 
											$image = businex_get_thumbnail_url( array(
												'size' => 'thumbnail'
											));
									?>
										    <div class="slide-item">
												<article class="post-content">
													<div class="post-content-inner">
														<blockquote>
									    					<div class="text">
									    						<?php the_content(); 
									    							if( get_edit_post_link()){
									    								businex_edit_link();
									    							}
									    						?>
									    					</div>
										    				<footer class="post-title">
							    								<div class="post-thumb-outer">
							    									<div class="post-thumb">
							    				    					<img src="<?php echo esc_url( $image ); ?>">
							    									</div>
							    								</div>
										    					<cite>
										    						<?php echo get_the_title(); ?>
										    					</cite>
										    				</footer>
														</blockquote>
													</div>

												</article>
											</div>
									<?php
										endwhile; 
										wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="owl-pager" id="testimonial-pager"></div>
					</div>
				</div>
			</section><!-- End Testimonial Section -->
<?php
		endif;
	endif;
endif;