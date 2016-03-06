<?php
/*
Template Name: Page blog
*/
?>

<?php get_header(); ?>

    <!--section top-->
    <section class="row" id="index-blog-top">
        <div class="col-md-8 col-md-offset-1">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="index-blog-text" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <!--Section main-->
    <main class="blog">
        <section class="row" id="index-blog-main">
            <div class="col-md-7 col-md-offset-1">
                <?php $my_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5));
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <article class="post-index">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="thumbnail thumbnail-index-blog">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="titre-post-blog">
                                <?php the_title(); ?>
                            </h2>
                        </a>
                        <p class="postmetadata">
                            <?php the_time('j F Y') ?> par <?php the_author(); ?> | Cat&eacute;gorie :
                            <?php the_category(', '); ?> | <?php comments_popup_link('Pas de commentaires',
                                '1 Commentaire', '% Commentaires'); ?>
                        </p>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </article>
                <?php endwhile; ?>
                <?php else : ?>
                    <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
                    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="col-md-2 col-md-offset-1" id="sidebar-index-blog">
                <?php get_sidebar(); ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>