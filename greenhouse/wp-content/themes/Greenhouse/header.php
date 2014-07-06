<!DOCTYPE html>
<html>
<head>
   <title><?php bloginfo('name');  wp_title(' | '); ?></title>
  <!-- <title><?php wp_title(''); ?></title> -->
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">



  
  <?php wp_head(); ?>
</head>
    <body onload="load();">


            <!-- navigation bar -->

            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                       
                      </div>
                    
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse navbar-ex1-collapse">
                        
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,                              
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                         ?>

                        
                       
                      </div><!-- /.navbar-collapse -->
                    </nav>
          