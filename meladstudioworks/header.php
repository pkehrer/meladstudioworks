<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Fonts and icons CSS includes -->
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/general_foundicons.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/social_foundicons.css">
<!--[if lt IE 8]>
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/general_foundicons_ie7.css">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/social_foundicons_ie7.css">
<![endif]-->
  
<!-- Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- Google analytics hook -->
<script>
(function(i,s,o,g,r,a,m){
	i['GoogleAnalyticsObject']=r;
	i[r] = i[r] || function(){ (i[r].q=i[r].q||[]).push(arguments) }, i[r].l=1*new Date();
	a = s.createElement(o),
	m = s.getElementsByTagName(o)[0];
	a.async=1;
	a.src=g;
	m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41333336-1', 'meladstudioworks.com');
ga('send', 'pageview');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="container hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<hgroup>
				<div class="row top-nav-row" style="">
					<div class="span4 menu-items-span">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 
													'menu_class' => 'nav-menu',
													'container' => '',
													'walker' => new custom_nav_walker(),
													'items_wrap' => '<div id="%1$s" class="row %2$s">%3$s</div>') ); ?>
					</div>
					<div class="span3">
						<div id="top-nav-logo-div">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpeg" id="top-nav-logo" />
								</a>
						</div>
					</div>
					<div class="span4 menu-items-span">
						<?php wp_nav_menu( array( 'theme_location' => 'secondary', 
													'menu_class' => 'nav-menu',
													'container' => '',
													'walker' => new custom_nav_walker(),
													'items_wrap' => '<div id="%1$s" class="row %2$s">%3$s</div>') ); ?>
					</div>
				</div>
			</hgroup>
		</nav><!-- #site-navigation -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
