<?php
/**
 * The template for displaying the header
 *
 *
 * @package Charm City Coffee Roasters
 * @subpackage Charm City Coffee Roasters
 * @since 2016
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400italic,400,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.slicknav.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="main-navigation-location">

		</div>
		<header class="site-header">

			<div class="header-background">
				<div class="container header">
					<div class="site-header-main">
						<div class="site-motto">
							<h2>A better cup for a better Baltimore</h2>
						</div>
						<div class="main-navigation" id="main-navigation">
							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
							</nav>
						</div>

					</div>
				</div>
			</div>
		</header>
