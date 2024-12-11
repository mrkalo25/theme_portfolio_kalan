<?php
// Inclure le header
get_header();
?>

<section class="homepage-header" id="home">
    <div class="intro">
        <h1 class="title-outline">BONJOUR</h1>
        <h1 class="name-title">Je suis Kalan Yilmaz</h1>
        <p class="specialty">Web design - Branding</p>
    </div>
    
    <div class="scroll-indicator">
        <div class="scroll-container">
            <!-- Texte qui tourne -->
            <div class="scroll-circle">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/scroll.svg" alt="Scroll" class="scroll-text">
            </div>
            <!-- Flèche fixe -->
            <img src="<?php echo get_template_directory_uri(); ?>/icons/fleche.svg" alt="Arrow" class="scroll-arrow">
        </div>
    </div>
</section>





<section class="scrolling-text">
    <div class="text-wrapper">
        <div class="scrolling-content">
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">BRANDING</span>
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">BRANDING</span>
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">BRANDING</span>
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">BRANDING</span>
        </div>
    </div>
</section>





<section class="about-section" id="about">
    <div class="about-container">
        <!-- Avatar -->
        <div class="avatar-container">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/avatar.svg" alt="Avatar" class="avatar-image">
        </div>

        <!-- Conteneur général -->
        <div class="content-container">
            <!-- Bulle indépendante -->
            <div class="bubble-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/bulle.svg" alt="Bubble Background" class="bubble-image">
            </div>

            <!-- Contenu de la bulle -->
            <div class="bubble-content">
                <p>Je me spécialise dans le web design. J'ai acquis des compétences solides dans la conception numérique.</p>
                <p>Je ne me limite pas à la création d'interfaces, j'ai aussi développé des compétences en développement et en communication.</p>
                <p>Je suis motivé par l'envie d'apprendre et d'évoluer dans ce domaine. J'apprécie également le travail collaboratif, et je suis convaincu que le partage des connaissances est essentiel pour stimuler l'excellence créative.</p>
            </div>

            <!-- Bouton et icônes -->
            <div class="button-icons-container">
                <a href="<?php echo get_template_directory_uri(); ?>/cv/Kalan_Yilmaz_CV.pdf" download class="cv-button">VOIR MON CV</a>
                <div class="tools-icons">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/figma.svg" alt="Figma" class="tool-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/wordpress.svg" alt="WordPress" class="tool-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/photoshop.svg" alt="Photoshop" class="tool-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/illustrator.svg" alt="Illustrator" class="tool-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/icons/indesign.svg" alt="InDesign" class="tool-icon">
                </div>
            </div>
        </div>
    </div>
</section>





<section class="mes-projets-section" id="projet">
    <h2 class="mes-projets-titre">MES PROJETS</h2>
    <div class="mes-projets-container">
        <?php
        // La boucle WP Query pour récupérer les projets
        $args = array(
            'post_type' => 'projet', // Ton type de publication
            'posts_per_page' => 3, // Limité à 3 projets
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="projet-card">
    <div class="projet-image">
        <?php the_post_thumbnail('medium'); // Affiche l'image mise en avant ?>
    </div>
    <h3 class="projet-titre"><?php the_title(); // Affiche le titre du projet ?></h3>
    <p><?php the_excerpt(); // Affiche l'extrait du contenu ?></p>
    <a href="<?php the_permalink(); // Lien vers l'article ?>" class="projet-bouton">Découvrir</a>
</div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucun projet trouvé.</p>';
        endif;
        ?>
    </div>
    <div class="autres-projets">
        <a href="http://localhost:8888/portfolio/projets/" class="autres-projets-bouton">MES AUTRES PROJETS</a>
    </div>
</section>





<section class="contact-section" id="contact">
    <div class="contact-container">
        <h2 class="contact-title">CONTACTEZ MOI</h2>
        <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <div class="form-row">
                <input type="text" name="nom" placeholder="Nom - Prénom" required>
                <input type="email" name="email" placeholder="Adresse mail" required>
            </div>
            <textarea name="message" placeholder="Votre message..." rows="5" required></textarea>
            <input type="hidden" name="action" value="envoyer_message">
            <button type="submit" class="contact-button">ENVOYER</button>
        </form>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/icons/contact.svg" alt="Fond Enveloppe" class="enveloppe-svg">
</section>












