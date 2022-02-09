<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <?php wp_head(); ?>
    
    <title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/assets/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url') ?>/assets/icon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url') ?>/assets/icon/safari-pinned-tab.svg" color="#f2f2f2">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/assets/icon/mstile-144x144.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?v=1.3.2">
</head>

<body <?php body_class(); ?>>

<style>
    #wpadminbar {display: none;}
</style>

    <header class="grid header-grid mb-3" id="header">
        <div class="header-logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Kenderlánc"></a>
        </div>
        <div class="header-icons">
            <a href="<?php echo get_home_url(); ?>/fiokom" class="header-icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/profile.svg" alt="Profil"></a>
            <a href="<?php echo get_home_url(); ?>/kosar" class="header-icon rel">
                <img src="<?php bloginfo('template_url') ?>/assets/img/icons/cart.svg" alt="Kosár">
                <?php
                    global $woocommerce;
                    if($woocommerce->cart->cart_contents_count > 0) { ?>
                        <div class="cart-counter">
                            <span><?php echo $woocommerce->cart->cart_contents_count; ?></span>
                        </div>
                    <?php }
                ?>
            </a>
            <div class="header-icon hide"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/heart.svg" alt="Kedvencek"></div>
            <div id="mobileMenuToggler" class="header-icon mobile-only menu-toggler"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/menu.svg" alt="Menü"></div>
        </div>
        <div id="desktopMenuToggler" class="header-menu desktop-only menu-toggler">
            <img src="<?php bloginfo('template_url') ?>/assets/img/icons/menu.svg" alt="Menü">
        </div>
        <div class="header-search">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field" placeholder="Keresés" value="<?php echo get_search_query(); ?>" name="s" />
                <!-- <button type="submit" class="search-submit btn">Keresés</button> -->
            </form>
        </div>
    </header>
    <div class="navbar" id="navbar">
        <div class="nav-header grid header-grid">
            <div id="desktopMenuClose" class="header-icon desktop-only menu-toggler"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/close.svg" alt="Bezár"></div>
            <div class="header-logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Kenderlánc"></a>
            </div>
            <div class="header-icons">
                <div id="mobileMenuClose" class="header-icon mobile-only menu-toggler"><img src="<?php bloginfo('template_url') ?>/assets/img/icons/close.svg" alt="Bezár"></div>
            </div>
        </div>
        <nav>
            <a href="<?php echo get_home_url(); ?>/termekek" class="nav-item">Termékek</a>
            <a href="<?php echo get_home_url(); ?>/kenderlanc-szolgaltatasok" class="nav-item">Szolgáltatások</a>
            <a href="<?php echo get_home_url(); ?>/magazin" class="nav-item">Magazin</a>
        </nav>
        <div class="sub-menu">
            <a href="<?php echo get_home_url(); ?>/partnerek">Partnerek</a>
            <a href="<?php echo get_home_url(); ?>/rolunk">Rólunk</a>
            <a href="<?php echo get_home_url(); ?>/kapcsolat">Kapcsolat</a>
        </div>
    </div>
    <div id="page-content-wrapper">