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
	<header class="hero-header <?php if ( is_front_page() ) : ?>full-hero<?php else : ?>standard-hero<?php endif; ?>">
		<div class="row <?php if ( is_front_page() ) : ?>full-hero-content<?php else : ?>standard-hero-content<?php endif; ?>">
			<div class="columns small-12 ">
				<h1>Warriors of the Month</h1>
			</div>
		</div>
	</header>
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
				'menu_class' => '',
				'theme_location' => 'home-menu',
				'menu_id'        => 'primary-menu',
			) );
		}else{
			wp_nav_menu( array(
				'container' => 'nav',
				'container_class' => '',
				'menu_class' => '',
				'theme_location' => 'other-pages',
				'menu_id'        => 'primary-menu',
			) );
		}
	?>
