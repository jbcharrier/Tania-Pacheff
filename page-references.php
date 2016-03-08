<?php
/*
Template Name: Page references
*/
?>

<?php get_header(); ?>

<section class="row text-center" id="reference">
    <div class="col-sm-8 col-sm-offset-2">
        <p>En dix ans de pratique de la diététique, j’ai eu le plaisir d’apporter
            mon expertise et ma vision engagée auprès de nombreux clients issus du Conseil,
            de la Protection Sociale mais aussi des Collectivités et des Services de santé.
        </p>
        <p>
            <span>Vous trouverez ci-dessous les professionnels qui me font confiance,
                        ainsi que quelques témoignages de notre collaboration.
            </span>
        </p>
    </div>
    <div class="col-sm-1 col-sm-offset-1">
        <aside class="reseaux" id="reseaux-eco-engag">
            <ul class="no-marg no-padd">
                <li class="text-center"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="text-center"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="text-center"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="text-center"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </aside>
    </div>
</section>

<main id="main-ref">
    <section class="row">
        <div class="col-md-10 col-md-offset-1 ">
            <h2 class="titre-section">Ils me font confiance</h2>
            <?php $loop = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => 30));
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php $mylink = get_post_meta($post->ID, '_tp_meta_url', false);
                if ($mylink) {
                    ?>
                    <a href="<?php echo $mylink ?>">
                        <article class="page-references grayscale col-xs-6 col-sm-3 col-md-3">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="thumbnail">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    </a>
                    <?php
                } ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="row" id="tem-ref">
        <div class="col-md-11 col-md-offset-1">
            <h2 class="titre-section">Témoignages</h2>
        </div>
        <div class="row no-padd no-marg">
            <div class="col-md-1 arrow text-center" id="arrow-refl" >
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="col-md-10">
                <div class="row no-padd">
                    <article class="col-md-4 temoin-ref">
                        <img
                            src="<?php echo get_template_directory_uri() . '/assets/img/tem1.jpg' ?>"
                            alt="test rotation" class="img-circle">
                        <div class="text-center">
                            <h4>Témoignage Brigitte D., consultante Ipsos</h4>
                            <p> « Tania est intervenue lors de notre séminaire annuel qui avait pour thème le bien-être au bureau… »</p>
                        </div>
                    </article>
                    <article class="col-md-4 temoin-ref">
                        <img
                            src="<?php echo get_template_directory_uri() . '/assets/img/tem2.png' ?>"
                            alt="test rotation" class="img-circle">
                        <div class="text-center">
                            <h4>Témoignage Martin  G., responsable RH Engie</h4>
                            <p>« La santé et la prévention des risques font tous deux partie de nos priorités.
                                C’est pourquoi nous travaillons étroitement
                                avecTania tout au long del’année… »</p>
                        </div>
                    </article>
                    <article class="col-md-4 temoin-ref">
                        <img
                            src="<?php echo get_template_directory_uri() . '/assets/img/tem3.png' ?>"
                            alt="test rotation" class="img-circle">
                        <div class="text-center">
                            <h4>Témoignage Sophie M., manager Asics</h4>
                            <p> « C’est à l’occasion d’un Tour de France que Tania nous a prodigué ses conseils nutritionnels
                                pour sportifs de haut niveau … »</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-1 text-center arrow" id="arrow-refr" >
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </section>

    <section class="row text-center" id="ref-down">
        <div class="col-sm-6 col-sm-offset-3">
            <p>Pour un devis ou toute autre demande,
                n’hésitez pas à me contacter au <span>06 62 06 90 23</span>
                ou via mon <a class="lien-formulaire-bottom" href="http://localhost/tania_pacheff/?page_id=242">formulaire de
                    contact.</a></p>
            </p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
