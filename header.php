<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package warriors_of_the_month
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( is_front_page() ) : ?>

		<header class="hero-header full-hero">
			<video autoplay loop class="video-bg" muted plays-inline>
				<source src="<?php echo get_template_directory_uri(); ?>/videos/live.mp4" type="">
			</video>
			<div class="row full-hero-content">
				<div class="columns small-12 ">
					<h1>Warriors of the Month</h1>
					<h2 class="cursive">Assembly</h2>
					<p>Out August 25<sup>th</sup></p>
					<!--<p class="countdown-number">
						<span class="all">0</span>
					</p>-->
					<!--<img src="<?php echo get_template_directory_uri(); ?>/images/diamond.png" alt="">-->
				</div>
			</div>
		</header>
		<div class="detail-bg">
		</div>
	<?php else : ?>

		<header class="hero-header standard-hero">
			<div class="row standard-hero-content">
				<div class="columns small-12 ">
					<a href="<?php echo get_home_url(); ?>"><h1>Warriors of the Month</h1></a>
				</div>
			</div>
		</header>
	<?php endif; ?>

	<div class="nav-hamburger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<?php
		if( is_front_page() ) {
			wp_nav_menu( array(
				'container' => 'nav',
				'container_class' => '',
				'container_id' => 'nav',
				'menu_class' => '',
				'theme_location' => 'home-menu',
				'menu_id'        => 'primary-menu',
			) );
		}else{
			wp_nav_menu( array(
				'container' => 'nav',
				'container_class' => '',
				'container_id' => 'nav',
				'menu_class' => '',
				'theme_location' => 'other-pages',
				'menu_id'        => 'primary-menu',
			) );
		}
	?>
