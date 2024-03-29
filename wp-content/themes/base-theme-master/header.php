<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaseTheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <?php
   wp_head();
   ?>
</head>

<body <?php body_class(); ?>>
   <?php load_analytics('analytics_body_top') ?>
   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'basetheme'); ?></a>

      <?php get_template_part('template-parts/header', 'main'); ?>

      <div id="content" class="site-content">