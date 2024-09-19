<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->

<!-- header area -->
<header class="header">
    <!-- top header -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            <li><a href="mailto:info@example.com"><i class="far fa-envelopes"></i> info@example.com</a></li>
                            <li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +2 123 654 7898</a></li>
                            <li><a href="#"><i class="far fa-alarm-clock"></i> Sun - Fri (08AM - 10PM)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-link">
                        <a href="#"><i class="far fa-arrow-right-to-bracket"></i> Login</a>
                        <a href="#"><i class="far fa-user-vneck"></i> Register</a>
                    </div>
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main navigation -->
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main_nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu', // Emplacement du menu
                        'menu_class' => 'navbar-nav', // Classe de la liste des éléments de menu
                        'container' => false, // Désactiver l'encapsulation du menu dans un div
                    ));
                    ?>
                    <div class="nav-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <div class="nav-right-btn mt-2">
                            <a href="#" class="theme-btn"><span class="fas fa-taxi"></span>Book A Taxi</a>
                        </div>
                        <div class="sidebar-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-bars-filter"></i></button>
                        </div>
                    </div>
                </div>

                <!-- search area -->
                <div class="search-area">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type Keyword...">
                            <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- search area end -->
            </div>
        </nav>
    </div>
</header>
<!-- header area end -->
