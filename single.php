<?php get_header(); ?>


    <main class="blog single-blog">
        <section class="row">
            <div class="col-md-7 col-md-offset-1">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <h2 class="titre-post-blog">
                                <?php the_title(); ?>
                            </h2>
                            <p class="postmetadata">
                                <?php the_time('j F Y') ?> par <?php the_author(); ?> | Cat&eacute;gorie :
                                <?php the_category(', '); ?> | <?php comments_popup_link('Pas de commentaires',
                                    '1 Commentaire', '% Commentaires'); ?>
                            </p>

                            <?php if (has_post_thumbnail()): ?>
                                <div class="thumbnail thumbnail-index-blog">
                                    <?php the_post_thumbnail('medium', ['class' => 'thumbnail__pull.left']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="content-single-post">
                                <div id="excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <?php the_content(); ?>

                            <p class="categories">Catégories : <?php the_category(', '); ?></p>

                            <p class="tags"><?php the_tags('Mots-clés : ', ', '); ?></p>
                            </div>
                            <section class="commentaires">
                                <?php comments_template(); ?>
                                <?php comment_form(); ?>
                            </section>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </div>
            <div class="col-md-2 col-md-offset-1" class="sidebar-post-blog">
                <?php get_sidebar(); ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>