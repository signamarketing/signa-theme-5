<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php echo get_field('insert_scripts_just_after_head', 'options'); ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png?1=; ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Kalam:700|Montserrat:400,700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

  <?php 
    //vars
    $theme_primary = get_field('theme_primary', 'options');
  ?>

  <style>
    .progress-bar {
      background: <?php echo $theme_primary; ?> !important;
    }
  </style>
  <?php echo get_field('insert_scripts_just_before_body', 'options'); ?>
</head>

<body <?php body_class(); ?>>
  <?php echo get_field('insert_scripts_just_after_body', 'options'); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'start-theme' ); ?></a>
    <!-- Top Bar - Text & CTA -->
    <?php
      get_template_part( 'template-parts/content-top-bar' );
    ?>
    <!-- Navbar -->
    <?php
      get_template_part( 'template-parts/content-navbar-2' );
    ?>
    <div id="content" class="site-content">