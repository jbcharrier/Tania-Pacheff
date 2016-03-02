<?php
/*
Template Name: Page eco-engage
*/
?>

<?php get_header(); ?>

    <main>
<!--Section Top-->
        <section class="row" id="eco-engage-top">
                <div class="col-md-4 col-md-offset-1 text-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/photo-tania-eco.jpg' ?>"
                         alt="Photo Tania Pacheff" class="img-circle">
                </div>
                <div class="col-md-6">
                    <blockquote>
                        <p class="blockquote">" Parce qu'une bonne alimentation n'est rien sans une nourriture de qualité,
                            je défends une nutrition &laquo;&nbsp;éco&nbsp;-&nbsp;engagée&nbsp;&raquo;. "</p>
                    </blockquote>
                </div>
                <div class="col-md-1">
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

<!--Section middle-->
        <section id="eco-engage-middle">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <h4>Mes engagements</h4>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/img-eco-1.jpg' ?>"
                         alt="Photo arbre dans une bulle" class="img-responsive">
                    <div class="col-md-6 no-padd">
                        <ul class="no-padd"">
                            <li>- sélectionner uniquement des produits de qualité respectueux de l’environnement</li>
                            <li>- privilégier les circuits courts</li>
                            <li>- engager des démarches de certification etc.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <h4 id="h4-orange">Mes convictions</h4>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/img-eco-2.jpg' ?>"
                         alt="Photo terre dans des mains" class="img-responsive">
                    <div class="col-md-10 no-padd">
                    <p>A l’heure où le désir de mieux manger s’accentue, il est important de
                        s’interroger sur les modes de production agricoles et de mesurer leur
                        impact sur notre environnement…</p>
                </div>
                </div>
            </div>
        </section>

<!--Section bottom-->
        <section id="eco-engage-bottom">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <blockquote class="text-center">
                        <p class="blockquote">
                            <a href="<?php bloginfo('url').'/?page_id=16'?>" class="no-style">Découvrez mes prestations</a> et relevons ensemble
                            les nouveaux défis de l’alimentation moderne !
                        </p>
                    </blockquote>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>