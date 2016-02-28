<?php
/*
Template Name: Page Front-Page
*/
?>

<?php get_header(); ?>

<main>
    <section class="row" id="slider">
        <?php echo do_shortcode('[cycloneslider id="test"]'); ?>

        <nav id="nav-lat">
            <ul class="no-marg no-padd">
                <li><a href="#">Tutoriels</a></li>
                <li><a href="#">Mes bonnes adresses</a></li>
            </ul>
        </nav>

        <aside id="reseaux">
            <ul class="no-marg no-padd">
                <li class="text-center"><a href="#"><div><i class="fa fa-linkedin"></i></div></a></li>
                <li class="text-center"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="text-center"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="text-center"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </aside>

        <address>
                <p class="no-marg">Tania Pacheff</p>
                <p class="no-marg"><span>Consultante <br> diététicienne <br> nutritionniste</span></p>
                <p class="no-marg">06 62 06 90 23</p>
        </address>
    </section>

    <!--    Témoignages-->

    <section id="temoignages">
        <div class="row no-padd no-marg">
            <div class="col-md-11 col-md-offset-1">
                <h2 class="titre-section">Témoignages</h2>
            </div>
        </div>
        <div class="row no-padd no-marg">
            <div class="col-md-1 arrow text-center">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="col-md-10">
                <div class="row no-padd">
                    <article class="col-md-3 temoin">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/tony.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                                <div class="back">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/texte-tony.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4>Tony Darré</h4>
                            <p>Chef d'équipe dans le bâtiment</p>
                        </div>
                    </article>
                    <article class="col-md-3 temoin">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/aline.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                                <div class="back">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/texte-tony.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4>Aline Berthier</h4>
                            <p>Responsable RH</p>
                        </div>
                    </article>
                    <article class="col-md-3 temoin">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/laurent.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                                <div class="back">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/texte-tony.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4>Laurent Valot</h4>
                            <p>Manager R&D</p>
                        </div>
                    </article>
                    <article class="col-md-3 temoin">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/beatrice.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                                <div class="back">
                                    <img
                                        src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/texte-tony.png"
                                        alt="test rotation" class="img-circle">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4>Béatrice Monsard</h4>
                            <p>Responsable Animation</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-1 text-center arrow">
                <i class="fa fa-angle-right"></i>
            </div>
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

    <section class="row" id="adresses-partenaires">
        <section class="col-md-6 col-md-offset-1" id="bonnes-adresses">
            <h2 class="titre-section">Mes bonnes adresses</h2>
            <article>
                <?php $bonne_addresse = get_post(203, ARRAY_A); ?>
                <p id="img-bonne-adresse">
                    <?php echo get_the_post_thumbnail(203); ?>
                </p>
                <h3>
                    <?php echo $bonne_addresse['post_title']; ?>
                </h3>
                <p>
                    <?php echo $bonne_addresse['post_content']; ?>
                </p>
                <p><img src="<?php echo get_template_directory_uri() . "/assets/img/filet.png" ?>" alt="Filet"></p>
                <?php $address = get_post_meta(203, '_tp_meta_address', true); ?>
                <p id="adresse1">
                    <?php echo $address['address1']; ?>
                </p>
                <p id="adresse2">
                    <?php echo $address['address2']; ?>
                </p>
            </article>
        </section>

        <!-- partenaires -->

        <section class="col-md-4 no-padd" id="partenaires">
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
