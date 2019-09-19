<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/manifest.json' ?>">
   <link rel="icon" sizes="192x192" type="image/png" href="<?php echo get_theme_mod('favicon_img_192_ID'); ?>">
   <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_theme_mod('favicon_img_76_ID'); ?>" />
   <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_theme_mod('favicon_img_120_ID'); ?>" />
   <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_theme_mod('favicon_img_152_ID'); ?>" />
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_mod('favicon_img_180_ID'); ?>" />
  <link href="https://gmpg.org/xfn/11" rel="profile">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    $current_url = $uri_segments[1]; ?>

  <header class="topbar">
    <nav role="navigation">
      <h1 class="logo" itemscope itemtype="https://schema.org/Brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home">
          <img src="<?php echo get_theme_mod('logo_img_ID'); ?>" alt="<?php echo get_theme_mod('logo_alt_ID'); ?>" id="logo" itemprop="logo" role="banner">
          <span itemprop="name" class="visuallyhidden"><?php echo get_theme_mod('logo_alt_ID'); ?></span>
        </a>
      </h1>
      <span class="nav-toggle">Menu</span>

          <?php
            	wp_nav_menu( array(
                'theme_location'  => 'primary-menu',
                'container'       => false,
                'menu_class'      => 'menu main-nav-items',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
              ));
          ?>
    </nav>
  </header>


    <div class="site__container">
      <div class="ly__main-content">
        <div class="ly__body-content">
