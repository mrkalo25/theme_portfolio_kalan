<?php
/* Template Name: Menu Mobile */
get_header(); 
?>

<div class="menu-mobile-container">
    <!-- Bouton de fermeture -->
    <button onclick="history.back()" class="close-menu-button">
        <img src="<?php echo get_template_directory_uri(); ?>/icons/croix.svg" alt="Close Menu">
    </button>

    <!-- Menu principal depuis WordPress -->
    <nav class="menu-navigation">
        <?php 
        wp_nav_menu(array(
            'menu_class'     => 'menu-list',  
            'container'      => false,         
        )); 
        ?>
    </nav>

    <!-- Liens sociaux -->
    <div class="social-links-mobile">
        <a href="https://www.instagram.com/kaloyi25/"><img src="<?php echo get_template_directory_uri(); ?>/icons/instagram.svg" alt="Instagram"></a>
        <a href="https://www.linkedin.com/in/kalan-yilmaz-a762a529a/"><img src="<?php echo get_template_directory_uri(); ?>/icons/linkdin.svg" alt="LinkedIn"></a>
        <a href="mailto:yilmazk25@yahoo.com">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/mail.svg" alt="Mail">
        </a>
    </div>
</div>

<?php get_footer(); ?>
