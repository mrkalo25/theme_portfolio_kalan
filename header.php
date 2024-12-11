<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">
        <!-- Menu principal -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
               
                'container' => false,
                'menu_class' => 'nav-menu',
            ));
            ?>
        </nav>
        <!-- Liens sociaux -->
        <div class="social-links">
            <a href="https://www.instagram.com/kaloyi25/"><img src="<?php echo get_template_directory_uri(); ?>/icons/instagram.svg" alt="Instagram"></a>
            <a href="https://www.linkedin.com/in/kalan-yilmaz-a762a529a/"><img src="<?php echo get_template_directory_uri(); ?>/icons/linkdin.svg" alt="LinkedIn"></a>
            <a href="mailto:yilmazk25@yahoo.com">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/mail.svg" alt="Mail">
            </a>
        </div>


        <!-- Lien vers la page "Menu" -->
        <?php if (!is_page('menu-mobile')) : ?>
    <a href="<?php echo site_url('/menu-mobile'); ?>" class="menu-toggle">
        <img src="<?php echo get_template_directory_uri(); ?>/icons/menu.svg" alt="Menu Icon" class="icon-menu">
    </a>
<?php endif; ?>
    </div>
</header>
