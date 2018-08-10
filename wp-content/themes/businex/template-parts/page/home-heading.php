<?php
/**
* Template for Home page's Heading Section
* @since Businex 1.0.0
*/
?>
<div class="container">
	<div class="section-title-group">
		<?php if( $args[ 'sub_title' ] ): ?>
			<div class="sub-title"><?php echo get_the_content();
			if( get_edit_post_link()){
				businex_edit_link();
			}
			?></div>
		<?php endif; ?>
		<h2 class="section-title"><?php echo get_the_title(); ?></h2>
	</div>
</div>