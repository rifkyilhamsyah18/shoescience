<?php
/**
 * Template part for displaying slider section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Businex 1.0.0
 */

# Posts Slider
$slider_id = businex_get_option( 'slider_category' );
$args = array(
	'posts_per_page'      => 3,
	'offset'              => 0,
	'category'            => $slider_id,
	'ignore_sticky_posts' => 1
);
$posts_array = get_posts( $args );

if( count( $posts_array ) > 0 && !businex_get_option( 'disable_slider' ) && businex_get_option( 'enable_posts_slider' ) ){
?>
	<section class="wrapper block-slider">
		<div class="controls"></div>
		<div class="owl-pager" id="kt-slide-pager"></div>
		<div class="home-slider owl-carousel">
			<?php
				foreach ( $posts_array as $post ) : setup_postdata( $post );
					$image = businex_get_thumbnail_url( array( 'size' => 'businex-1920-1200' ) );
			?>
					<div class="slide-item" style="background-image: url( <?php echo esc_url( $image ); ?> );">
						<div class="banner-overlay">
					    	<div class="container">
					    		<div class="row">
					    			<div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
					    				<div class="slide-inner text-center">
					    					<div class="post-content-inner-wrap">
					    						<?php
					    						if( 'post' == get_post_type() ):
					    							$cat = businex_get_the_category();
					    							if( $cat ):
					    						?>
					    								<span class="cat">
					    									<?php
					    										$term_link = get_category_link( $cat[ 0 ]->term_id );
					    									?>
					    									<a href="<?php echo esc_url( $term_link ); ?>">
					    										<?php echo esc_html( $cat[0]->name ); ?>
					    									</a>
					    								</span>
					    						<?php
					    							endif;
					    						endif;
					    						?>
						    					<header class="post-title">
						    						<h2><?php the_title(); ?></h2>
						    					</header>
							    				<div class="button-container">
							    					<div class="button-container">
							    						<?php
							    							if( 'post' == get_post_type() ){
							    							?>	
							    							<div class="post-footer-detail">
							    								<span class="author-name">
							    									<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
							    										<span><?php echo esc_html__( 'by:', 'businex' ); ?></span>
							    										<?php echo get_the_author(); ?>
							    									</a>
							    								</span>
							    								<span class="divider">
							    									<?php echo esc_html__( '|', 'businex' ); ?>
							    								</span>
							    								<a href="<?php echo esc_url( businex_get_day_link() ); ?>" class="date">
							    									<span class="day">
							    									<?php
							    										echo esc_html(get_the_date('M j, Y')); ?>
							    									</span>
							    								</a>
							    							</div>
							    						<?php } ?>
							    						<?php if( get_edit_post_link()){
							    							businex_edit_link();
							    						} ?>
							    						<a href="<?php the_permalink(); ?>" class="button-primary button-round">
							    							<?php esc_html_e( 'Learn More', 'businex' ); ?>
							    						</a>
							    					</div>
							    				</div>
						    				</div>
					    				</div>
					    			</div>
					    		</div>
					    	</div>
						</div>
					</div>
			<?php
				endforeach;
				wp_reset_postdata(); 	
			?>
		</div>
		<div id="after-slider"></div>
	</section>

<?php #Pages Slider
}elseif( count( businex_get_ids( 'slider_page' ) ) > 0 && !businex_get_option( 'disable_slider' ) && !businex_get_option( 'enable_posts_slider' ) ){
?>
	<section class="wrapper block-slider pages-slider">
		<div class="controls"></div>
		<div class="owl-pager" id="kt-slide-pager"></div>
		<div class="home-slider owl-carousel">
			<?php
				$query = new WP_Query( apply_filters( 'businex_slider_args', array(
					'posts_per_page' => 3,
					'post_type'      => 'page',
					'orderby'        => 'post__in',
					'post__in'       => businex_get_ids( 'slider_page' ),
				)));
				
				while ( $query->have_posts() ) :  $query->the_post();
					$image = businex_get_thumbnail_url( array( 'size' => 'businex-1920-1200' ) );
			?>
					<div class="slide-item" style="background-image: url( <?php echo esc_url( $image ); ?> );">
						<div class="banner-overlay">
					    	<div class="container">
					    		<div class="row">
					    			<div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
					    				<div class="slide-inner text-center">
					    					<div class="post-content-inner-wrap">
						    					<header class="post-title">
						    						<h2><?php the_title(); ?></h2>
						    					</header>
					    						<div class="content">
						    					<?php  
						    						businex_excerpt( 10, true );
						    						if( get_edit_post_link()){
		    											businex_edit_link();
		    										}
						    					?>
					    						</div>
							    				<div class="button-container">
							    					<a href="<?php the_permalink(); ?>" class="button-primary button-round">
							    						<?php esc_html_e( 'Learn More', 'businex' ); ?>
							    					</a>
							    				</div>
						    				</div>
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
		<div id="after-slider"></div>
	</section>
<?php
}else {
	businex_inner_banner();
}

