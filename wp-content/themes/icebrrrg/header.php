<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Free Responsive Website Template | Icebrrrg by OD</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">



  <!-- CSS
  ================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>


  <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  <!-- Favicons
	================================================== -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114.png">


</head>

<body class="wrap">



  <!-- Primary Page Layout
	================================================== -->
  <header id="header" class="site-header">
    <div id="header-inner" class="container">
      <div class="row align-items-center">
        <div class="col-md-4 col-12">
          <div class="logo-menu-container">
            <h1 id="site-title" class="site-title">
              <a href="<?php echo home_url(); ?>" id="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icebrrrg-logo.png" alt="Icebrrrg logo" height="63" width="157" />
              </a>
            </h1>
            <nav id="main-nav" class="main-nav">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'menu-main',
                'container' => 'ul',
                'menu_class' => 'navbar-nav',
                'fallback_cb' => false // Disable fallback menu
              ));
              ?>
            </nav>
            <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
          </div>
        </div>
        <div class="col-md-8 col-12">
          <!-- Conteúdo adicional do cabeçalho aqui -->
        </div>
      </div>
    </div>
  </header>