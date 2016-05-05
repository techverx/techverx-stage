<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Techverx</title>
 <?php wp_head(); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<!--<link rel="icon" type="image/png" href="favicon.png">-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
<!-- 
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Enriqueta:400,700' rel='stylesheet' type='text/css'> -->


</head>
   <?php if(is_front_page()){ ?>
<body class="homepage">
<?php } else { ?>
<body>
<?php } ?>

    <div class="responsive-menu">
        <ul class="list list-unstyled">
            <li><a href="<?php echo get_page_link(8); ?>">ABOUT</a></li>
            <li><a href="<?php echo get_page_link(12); ?>">SERVICES</a></li>
            <li><a href="<?php echo get_page_link(14); ?>">WORK</a></li>
            <li><a href="<?php echo get_page_link(29); ?>">TEAMS</a></li>
            <li><a href="<?php echo get_page_link(32); ?>">CONTACT</a></li>
            <li><a href="<?php echo get_page_link(35); ?>">BLOG</a></li>
            <li><a href="<?php echo get_page_link(32); ?>">HIRE A TEAM</a></li>
            <li><a href="<?php echo get_page_link(32); ?>">START A PROJECT</a></li>
        </ul>
    </div>
    

    <!-- 
    <?php if(is_front_page()){ ?>
<p class="text-center video-text">
    STUCK FOR SOFTWARE?<br>
    <span>Let us help you out...</span><br>
    <a href="#" class="offer-section-go"><i class="fa fa-angle-down fa-lg"></i></a>
</p>
<div class="fullscreen-bg" data-quality="420p">
 <div class="dots"></div>
    <video loop autoplay class="bgVideo">
        <source class="bgVideomp4" src="<?php bloginfo('template_directory'); ?>/videos/homepage.mp4" type="video/mp4">
    </video>
</div>
<?php } ?> -->


<div class="header">
  <div class="navbar-fixed-top">
    <div class="container">

    <div class="pull-right text-right small-menu"><i class="fa fa-bars fa-2x"></i></div>
      
    
        
        <div class="pull-right text-right">
            <nav class="navbar navbar-default navbar-fixed-top">
    <div id="top-header">
    <div class="container no-padding" >
    <div class="pull-right text-right no-padding" >
     <div class="top-text text-right pull-right"><i class="fa fa-envelope" aria-hidden="true"></i> <span><a href="http://www.techverx.com/contact/">Get a Free Consultation</a></span></div>

    <div class="text-right pull-right">
    <i class="fa fa-phone" aria-hidden="true"></i>  <a href="tel:+18845393562">1-884-539-3562</a>
    </div>
   
    </div>
    </div>
</div>

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand  phone-logo-size" href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/techverx-logo.png" alt="techverx" class="img-responsive phone-logo" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
   
        <?php wp_nav_menu( array( 'menu_class'=> 'nav navbar-nav navbar-right','theme_location' => 'top-menu' ) ); ?>

          <!--  <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php //echo get_page_link(12); ?>">Services</a></li>
            <li><a href="<?php //echo get_page_link(14); ?>">Portfolio</a></li>
            <li ><a href="<?php //echo get_page_link(8); ?>">About</a></li>
            <li ><a href="<?php //echo get_page_link(29); ?>">Teams</a></li>
            <li ><a href="<?php //echo get_page_link(35); ?>">Blog</a></li>
            <li ><a href="<?php //echo get_page_link(32); ?>">contact</a></li>

          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        </div>

    </div>
    </div>
</div>
