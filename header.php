<!DOCTYPE html>

<html <?php language_attributes(); ?>> 


    <head>
<?php wp_head() ?>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Aleksander Szczypek - Fotografia Eventowa Warszawa</title>

        <meta name="description" content="">
        <meta name="subject" content="">
        <meta name="author" content="">


        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">


        <style>
            :root {               
                --header-bg-color: #040402;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #040402;

                --section-1-bg-color: #f3f3f3;
                --section-2-bg-color: #f3f3f3;
                --section-3-bg-color: #191919;
                --section-4-bg-color: #111111;
                --section-5-bg-color: #f3f3f3;
                --section-9-bg-color: #191919;
                --section-6-bg-color: #040402;
                --section-7-bg-color: #191919;
                --section-8-bg-color: #f3f3f3;
            
                --footer-bg-color: #191919;
            }
        </style>

    </head>

    <body class="theme-mode-dark">

        <header id="header">

    
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    
          <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>">
                        <img src="<?php echo get_template_directory_uri()."/assets/images/logo-aleksanderas.png"?>" style="height: 100px;">

                    </a>

                
                    <div class="ml-auto"></div>

          <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>

                    <ul class="navbar-nav icons">

                    </ul>

                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="/kontakt" target="_self" class="btn ml-lg-auto dark-button"><i class="icon-rocket"></i>SKONTAKTUJ SIĘ Z NAMI</a>

                        </li>
                    </ul>
                </div>
            </nav>

        </header>