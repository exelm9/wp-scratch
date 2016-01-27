<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Theme</title>
	<!-- connects wordpress hooks -->
		<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">

	<div id="navbar" class="navbar">
		<?php wp_nav_menu(array('theme_location'=>'main')); ?>
	</div><!-- #navbar -->
	<!-- grabs first menu available.  If want to preload other menus, have to understand paramters passed -->
	
</header>