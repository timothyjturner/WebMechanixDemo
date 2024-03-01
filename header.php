<!DOCTYPE html>
<html>

<head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <?php echo get_theme_mod('header_gtm_script'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw5wssrUu1WCULY7OiHEN1oWKxbAPFq7s" async defer></script>
</head>

<body class="wmd">
    <?php echo get_theme_mod('header_gtm_iframe'); ?>
    <header class="lag-header">
        <div class="lag-wrap">
            <div class="lag-header__inner">
                <div class="lag-header__logo-container">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo esc_url(get_theme_mod('header_logo', get_template_directory_uri() . '/images/logo.png')); ?>" alt="WebMechanix Detailing Logo" class="lag-header__logo">
                    </a>
                    <p class="lag-header__logo-container__wmd-slogan"><em>Unlocking the Code to Immaculate Cars!</em></p>
                </div>
                <div class="lag-header__menu-container">
                    <nav class="lag-header__menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'menu_class'     => '',
                            'menu_id'     => '',
                            'container'     => '',
                            'container_id'     => '',
                            'fallback_cb'    => false
                        ));
                        ?>
                    </nav>
                </div>
                <?php $header_phone_number = get_theme_mod('header_phone_number', '');
                if ($header_phone_number != '') {
                ?>
                    <div class="lag-header__phone-number-container">
                        <a href="tel:<?php echo $header_phone_number; ?>"><img src="<?php echo get_template_directory_uri() . '/images/call--red.svg'; ?>" /> <?php echo $header_phone_number; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>