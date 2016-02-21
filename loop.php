<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <p class="postmetadata">
            <?php the_time('j F Y') ?> par <?php the_author(); ?> | Cat&eacute;gorie :
            <?php the_category(', '); ?> | <?php comments_popup_link('Pas de commentaires',
            '1 Commentaire', '% Commentaires'); ?>
        </p>

        <?php if (has_post_thumbnail()): ?>
            <div class="thumbnail">
                <?php the_post_thumbnail('thumbnail', ['class' => 'thumbnail__pull.left']); ?>
            </div>
        <?php endif; ?>

        <?php the_content(); ?>

        <p class="categories"><?php the_category(', '); ?></p>

        <p class="tags"><?php the_tags('Mots-clés : ', ', '); ?></p>

            <?php comments_template(); ?>
            <?php comment_form(); ?>

        </article>
    <?php endwhile; ?>
<?php else : ?>
    <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
    <?php include(TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>

<p>Test loop</p>
