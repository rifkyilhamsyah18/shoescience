<?php
/** 
* Template for Off canvas Menu
* @since Businex 1.0.0
*/
?>
<div id="offcanvas-menu">
	<div class="close-offcanvas-menu">
		<span class="kfi kfi-close"></span>
	</div>
	<div id="primary-nav-offcanvas" class="offcanvas-navigation">
		<?php businex_get_menu( 'primary' ); ?>
	</div>
	<?php get_template_part( 'template-parts/header/header', 'contact' ); ?>
</div>