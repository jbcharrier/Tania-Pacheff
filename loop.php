<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php endwhile; ?>
<?php else : ?>
    <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>