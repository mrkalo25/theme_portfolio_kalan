<?php
add_theme_support( 'post-thumbnails' );

function register_my_menu(){
     register_nav_menus( array(
         'header-menu' => __( 'Menu De Tete'),
         'footer-menu'  => __( 'Menu De Pied'),
     ) );
 }
 add_action( 'init', 'register_my_menu', 0 );














function envoyer_message() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = sanitize_text_field($_POST['nom']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'yilmazk25@yahoo.com'; // Remplacez par votre adresse e-mail
        $subject = 'Nouveau message depuis le formulaire de contact';
        $body = "Nom : $nom\nEmail : $email\nMessage :\n$message";
        $headers = ['Content-Type: text/plain; charset=UTF-8'];

        if (wp_mail($to, $subject, $body, $headers)) {
            // Redirection vers la page de remerciement
            wp_redirect(home_url('/merci'));
            exit;
        } else {
            // Affiche un message d'erreur si l'envoi échoue
            wp_die('Échec de l\'envoi du message. Vérifiez la configuration de votre serveur.');
        }
    }
}
add_action('admin_post_nopriv_envoyer_message', 'envoyer_message');
add_action('admin_post_envoyer_message', 'envoyer_message');

















