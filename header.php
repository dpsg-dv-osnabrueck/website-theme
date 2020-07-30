<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicon/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>

<body>

<header id="header" class="header clearfix">
	<div class="grid-container">
		<div class="grid-100">
			<div class="header-desktop">
				<a href="<?php bloginfo('url'); ?>" class="logo" title="<?php _e('Startseite', 'theme'); ?>"></a>
				<div class="hide-on-tablet hide-on-mobile">
					<nav id="header-main-navigation" class="header-main-navigation clearfix">
						<?php wp_nav_menu( array( 'theme_location' => 'main_navigation', 'container' => false ) ); ?>
					</nav>
					<div class="search-form-desktop">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div class="hide-on-desktop">
					<div class="mobile-menu-button fa fa-bars"></div>
				</div>
			</div>
		</div>
	</div>
  <nav id="header-mobile-navigation" class="header-mobile-navigation clearfix">
  	<?php get_search_form(); ?>
	<div class="clearfix"></div>
    <?php wp_nav_menu( array( 'theme_location' => 'mobile_navigation', 'container' => false ) ); ?>
	  <div class="meta-navigation">
		  <a href="http://de-de.facebook.com/dpsg.os" target="blank" class="fa fa-facebook-official" title="<?php _e('Unsere Facebook Seite'); ?>"></a>
		  <a href="<?php echo get_page_link(57); ?>" class="fa fa-envelope" title="<?php _e('Impressum'); ?>"></a>
		  <a href="<?php echo get_page_link(59); ?>" class="fa fa-info-circle" title="<?php _e('Kontakt'); ?>"></a>
	  </div>
  </nav>
</header>
<div class="grid-container">
	<div class="grid-100">
		<span class="site-name <?php if ( is_front_page() ) { echo 'site-name-front'; } ?> ">
			<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>
		</span>
	</div>
</div>
<?php

if ( is_front_page() ) {

} else {
 if ( function_exists( 'yoast_breadcrumb' ) ) { ?>
<div class="grid-container">
	<div class="grid-100">
		<div class="breadcrumb clearfix">
			<?php yoast_breadcrumb(); ?>
		</div>
	</div>
</div>
 <?php }
} ?>