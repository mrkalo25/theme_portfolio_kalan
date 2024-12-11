<?php get_header(); ?>

<!-- SECTION CONTEXTE -->
<div class="project-section project-context">
  <div class="project-text-container">
    <h2 class="project-title">Contexte</h2> <!-- Titre fixe -->
    <p><?php the_field('text_1'); // Texte 1 ?></p>
  </div>
  <img src="<?php the_field('img_1'); // Image 1 ?>" alt="Contexte du projet" class="project-image">
</div>

<!-- SECTION OUTILS UTILISÉS -->
<div class="project-section project-tools">
  <div class="project-text-container">
    <h2 class="project-title">Outils utilisés</h2> <!-- Titre fixe -->
    <p ><?php the_field('text_2'); // Texte 2 ?></p>
  </div>
  <img src="<?php the_field('img_2'); // Image 2 ?>" alt="Outils utilisés" class="project-image">
</div>

<!-- SECTION RESPONSIVE -->
<div class="project-section project-responsive">
  <div class="project-text-container">
    <h2 class="project-title">Responsive</h2> <!-- Titre fixe -->
    <p><?php the_field('text_3'); // Texte 3 ?></p>
  </div>
  <img src="<?php the_field('img_3'); // Image 3 ?>" alt="Version responsive" class="project-image">
</div>

<!-- SECTION APPRENTISSAGES -->
<div class="project-section project-learnings">
  <div class="project-text-container">
    <h2 class="project-title">Apprentissages</h2> <!-- Titre fixe -->
    <p><?php the_field('text_4'); // Texte 4 ?></p>
  </div>
</div>


<?php get_footer(); ?>
