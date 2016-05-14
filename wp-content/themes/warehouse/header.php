<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->

	<!-- Fontes -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- CSS - Default -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/warehouse.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/sweetalert.css" type="text/css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header id="header">
		<div class="container">

			<!-- logo -->
			<div id="logo" class="col-md-2">
				<?php if (is_home()) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo.png" title="Warehouse - Gravação, Mix & master" alt="" />
				<?php else : ?>
					<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="shrink">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo.png" title="Warehouse - Gravação, Mix & master" alt="" />
					</a>
				<?php endif; ?>
			</div>

			<!-- menu -->
			<!-- <div id="menu" class="col-md-6">
				<ul>
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#quemSomos">Quem Somos</a>
					</li>
					<li>
						<a href="#equipe">Equipe</a>
					</li>
					<li>
						<a href="#producoes">Produções</a>
					</li>
					<li>
						<a href="#">Contato</a>
					</li>
				</ul>
			</div> -->

			<?php wp_nav_menu( array( 'menu' => 'Menu principal', 'menu_class' => 'col-md-6', 'menu_id' => 'menu' ) ); ?>

		</div>
	</header>










