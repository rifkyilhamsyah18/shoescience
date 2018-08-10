<?php
/**
 * Template part for displaying portfolio section
 *
 * @since Businex 1.0.0
 */
?>

<?php 
if( !businex_get_option( 'disable_portfolio' ) ):

	$portfolio_ids = businex_get_ids( 'portfolio_page' );
	if( count( $portfolio_ids ) > 0 ):

		$query = new WP_Query( apply_filters( 'businex_portfolio_args',  array( 
			'post_type'      => 'page',
			'post__in'       => $portfolio_ids, 
			'posts_per_page' => 6,
			'orderby'        => 'post__in'
		)));

		if( $query->have_posts() ):
	?>
			<!-- Portfolio Section -->
			<section class="wrapper block-portfolio block-grid">
				<div class="section-title-group">
					<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'portfolio_title' ) ); ?></h2>
				</div>
				<div class="container">
					<div class="row">
			    		<?php
			    			$count = $query->post_count;
				    		while( $query->have_posts() ): 
				    			$query->the_post();

					    		$image = businex_get_thumbnail_url( array(
					    			'size' => 'businex-1170-710'
					    		));
				    	?>
				    			<div class="masonry-grid">
							    	<article class="post-content">
							    		<div class="post-thumb-outer">
    										<div class="post-thumb">
					    						<img src="<?php echo esc_url( $image ); ?>" />
						    		        	<a href="<?php the_permalink(); ?>">
			    									<div class="post-content-inner">
				    									<div class="post-title">
				    			    						<h3>
								    							<?php the_title(); ?>
				    			    						</h3>
				    									</div>
			    									</div>
							    		        </a>
    										</div>
							    		</div>
							    	</article>
							    	<?php 
	    								if( get_edit_post_link()){
											businex_edit_link();
										}
							    	?>
						    	</div>
						<?php  
							endwhile;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</section> <!-- End Portfolio Section -->
	<?php
		endif; 
	endif; 
endif;
?>