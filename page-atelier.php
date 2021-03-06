<?php
/*
Template Name: Page atelier
*/
?>


<?php get_header(); ?>

    <section class="row" id="prestations-top">
        <div class="col-xs-9 col-xs-offset-2">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
                        <div id="nav-cat">
                <?php
                $param_menu = [
                    'theme_location' => 'secondary',
                    'container' => 'nav',
                    'container_class' => 'nav-category'
                ];
                wp_nav_menu($param_menu); ?>
            </div>
        </div>
        <div class="col-xs-1">
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

    <main id="main-presta">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <section class="row">
                    <?php $loop = new WP_Query(array('post_type' => 'atelier', 'posts_per_page' => 16));
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <article class="col-xs-3 mosaique-prestas">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="thumbnail-presta">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                <?php endif; ?>
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                            </a>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </section>
            </div>
        </div>
    </main>

<?php get_footer(); ?>