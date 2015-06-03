<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes();?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title('|', true , 'right');?><?php bloginfo('name');?></title>
        <meta name="description" content="<?php bloginfo('description');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php print THEMEROOT;?>/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="<?php print THEMEROOT;?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php print THEMEROOT;?>/css/main.css">
        <link rel="stylesheet" href="<?php print THEMEROOT;?>/css/owlcarousel.css">
        <link rel="stylesheet" href="<?php print THEMEROOT;?>/css/owltheme.css">
        <script src="<?php print THEMEROOT;?>/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php print THEMEROOT;?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
        <script src="<?php print THEMEROOT;?>/js/vendor/bootstrap.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar mnav navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 

          <a class="navbar-brand" href="<?php echo home_url();?>"><img class="nav-logo" src="<?php print THEMEROOT;?>/img/logo21.png"></a>

        </div>
        

          <?php
		            wp_nav_menu( array(
		                'menu'              => 'main-menu',
		                'theme_location'    => 'main-menu',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'navbar-collapse collapse',
		        		'container_id'      => 'navbar',
		                'menu_class'        => 'menu navbar-right',
		                
		                'walker'            => new wp_bootstrap_navwalker()
		                
		            ));
		  ?>
        
        
      </div>
    </nav>

    