<?php
/*
Template Name: Page contact-form
*/
?>


<?php get_header(); ?>

<!--Fenêtre modale Bootstrap-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmation de l'envoi de votre message</h4>
            </div>
            <div class="modal-body">
                <p>Vous recevrez une réponse dans les plus brefs délais.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!--    Main Contact Form-->
<main id="page-form">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Formulaire pour me contacter</h3>
        </div>
    </div>
    <div class="row" id="form">
        <div class="col-md-6 col-md-offset-3" id="form-validation">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                        <button id="valid">Valider</button>
                        <a id="retour-home" href="http://localhost/tania_pacheff/">Retour à la page d'accueil</a>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>



