<?php
/*
Template Name: Page Front-Page
*/
?>

<?php get_header(); ?>

    <main>
        <!--Slider-->
        <section class="row" id="slider">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/visuel-home1.png' ?>"
                 class="img-responsive">
            <nav id="nav-lat">
                <ul class="no-marg no-padd">
                    <li><a href="#">Tutoriels</a></li>
                    <li><a href="<?php echo site_url() . '/?page_id=234' ?>">Mes bonnes adresses</a></li>
                </ul>
            </nav>

            <aside class="reseaux" id="reseaux">
                <ul class="no-marg no-padd">
                    <li class="text-center"><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
            <p class="citation">L'alimentation éco-engagée, un levier de performance</p>
            <div class="arrow-down text-center">
                <i class="fa fa-angle-down"></i>
            </div>
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
                                            src="<?php echo get_template_directory_uri() . '/assets/img/tony.png' ?>"
                                            alt="test rotation" class="img-circle">
                                    </div>
                                    <div class="back">
                                        <img
                                            src="<?php echo get_template_directory_uri() . '/assets/img/texte-tony.png' ?>"
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
                                            src="<?php echo get_template_directory_uri() . '/assets/img/aline.png' ?>"
                                            alt="test rotation" class="img-circle">
                                    </div>
                                    <div class="back">
                                        <img
                                            src="<?php echo get_template_directory_uri() . '/assets/img/texte-tony.png' ?>"
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
                                            src="<?php echo get_template_directory_uri() . '/assets/img/laurent.png' ?>"
                                            alt="test rotation" class="img-circle">
                                    </div>
                                    <div class="back">
                                        <img
                                            src="<?php echo get_template_directory_uri() . '/assets/img/texte-tony.png' ?>"
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
                                            src="<?php echo get_template_directory_uri() . '/assets/img/beatrice.png' ?>"
                                            alt="test rotation" class="img-circle">
                                    </div>
                                    <div class="back">
                                        <img
                                            src="<?php echo get_template_directory_uri() . '/assets/img/texte-tony.png' ?>"
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
                if ($loop->have_posts()) {
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
                    <?php
                } ?>
            </div>
        </section>


<!--    Mes bonnes adresses & partenaires -->
        <section class="row" id="adresses-partenaires">
            <section class="col-md-6 col-md-offset-1" id="bonnes-adresses">
                <h2 class="titre-section">Mes bonnes adresses</h2>
                <article>
                    <?php $bonne_addresse = get_post(203, ARRAY_A); ?>
                    <div id="img-bonne-adresse">
                        <?php echo get_the_post_thumbnail(203); ?>
                    </div>
                    <h3>
                        <?php echo $bonne_addresse['post_title']; ?>
                    </h3>
                    <p>
                        <?php echo $bonne_addresse['post_content']; ?>
                    </p>
                    <p id="filet"><img src="<?php echo get_template_directory_uri() . "/assets/img/filet.png" ?>"
                                       alt="Filet"></p>
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
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/slowfood.png' ?>"
                                 alt="Logo Slowfood" class="img-responsive">
                        </a>
                    </article>
                    <article class="col-md-5 partenaires">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/cielmonradis.png' ?>"
                                 alt="Logo Ciel, Mon Radis !" class="img-responsive">
                        </a>
                    </article>
                    <article class="col-md-5 col-md-offset-1 partenaires">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/mygoodcoach.png' ?>"
                                 alt="Logo mygoodcoach.com" class="img-responsive">
                        </a>
                    </article>
                    <article class="col-md-5 partenaires">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/izineo.png' ?>"
                                 alt="Logo Izineo" class="img-responsive">
                        </a>
                    </article>
                </div>
            </section>
        </section>

<!--        Instagram - Blog-->
        <section id="insta-blog">
            <div class=row>
                <aside class="col-sm-5 col-sm-offset-1" id="instagram">
                    <h2 class="titre-section">Instagram</h2>
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/instagram.png' ?>"
                             alt="Widget Instagram" class="img-responsive">
                    </div>
                </aside>
                <section class="col-sm-5">
                    <h2 class="titre-section" id="blog">Blog</h2>
                    <?php
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=2');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                        <article class="photo-blog col-sm-5 no-padd ">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            } ?>
                            <div class="txt-blog">
                                <h5><?php the_title(); ?></h5>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink() ?>">
                                    <div class="text-center">
                                        <p id="suite">Lire la suite <span><i class="fa fa-play"></i></span></p>
                                    </div>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </section>
            </div>
        </section>
    </main>

<?php get_footer(); ?>