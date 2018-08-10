<?php
/**
 * Template part for displaying services section
 *
 * @since Businex 1.0.0
 */

if( !businex_get_option( 'disable_service' ) ):

	$srvc_ids = businex_get_ids( 'service_page' );
	if( count( $srvc_ids ) > 0 ):

		$query = new WP_Query( apply_filters( 'businex_services_args',  array( 
			'post_type'      => 'page',
			'post__in'       => $srvc_ids, 
			'posts_per_page' => 3,
			'orderby'        => 'post__in'
		)));

		if( $query->have_posts() ):
?>
			<!-- Service Section -->
			<section class="wrapper block-service">
				<div class="container">
					<div class="section-title-group">
						<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'service_section_title' ) ); ?></h2>
					</div>
				</div>
				<div class="container">
					<div class="row">
			    		<?php
			    			$count = $query->post_count;
				    		while( $query->have_posts() ): 
				    			$query->the_post();
				    			$title = businex_get_piped_title();
				    	?>
						    	<div class="col-xs-12 col-sm-6 col-md-4">
						    		<div class="icon-block-outer">
						    			<div class="post-content-inner">
						    				<div class="list-inner">
					    						<?php 
					    							$icon = $title[ 'sub_title' ] ;
					    							if( !empty( $icon ) ):
					    						?>
					    								<div class="icon-area">
					    									<span class="icon-outer">
					    										<a href="<?php the_permalink(); ?>">
					    											<span class="kfi <?php echo esc_attr( $icon ); ?>"></span>
					    										</a>
					    									</span>
					    								</div>
					    						<?php endif; ?>
												<div class="icon-content-area">
						    						<h3>
						    							<a href="<?php the_permalink(); ?>">
						    								<?php echo esc_html( $title[ 'title' ] ); ?>
						    							</a>
						    						</h3>
						    						<div class="text">
						    							<?php 
						    								businex_excerpt( 12, true, '&hellip;' );
						    								if( get_edit_post_link()){
		    													businex_edit_link();
		    												}
						    							?>
						    						</div>
					    							<div class="button-container">
					    								<a href="<?php the_permalink(); ?>" class="button-text">
					    									<?php esc_html_e( 'Read More', 'businex' ); ?>
					    								</a>
					    							</div>
												</div>
						    				</div>
						    			</div>
						    		</div>
						    	</div>
						<?php  
							endwhile;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</section> <!-- End Service Section -->
<?php
		endif; 
	endif; 
endif;