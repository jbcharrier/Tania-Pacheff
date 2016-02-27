<?php
/*
Template Name: Page Front-Page
*/
?>

<?php get_header(); ?>

<main>
    <section class="row">

        <?php echo do_shortcode('[cycloneslider id="test"]'); ?>

        <contact class="row">
            <div class="col-xs-4 center">
                <p>Tania Pacheff</p>
                <p>Consultante diététicienne nutritionniste</p>
                <p>06.62.06.90.23</p>
            </div>
        </contact>
    </section>
    <section class="row" id="temoignages">
        <div>
            <h2>Témoignages</h2>
            <article>
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img
                                src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/chat.png"
                                alt="test rotation" class="img-circle">
                        </div>
                        <div class="back">
                            <img
                                src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/home-page-3.png"
                                alt="test rotation" class="img-circle">
                        </div>
                    </div>
                </div>
            </article>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                Lire son témoignage
            </button>
        </div>
    </section>

    <!--    Ils me font confiance-->
    <section class="row" id="section-ref">
        <div class="col-md-10 col-md-offset-1 no-padd">
            <h2 class="titre-section">Ils me font confiance</h2>
            <?php $loop = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => 12));
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php $mylink = get_post_meta($post->ID, '_tp_meta_url', false);
                if ($mylink) {
                    ?>
                    <a href="<?php echo $mylink ?>">
                        <article class="page-references col-xs-6 col-sm-3 col-md-3">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="thumbnail grayscale">
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


    <!--    Mes bonnes adresses & partenaires -->

    <section class="row" id="bonnes-adresses">
        <div class="col-md-6 col-md-offset-1">
            <h2 class="titre-section">Mes bonnes adresses</h2>
        </div>
        <section class="col-md-4 no-padd">
            <h2 class="titre-section">Partenaires</h2>
            <div class="row">
                <article class="col-md-5 col-md-offset-1 partenaires">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/slowfood.png' ?>"
                             alt="Logo Slowfood">
                    </a>
                </article>
                <article class="col-md-5 partenaires">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/cielmonradis.png' ?>"
                             alt="Logo Ciel, Mon Radis !">
                    </a>
                </article>
                <article class="col-md-5 col-md-offset-1 partenaires">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/mygoodcoach.png' ?>"
                             alt="Logo mygoodcoach.com">
                    </a>
                </article>
                <article class="col-md-5 partenaires">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/izineo.png' ?>"
                             alt="Logo Izineo">
                    </a>
                </article>
            </div>
        </section>
    </section>

    <section class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <h2>Instagram</h2>
        </div>
        <div class="col-sm-5">
            <h2>Blog</h2>
        </div>
    </section>
</main>

<?php get_footer(); ?>


<!--        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--            <div class="modal-dialog" role="document">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
<!--                                aria-hidden="true">&times;</span></button>-->
<!--                        <h4 class="modal-title" id="myModalLabel">Titre du témoignage</h4>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non magna et libero semper-->
<!--                            lobortis. Aliquam finibus quam a molestie volutpat. Nullam ac nisi leo. Nam fermentum libero-->
<!--                            at massa dapibus, eget gravida nibh mattis. Aenean sapien purus, viverra vel rhoncus sit-->
<!--                            amet, viverra at felis. Quisque semper mauris diam, eu dignissim sapien aliquam eget. Nullam-->
<!--                            finibus pellentesque aliquet. Maecenas non lorem sed orci tincidunt dignissim. Class aptent-->
<!--                            taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.-->
<!--                            Etiam arcu purus, congue sit amet congue sed, tristique vitae magna. Aliquam erat volutpat.-->
<!--                            Vivamus non massa condimentum, efficitur arcu eu, vestibulum metus. Sed lacinia in nibh at-->
<!--                            viverra. Nunc blandit porta justo, non aliquam libero tincidunt et. Maecenas vulputate eros-->
<!--                            eget ligula hendrerit, et dapibus neque euismod. Nulla vitae aliquam neque. Integer sed nisl-->
<!--                            mauris. Phasellus eget sapien ullamcorper nibh porttitor convallis vel quis magna. Sed a-->
<!--                            nisi in purus pretium fringilla ac nec sapien. In justo enim, dictum et metus eu, varius-->
<!--                            venenatis mauris. Etiam et neque eget nibh lobortis commodo at eget lorem.</p>-->
<!--                    </div>-->
<!--                    <div class="modal-footer">-->
<!--                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
