<?php
/*
Template Name: Page references
*/
?>

<?php get_header(); ?>

<main>


    <section class="row">
        <div class="col-xs-12">
            <h2>Ils me font confiance</h2>
            <?php get_template_part('loop'); ?>
        </div>
    </section>


    <section class="row">
        <div class="col-md-10 col-md-offset-1">
        <?php $loop = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => 30));
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <?php $mylink = get_post_meta($post->ID, '_tp_meta_url', false);
            if ($mylink) {
                ?>
                <a href="<?php echo $mylink ?>">
                    <article class="page-references col-xs-6 col-sm-3 col-md-3">
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
        </div>
    </section>
</main>

<?php get_footer(); ?>
