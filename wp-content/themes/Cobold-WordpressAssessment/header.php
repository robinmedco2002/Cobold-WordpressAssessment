<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Wordpress Assessment - Cobold Digital</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo" style="font-size: 20px; font-weight: bold; color: #161616">
                            Cobold Digital
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <?php wp_nav_menu( array(
                        'theme_location'	=> 'primary',
                        'depth'			=> 2,
                        'container'		=> 'ul',
                        'container_class'	=> '',
                        'container_id'		=> '',
                        'menu_class'		=> 'nav',
                        'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                        'walker'	=> new WP_Bootstrap_Navwalker()));
                        ?>


                        <!-- <ul class="nav">
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="#features">About</a></li>
                            <li><a href="#work-process">Work Process</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#pricing-plans">Pricing Tables</a></li>
                            <li><a href="#blog">Blog Entries</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul> -->
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->