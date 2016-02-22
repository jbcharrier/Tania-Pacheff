<?php
/*
Template Name: Page atelier
*/
?>


<?php get_header(); ?>
    <main>
        <section class="row">
            <div class="col-xs-12">
                <h2>Descritpion</h2>
                <?php get_template_part('loop'); ?>
            </div>
        </section>
        <section class="row">
            <?php $loop = new WP_Query(array('post_type' => 'atelier', 'posts_per_page' => 12));
            while ($loop->have_posts()) : $loop->the_post(); ?>
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
        </section>
        <section class="row">
            <p>consectetur adipiscing elit. Sed vehicula tincidunt efficitur. Maecenas
                pulvinar mauris neque, nec efficitur velit interdum sit amet. Mauris a sapien at dolor malesuada
                lacinia sed vitae felis. Phasellus commodo a ante id euismod. Donec egestas lorem sit amet imperdiet
                tincidunt. Quisque ultricies magna sit amet lorem fringilla tristique. Suspendisse potenti.
                Phasellus faucibus luctus nibh eu finibus. Vestibulum sagittis, sapien quis faucibus fermentum, enim
                purus egestas nibh, id rhoncus erat libero sit amet arcu. Donec ornare sollicitudin ex ut
                tempor.</p>
        </section>
        <aside class="row">
            <a href="#">
                <button class="btn">contactez-moi</button>
            </a>
        </aside>
    </main>

<?php get_footer(); ?>