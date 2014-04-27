<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package delstrong
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">


<link rel='stylesheet' id='delstrong-style-css'  href='http://morgan.danny-murphy.com/wp-content/themes/delstrong/style.css?ver=3.9' type='text/css' media='all' />

</head>

<body>

<div class="masthead">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="masthead__title">
		<?php bloginfo( 'name' ); ?>
	</a>
</div>
