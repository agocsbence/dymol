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

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?v=1.0.5">
</head>

<body <?php body_class(); ?>>

<style>
    #wpadminbar {display: none;}
</style>
    <header class="<?php if (is_home() || is_page_template('page-bergyartas.php') || is_page_template('page-cegunkrol.php') ) { echo 'has-hero'; } ?>">
        <div class="flex container">
            <div class="header-logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo-icon.png" alt="Dymol" id="logoIcon"></a>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/logo-text.png" alt="Dymol" id="logoText" class="<?php if (is_home()) { echo 'hidden'; } ?>"></a>
            </div>
            <div class="navbar" id="navbar">
                <div class="pre-menu">
                    <a href="" class="nav-item btn btn-dark">HU</a>
                    <a href="" class="nav-item btn">EN</a>
                    <a href="" class="nav-item btn">Partner rendelés</a>
                    <a href="" class="nav-item btn btn-dark">Belépés</a>
                    <a href="" class="nav-icon"><img src="<?php bloginfo('template_url') ?>/assets/img/wcag.svg" alt="WCAG - Akadálymentesítés"></a>
                    <a href="" class="nav-item btn btn-dark">Keresés</a>
                    <a href="<?php echo get_home_url(); ?>/kosar" class="nav-icon">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/cart.svg" alt="Kosár">
                        <?php
                            global $woocommerce;
                            if($woocommerce->cart->cart_contents_count > 0) { ?>
                                <div class="cart-counter">
                                    <span><?php echo $woocommerce->cart->cart_contents_count; ?></span>
                                </div>
                            <?php }
                        ?>
                    </a>
                </div>
                <nav>
                    <a href="<?php echo get_home_url(); ?>/termekek" class="nav-item btn">Termékek</a>
                    <a href="<?php echo get_home_url(); ?>/cegunkrol" class="nav-item btn">Cégünkről</a>
                    <a href="<?php echo get_home_url(); ?>/bergyartas" class="nav-item btn">Bérgyártás</a>
                    <a href="" class="nav-item btn">Médiatár</a>
                </nav>
                <!-- <div id="mobileMenuToggler" class="header-menu desktop-only menu-toggler">
                    <img src="<?php // bloginfo('template_url') ?>/assets/img/icons/menu.svg" alt="Menü">
                </div>
                <div id="mobileMenuClose" class="header-icon mobile-only menu-toggler"><img src="<?php // bloginfo('template_url') ?>/assets/img/icons/close.svg" alt="Bezár"></div> -->
            </div>
        </div>
    </header>
    <main>