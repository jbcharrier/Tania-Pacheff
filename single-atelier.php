<?php get_header(); ?>
    <main id="single-atelier" class="no-padd no-marg">
        <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <div class="text-prestations">
                                <?php the_content(); ?>
                            </div>
                            <adress>
                                <div class="row contact-prestation">
                                    <div class="col-md-6 col-md-offset-3 text-center">
                                        <p>Pour en savoir plus sur cet atelier, pour un devis ou toute autre demande.
                                            N’hésitez pas à me contacter au <span>06 62 06 90 23</span> ou via mon <a class="lien-formulaire-bottom" href="http://localhost/tania_pacheff/?page_id=242">formulaire de
                                                contact.</a></p>
                                    </div>
                                </div>
                            </adress>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </main>
        </div>
    </main>
<?php get_footer(); ?>