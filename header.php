<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package info@fores-tone.co.jp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<!--[if lt IE 10]>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/flexibility/2.0.1/flexibility.js" charset="utf-8"></script
  <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="">

	<?php if ( is_front_page() ): ?>
		<?php get_template_part( 'template-parts/front-header', 'none' ); ?>
	<?php else: ?>
		<?php get_template_part( 'template-parts/page-header', 'none' ); ?>
	<?php endif; ?>
