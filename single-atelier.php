<?php get_header(); ?>
    <section id="single-atelier">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <div class="text-prestations">
                                <?php the_content(); ?>
                            </div>

                            <p class="categories"><?php the_category(', '); ?></p>

                            <p class="tags"><?php the_tags('Mots-clés : ', ', '); ?></p>

                            <adress>
                                <div class="row contact-prestation">
                                    <div class="col-md-6 col-md-offset-3 text-center">
                                        <p>Pour en savoir plus sur cet atelier, pour un devis ou toute autre demande.
                                            N’hésitez pas à me contacter au 06 62 06 90 23 ou via mon formulaire de
                                            contact.</p>
                                    </div>
                                </div>
                            </adress>

                            <?php comments_template(); ?>
                            <?php comment_form(); ?>

                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>