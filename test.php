<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="atelier col-xs-12 col-sm-6 col-md-3">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                    <div class="thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                <?php endif; ?>
                <h2>
                    <?php the_title(); ?>
                </h2>
            </a>
            <p>
                <?php the_excerpt(); ?>
            </p>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <h2 class="center">Aucun atelier. Vous pouvez essayer une nouvelle recherche</h2>
    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>


<?php $my_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 12));
if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <article class="post">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
                <div class="thumbnail">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
            <?php endif; ?>
            <h2>
                <?php the_title(); ?>
            </h2>
        </a>
        <p>
            <?php the_content(); ?>
        </p>
    </article>
<?php endwhile; ?>
<?php else : ?>
    <h2 class="center">Aucun atelier. Vous pouvez essayer une nouvelle recherche</h2>
    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>