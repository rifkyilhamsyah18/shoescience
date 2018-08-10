<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since Businex 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="site-loader">
		<div class="site-loader-inner">
			<?php
				$src = get_theme_file_uri( 'assets/images/placeholder/loader.gif' );
				
				echo apply_filters( 'businex_preloader',
				sprintf( '<img src="%s" alt="%s">',
					esc_url( $src ), 
					esc_html__( 'Site Loader', 'businex' )
				)); 
			?>
		</div>
	</div>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php echo esc_html__( 'Skip to content', 'businex' ); ?>
		</a>
		<?php get_template_part( 'template-parts/header/offcanvas', 'menu' ); ?>

		<?php
			if( !businex_get_option( 'disable_top_header' ) ):
		?>
		<header class="wrapper top-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="top-header-left">
							<div class="top-header-menu">
								<?php businex_get_menu( 'topheader' ); ?>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="top-header-right">
						<div class="socialgroup">
							<?php businex_get_menu( 'social' ); ?>
						</div>
						<span class="search-icon">
							<a href="#">
								<span class="kfi kfi-search" aria-hidden="true"></span>
							</a>
							<div id="search-form">
								<?php get_search_form(); ?>
							</div><!-- /#search-form -->
						</span>
						<?php if( class_exists( 'WooCommerce' ) ): ?>
							<span class="cart-icon">
								<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
									<span class="kfi kfi-cart-alt"></span>
									<span class="count">
										<?php echo absint( WC()->cart->get_cart_contents_count() ); ?>
									</span>
								</a>
							</span>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?php endif; ?>

		<?php
		if( businex_get_option( 'header_layout' ) == 'header_one' ):
		?>
		<header id="masthead" class="wrapper site-header site-header-primary" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-sm-7 col-md-5">
						<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
					</div>
					<div class="hidden-xs hidden-sm col-md-7" id="primary-nav-container">
						<div class="wrap-nav main-navigation">
							<div id="navigation" class="hidden-xs hidden-sm">
							    <nav class="nav">
									<?php echo businex_get_menu( 'primary' ); ?>
							    </nav>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-5 visible-xs visible-sm" id="header-bottom-right-outer">
						<div class="header-bottom-right">
							<span class="alt-menu-icon visible-sm">
								<a class="offcanvas-menu-toggler" href="#">
									<span class="kfi kfi-menu"></span>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</header><!-- primary header / header one -->
		<?php endif; ?>

		<?php
			if( businex_get_option( 'header_layout' ) == 'header_two' ):
		?>
		<header id="masthead" class="wrapper site-header site-header-two" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-sm-7 col-md-5">
						<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
					</div>
					<div class="hidden-xs hidden-sm col-md-7">
						<?php get_template_part( 'template-parts/header/header', 'contact' ); ?>
					</div>
					<div class="hidden-xs hidden-sm col-md-12" id="primary-nav-container">
						<div class="wrap-nav main-navigation">
							<div id="navigation">
							    <nav class="nav">
									<?php echo businex_get_menu( 'primary' ); ?>
							    </nav>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-5 visible-xs visible-sm" id="header-bottom-right-outer">
						<div class="header-bottom-right">
							<span class="alt-menu-icon visible-sm">
								<a class="offcanvas-menu-toggler" href="#">
									<span class="kfi kfi-menu"></span>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</header> <!-- header two -->

		<?php endif;

		if( businex_get_option( 'header_layout' ) == 'header_three' ):
		?>
		<header id="masthead" class="wrapper site-header site-header-three" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-sm-7 col-md-12">
						<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
					</div>
					<div class="hidden-xs hidden-sm" id="primary-nav-container">
						<div class="wrap-nav main-navigation">
							<div id="navigation">
							    <nav class="nav">
									<?php echo businex_get_menu( 'primary' ); ?>
							    </nav>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-sm-5 visible-xs visible-sm" id="header-bottom-right-outer">
						<div class="header-bottom-right">
							<span class="alt-menu-icon visible-sm">
								<a class="offcanvas-menu-toggler" href="#">
									<span class="kfi kfi-menu"></span>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</header> <!-- header three -->

		<?php endif;

