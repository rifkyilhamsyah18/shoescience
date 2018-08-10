<?php
/**
 * Template part for displaying highlight posts slider section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Businex 1.0.0
 */

$highlight_category_id = businex_get_option( 'highlight_category' );
$args = array(
	'posts_per_page'      => 4,
	'offset'              => 0,
	'category'            => $highlight_category_id,
	'ignore_sticky_posts' => 1
);
$posts_array = get_posts( $args );

if( count( $posts_array ) > 0 && !businex_get_option( 'disable_highlight' ) ){
?>
	<section class="wrapper block-highlight">
		<div class="container">
			<div class="section-title-group">
				<h2 class="section-title"><?php echo wp_kses_post( businex_get_option( 'highlight_section_title' ) ); ?></h2>
			</div>
		</div>
		<div class="block-highlight-inner">
			<div class="controls"></div>
			<div class="container">
				<div class="highlight-slider owl-carousel">
					<?php
						foreach ( $posts_array as $post ) : setup_postdata( $post );
							$image = businex_get_thumbnail_url( array( 'size' => 'businex-1170-710' ) );
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
									    								<?php echo esc_html__( '|', 'businex' ); ?>
									    								<span class="comment-link">
									    									<a href="<?php comments_link(); ?>">
									    										<?php echo absint( wp_count_comments( get_the_ID() )->approved ); ?>
									    									</a>
									    								</span>
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
			</div>
			<div id="after-slider"></div>
		</div>
	</section>
<?php
}