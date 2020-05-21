<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <meta charset="utf-8">

  <title>Love Travel HTML5</title> <!--insert your title here-->
  <meta name="description" content="Love Travel HTML5 version"> <!--insert your description here-->
  <meta name="author" content="nicDark"> <!--insert your name here-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

  <!--START CSS-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css"> <!--main-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/grid.css"> <!--grid-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/responsive.css"> <!--responsive-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/rs-plugin/css/settings.css" media="screen" /> <!--rev slider-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/showbizpro/css/settings.css" media="screen" /> <!--showbiz-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/animate.css"> <!--animate-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/superfish.css" media="screen"> <!--menu-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/fancybox/jquery.fancybox.css"> <!--main fancybox-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/fancybox/jquery.fancybox-thumbs.css"> <!--fancybox thumbs-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/isotope.css"> <!--isotope-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/flexslider.css"> <!--flexslider-->
  <!--END CSS-->

  <!--google fonts-->
  <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--FAVICONS-->
  <link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/img/favicon/apple-touch-icon-114x114.png">
  <!--END FAVICONS-->

  <?php wp_head(); ?>
</head>
<body id="startpage">

<!--start header-->
<header id="navigationmenu" class="fade-down animate1 navigationmenulight">

  <!--start container-->
  <div class="container">

    <!--start navigation-->
    <div class="grid_12 gridnavigation">

      <img class="logo fade-up animate4" alt="" src="<?php bloginfo("template_url"); ?>/img/logo.png">
      <!--start navigation-->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'sf-menu',
        'menu_id' => 'nav',
        'before' => '<span class="menufilter"></span>',
        'link_before' => '<strong>',
        'link_after' => '</strong>',
      ))
      ?>
      <!--end navigationmenu-->

    </div>
    <!--end navigation-->

  </div>
  <!--end container-->

</header>
<!--end header-->