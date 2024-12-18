<?php
/**
 * Template Name: Archive Projet
 * Description: Page d'archive des projets
 */

get_header(); ?>




<section class="project-header" id="home">
    <div class="project-intro">
        <h1 class="title-outline">PROJETS</h1>
        <h1 class="name-title">Découvrez mes projets</h1>
        <h1 class="specialty">Web design - Projects</h1>
    </div>
    
    <div class="scroll-indicator">
        <div class="scroll-container">
            <!-- Texte qui tourne -->
            <div class="scroll-circle">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/scroll.svg" alt="Scroll" class="project-scroll-text">
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
            <span class="secondary">PROJETS</span>
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">PROJETS</span>
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">PROJETS</span>
            <span class="primary">WEB DESIGN</span>
            <span class="secondary">PROJETS</span>
        </div>
    </div>
</section>






<section class="mes-projets-section-2" id="projet">
    <h1 class="mes-projets-titre">TOUS MES PROJETS</h1>
    <div class="mes-projets-container">
        <?php
        // La boucle WP Query pour récupérer tous les projets
        $args = array(
            'post_type' => 'projet', // Ton type de contenu personnalisé
            'posts_per_page' => -1, // Afficher tous les projets
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
</section>


<?php get_footer(); ?>