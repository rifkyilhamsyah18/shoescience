<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @since Businex 1.0.0
 */
get_header();

# Print banner with breadcrumb and post title.
businex_inner_banner();
?>
<section class="wrapper wrap-detail-page" id="main-content">
	<div class="container">
		<div class="row">
			<?php if( businex_get_option( 'single_layout' ) == 'left' ): ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			<?php $class = ''; ?>
			<?php businex_get_option( 'single_layout' ) == 'compact' ? $class = 'col-xs-12 col-sm-12 col-md-8 col-md-offset-2' : $class = 'col-xs-12 col-sm-7 col-md-8'; ?>
				<div class="<?php echo $class; ?>">
					<main id="main" class="post-main-content" role="main">
						<?php
							# Loop Start
							while( have_posts() ): the_post();

								# Print posts respect to the post format
								get_template_part( 'template-parts/single/content', get_post_format() );

								# Print the author details of this post
								get_template_part( 'template-parts/single/content', 'author-detail' );

								# If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								# Navigate the post. Next post and Previou post.
								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous Post', 'businex' ) . '</span><span class="nav-title">%title</span>',
									'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next Post', 'businex' ) . '</span><span class="nav-title">%title</span>',
								) );

							# Loop End
							endwhile; 
						?>
					</main>
				</div>
			<?php if( businex_get_option( 'single_layout' ) != 'left' && businex_get_option( 'single_layout' ) != 'compact' ): ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
