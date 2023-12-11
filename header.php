<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffeeshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="Coffe Shop Wordpress Theme">
	<meta name="keywords" content="Wordpress theme, Tailwind, Coffee shop">
	<meta name="author" content="Aatmane Oulmouden">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="header" class="bg-cs-primary py-6 fixed top-0 left-0 w-full z-10">
			<div class="container mx-auto">
				<div class="flex justify-between items-center">
					<div class="logo">
						<a href="/" class="text-2xl font-bold font-montserrat text-white">
							Coffee Shop
						</a>
					</div>
					<nav class="menu">
						<div id="menu-toggler" class="block md:hidden">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-h-7 h-7">
								<path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
							</svg>
						</div>
						<ul id="menu" class="menu-list hidden text-center absolute top-full left-0 right-0 bg-cs-primary py-6 md:relative md:flex md:gap-7 md:py-0 md:bg-transparent">
							<li class="menu-item">
								<a href="">Home</a>
							</li>
							<li class="menu-item">
								<a href="">Offers</a>
							</li>
							<li class="menu-item">
								<a href="">Gallery</a>
							</li>
							<li class="menu-item">
								<a href="">Follow us</a>
							</li>
							<li class="menu-item">
								<a href="">Blogs</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>