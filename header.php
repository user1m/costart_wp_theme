<?php include("php/functions.php"); ?>

<!DOCTYPE html>
<!--
  Written by:
  ________    ____       ____           ____       ____
  |  _____|  /    \     /    \         /    \     /    \
  | |        |   _ \   / _   |        |   _ \   / _   |
  | |        |  | \ \_/ / |  |       |  | \ \_/ / |  |
  | |        |  |  \   /  |  |      |  |  \   /  |  |
  | |____    |  |   \_/   |  |    |  |   \_/   |  |
  |_______|  |__|         |__|   |__|         |__|
-->

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php if (is_search()) { ?>
  <meta name="robots" content="noindex, nofollow" />
  <?php } ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
   <?php
   if (function_exists('is_tag') && is_tag()) {
     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
     elseif (is_archive()) {
       wp_title(''); echo ' Archive - '; }
       elseif (is_search()) {
         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
         elseif (!(is_404()) && (is_single()) || (is_page())) {
           wp_title(''); echo ' - '; }
           elseif (is_404()) {
             echo 'Not Found - '; }
             if (is_home()) {
               bloginfo('name'); echo ' - '; bloginfo('description'); }
               else {
                bloginfo('name'); }
                if ($paged>1) {
                 echo ' - page '. $paged; }
                 ?>
               </title>

               <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

               <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

               <!--main style-->
               <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
               <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/css/style.css">

               <!--background slider style-->
               <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slideshow.css" />

               <!-- font css style-->
               <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">

               <!--for slider style-->
               <link href='<?php bloginfo('template_url'); ?>/css/fullcalendar.css' rel='stylesheet' />
               <link href='<?php bloginfo('template_url'); ?>/css/fullcalendar.print.css' rel='stylesheet' media='print' />
               <noscript>
                <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/fallback.css" />
              </noscript>

              <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

              <!--google font style-->
              <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
              <!--font-family: 'Open Sans', sans-serif;-->

              <!--jquery min js-->
              <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>


              <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

              <?php wp_head(); ?>
            </head>

            <body <?php body_class(); ?>>

             <div class="wrapper" id="wrapper">
              <header>
                <!--menu start-->
                <div class="menu">
                  <div class="navbar-wrapper stuckMenu isStuck" style="position: fixed; top: 0px;">
                    <div class="container">
                      <div class="navwrapper">
                        <div class="navbar navbar-inverse navbar-static-top">
                          <div class="container">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                              <a class="navbar-brand" href="#">Menu</a> </div>
                              <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                  <li class="menuItem"><img src="<?php bloginfo('template_url');?>/images/logo.png"></li>
                                  <li class="menuItem active"><a href="<?php echo site_url();?>">Home</a></li>
                                  <li class="menuItem"><a href="<?php echo site_url();?>#calendar">Calendar</a></li>
                                  <li class="menuItem"><a href="<?php echo site_url(); ?>/news/">News</a></li>
                                  <li class="menuItem"><a href="<?php echo site_url(); ?>/join/">Get Involved</a></li>
                                  <li class="menuItem"><a href="<?php echo site_url(); ?>/about/">About Us</a></li>
                                  <li class="menuItem"><a href="#contact">Contact</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Navbar -->
                      </div>
                    </div>
                  </div>
                  <!--menu end-->

                  <?php echo errors();
                  echo message(); ?>

                  <!--banner start-->
                  <div class="banner row" id="banner">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
                      <!--background slide show start-->
                      <ul class="cb-slideshow">
                        <li><span>Image 01</span></li>
                        <li><span>Image 02</span></li>
                        <li><span>Image 03</span></li>

                      </ul>
                      <!--background slide show end-->
                    </div>
                  </div>
                  <!--banner end-->
                  <div class="bannerText container">
                    <h2>Creating Entrepreneurs at The Ohio State University</h2>
                  </div>
                </header>
