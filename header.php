<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>
	<div id="topHeader"></div>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-4 col-sm-8 col-xs-12">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
					<?php if ( is_home() && !is_front_page() ) : ?>
						<h1 class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
					<?php endif; ?>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-8 col-sm-4 col-xs-12">
					<div class="btn-menu"><i class="sydney-svg-icon"><?php sydney_get_svg_icon( 'icon-menu', true ); ?></i></div>
					<?php if ( is_active_sidebar( 'sidebar-my-widget' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-my-widget' ); ?>
					<?php endif; ?>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
					
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	