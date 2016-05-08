<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package HowlThemes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php get_template_part('inc/dragfun/dragtheme', 'css'); ?>

		<?php wp_head(); ?>

		<!-- CSS files -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/reset.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/grid.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/granplaza.css" type="text/css" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.png" type="image/x-icon" />

		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

		<!-- bxSlider Javascript file -->
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/bxslider/jquery.bxslider.min.js"></script>

		<!-- bxSlider CSS file -->
		<link href="<?php bloginfo( 'template_directory' ); ?>/js/bxslider/jquery.bxslider.css" rel="stylesheet" />

		<!--  -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider();
			});
		</script>
	</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<div id="page" class="hfeed site">

		<!-- Topo -->
		<div class="drag-navbar">
			<div class="container">
				<nav id="site-navigation" class="main-navigation grid_11 maven_promedium" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'Menu Topo' ) ); ?>
				</nav>
				<div class="content-snapchat grid_1">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/icons/snapchat.png" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
				</div>
			</div>
		</div>

		<header id="masthead" class="site-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
			<div class="container">

				<!-- Logo -->
				<div class="content-logo grid_4">
					<a href="<?php bloginfo( 'url' ); ?>" rel="home" title="Plaza Blog">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/gran-plaza-logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
				</div>

				<!-- Menu Principal -->
				<div class="content-menu grid_8">
					<nav class="secondary-navigation maven_promedium" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
						<div class="menu-footer">
							<?php wp_nav_menu( array('menu' => 'primary') ); ?>
						</div>
					</nav>

					<div class="content-search">
						<div class="searchboxcontainer"><i class="fa fa-search"></i></div>
						<div class="srchcontainer">
							<div class="srchcontainerin">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

	<!-- <div id="content" class="site-content"> -->
