<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Businex 1.0.0
 */
?>
<?php $class = ''; ?>
<?php businex_get_option( 'archive_post_layout' ) == 'grid' ? $class = 'masonry-grid' : $class = 'masonry-grid wrap-post-list'; ?>
<div class="<?php echo $class; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
		<?php $align_class = ''; ?>
		<?php if( businex_get_option( 'archive_post_image_alignment' ) == 'left' ){
				$align_class = 'text-left';
			}elseif( businex_get_option( 'archive_post_image_alignment' ) == 'right' ){
				$align_class = 'text-right';
			}else {
				$align_class = 'text-center';
			}
		?>

		<div class="post-thumb-outer <?php echo $align_class; ?>">
			<?php
			if( businex_get_option( 'archive_post_image' ) == 'thumbnail' ){
				$size = 'thumbnail';
			}elseif( businex_get_option( 'archive_post_image' ) == 'medium'){
				$size = 'medium';
			}elseif( businex_get_option( 'archive_post_image' ) == 'large'){
				$size = 'large';
			}else {
				$size = 'businex-1170-710';
			}
			$args = array(
				'size' => $size,
			);

			# Disabling dummy thumbnails when its in search page, also support for jetpack's infinite scroll
			if( 'post' != get_post_type() && businex_is_search() ){
				$args[ 'dummy' ] = false;
			}

			businex_post_thumbnail( $args );
			?>
		</div>

		<div class="post-content-inner">
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
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_title(); ?>
					</a>
				</h3>
			</header>
			<div class="post-text"><?php businex_excerpt( 15, true, '&hellip;' ); ?></div>
			<div class="button-container">
				<?php
					if( 'post' == get_post_type() ){
					?>	
					<div class="post-footer-detail">
						<?php if( 'post' == get_post_type() ): ?>
							<div class="post-format-outer">
								<span class="post-format">
									<span class="kfi <?php echo esc_attr( businex_get_icon_by_post_format() ); ?>"></span>
								</span>
							</div>
						<?php endif; ?>
						<span class="author-name">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
								<span><?php echo esc_html__( 'by:', 'businex' ); ?></span>
								<?php echo get_the_author(); ?>
							</a>
						</span>
						&nbsp; &nbsp;<?php echo esc_html__( '|', 'businex' ); ?>&nbsp; &nbsp;
						<a href="<?php echo esc_url( businex_get_day_link() ); ?>" class="date">
							<span class="day">
							<?php
								echo esc_html(get_the_date('M j, Y')); ?>
							</span>
						</a>
						&nbsp; &nbsp;<?php echo esc_html__( '|', 'businex' ); ?>&nbsp; &nbsp;
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
			</div>
		</div>
	</article>
</div>
