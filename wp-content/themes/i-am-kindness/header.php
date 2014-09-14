<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package i-am-kindness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo get_template_directory_uri(); ?>/styles/build/main.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/forms-min.css">

<script src="//use.typekit.net/tqt7qte.js"></script>
<script>try{Typekit.load();}catch(e){}</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header">
		<nav class="nav">
			<div class="logo">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="I AM Kindness logo" /></a>
			</div>
			<ul class="menu">
				<li><a href="#">About</a></li>
				<li><a href="#">Volunteer</a></li>
				<li><a href="#">Donate</a></li>
				<li><a href="#">Blog</a></li>
			</ul>
		</nav>
	</div>
