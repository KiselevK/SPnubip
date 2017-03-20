<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fabthemes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile"   href="http://gmpg.org/xfn/11">
<link rel="pingback"  href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,900,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="top-bar">
		<div class="search-beam">
			<div class="container"><div class="row">
				<div class="col-md-12">
					<div class="search-box"> 
					<?php get_search_form(); ?>
					<span class="sclose"> <i class="fa fa-times-circle"></i> </span>
					</div>
				</div>
			</div></div>
		</div>
		<div class="container"><div class="row">
			<div class="col-sm-6 top-left">
				<ul>
					<li> <a href="<?php ft_of_get_option('fabthemes_twitter','twitter'); ?>"> <i class="fa fa-twitter-square"></i> </a> </li>
					<li> <a href="<?php ft_of_get_option('fabthemes_facebook','facebook'); ?>"> <i class="fa fa-facebook-square"></i> </a></li>
					<li> <a href="<?php ft_of_get_option('fabthemes_gplus','gplus'); ?>"> <i class="fa fa-google-plus-square"></i> </a></li>
					<li> <a href="<?php ft_of_get_option('fabthemes_tripadvisor','tripadvisor'); ?>"> <i class="fa fa-tripadvisor"></i> </a></li>
				</ul>
			</div>
			<div class="col-sm-6 top-right">
				<ul>
					<li class="sbutton"> <i class="fa fa-search"></i></li>
					<?php $bookpage = ft_of_get_option('fabthemes_bookingpage','5');?>
					<li> <a href="<?php  echo get_permalink($bookpage); ?>"> <i class="fa fa-calendar"></i> Book a Table </a> </li>
				</ul>
				
			</div>
		</div></div>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="container"> <div class="row">
			<div class="col-sm-4"> 
				<div class="site-branding">
					
	<?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
				<h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /></a></h1>
	<?php } else { ?>
				<h1 class="site-title logo"><a id="blogname" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>

				</div><!-- .site-branding -->
			</div>

			<div class="col-sm-8"> 
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'restaurant' ) ); ?>
				</nav><!-- #site-navigation -->
				
			</div>	
		</div></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">