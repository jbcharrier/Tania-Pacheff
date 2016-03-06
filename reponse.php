<?php
/*
Template Name: Page reponse
*/
?>


<?php

$total1 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '1'", ARRAY_A);
$count_total1 = count($total1);

$responses1 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '1' AND reponse_int = '2'", ARRAY_A);
$count1 = count($responses1);

$results1 = ceil(($count1 * 100) / $count_total1);


$total2 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '2'", ARRAY_A);
$count_total2 = count($total2);

$responses2 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '2' AND reponse_int = '10'", ARRAY_A);
$count2 = count($responses2);

$results2 = ceil(($count2 * 100) / $count_total2);


$total3 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '3'", ARRAY_A);
$count_total3 = count($total3);

$responses3 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '3' AND reponse_int = '5'", ARRAY_A);
$count3 = count($responses3);

$results3 = ceil(($count3 * 100) / $count_total3);


$total4 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '4'", ARRAY_A);
$count_total4 = count($total4);

$responses4 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '4' AND reponse_int = '9'", ARRAY_A);
$count4 = count($responses4);

$results4 = ceil(($count4 * 100) / $count_total4);


$total5 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '5'", ARRAY_A);
$count_total5 = count($total5);

$responses5 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '5' AND reponse_int = 'non'", ARRAY_A);
$count5 = count($responses5);

$results5 = ceil(($count5 * 100) / $count_total5);


?>

<?php get_template_part('headerreponsequiz'); ?>

    <section class="row text-center" id="score">
        <div class="col-md-8 col-md-offset-2">
            <h2>Découvrez les réponses du Quiz et <br> perfectionnez vos connaissances en nutrition et diététique
            </h2>
        </div>
    </section>

    <main id="main-quiz-rep">
        <section class="row quest-rep">
            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-11 col-md-offset-1 reponse">
                    <h3 class="text-left">Question 1</h3>
                    <p class="text-left">Quelle est la quantité de sel dont l’homme a besoin par jour ?</p>
                    <p class="rep-questions1 text-center"><i class="fa fa-check"></i> 2 grammes</p>
                    <h5 class="text-left stat-rep1"><?php echo($results1); ?>%</h5>
                    <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne
                        réponse.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-11 rep-saviez">
                    <h3 class="text-left">Le saviez-vous ?</h3>
                    <p class="text-left saviez-vous">Le sodium est un minéral qui joue un rôle important dans l’état
                        d’hydratation de l’organisme.
                        Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                        dans la transmission des influx nerveux ainsi que la contraction musculaire.
                    </p>
                </div>
            </div>
        </section>

        <section class="row quest-rep">
            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-11 col-md-offset-1 reponse">
                    <h3 class="text-left">Question 2</h3>
                    <p class="text-left">Quelle est la quantité de sel moyenne consommée par personne, par jour en
                        France ?
                    </p>
                    <p class="rep-questions1 text-center"><i class="fa fa-check"></i> 10 grammes</p>
                    <h5 class="text-left stat-rep1"><?php echo($results2); ?>%</h5>
                    <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne
                        réponse.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-11 rep-saviez">
                    <h3 class="text-left">Le saviez-vous ?</h3>
                    <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important dans l’état
                        d’hydratation de l’organisme.
                        Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                        dans la transmission des influx nerveux ainsi que la contraction musculaire.
                    </p>
                </div>
            </div>
        </section>

        <section class="row quest-rep">
            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-11 col-md-offset-1 reponse">
                    <h3 class="text-left">Question 3</h3>
                    <p class="text-left">Quelle est la consommation maximum de sel recommandée par jour ?</p>
                    <p class="rep-questions1 text-center"><i class="fa fa-check"></i> 5 grammes</p>
                    <h5 class="text-left stat-rep1"><?php echo($results3); ?>%</h5>
                    <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne
                        réponse.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-11 rep-saviez">
                    <h3 class="text-left">Le saviez-vous ?</h3>
                    <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important dans l’état
                        d’hydratation de l’organisme.
                        Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                        dans la transmission des influx nerveux ainsi que la contraction musculaire.
                    </p>
                </div>
            </div>
        </section>

        <section class="row quest-rep">
            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-11 col-md-offset-1 reponse">
                    <h3 class="text-left">Question 4</h3>
                    <p class="text-left">Combien de morceaux de sucre sont contenus dans une cannette de 33cl de soda
                        ?</p>
                    <p class="rep-questions1 text-center"><i class="fa fa-check"></i> 9</p>
                    <h5 class="text-left stat-rep1"><?php echo($results4); ?>%</h5>
                    <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne
                        réponse.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-11 rep-saviez">
                    <h3 class="text-left">Le saviez-vous ?</h3>
                    <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important dans l’état
                        d’hydratation de l’organisme.
                        Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                        dans la transmission des influx nerveux ainsi que la contraction musculaire.
                    </p>
                </div>
            </div>
        </section>

        <section class="row quest-rep">
            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-11 col-md-offset-1 reponse">
                    <h3 class="text-left">Question 5</h3>
                    <p class="text-left">Un jus de raisin de 33cl est-t-il moins sucré qu'un soda ?</p>
                    <p class="rep-questions1 text-center"><i class="fa fa-check"></i> Non</p>
                    <h5 class="text-left stat-rep1"><?php echo($results5); ?>%</h5>
                    <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne
                        réponse.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-11 rep-saviez">
                    <h3 class="text-left">Le saviez-vous ?</h3>
                    <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important dans l’état
                        d’hydratation de l’organisme.
                        Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                        dans la transmission des influx nerveux ainsi que la contraction musculaire.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <section class="row text-center button-partage">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="partage-quiz">
                <p>Ce Quiz vous a plu ? Partagez-le sur <i class="fa fa-facebook" id="facebook1"></i> et <a href="https://twitter.com/intent/tweet?text=Testez vos connaissances en diététique avec le quiz de Tania Pacheff&hashtags=dietetique,santé&url=http://localhost/tania_pacheff/?page_id=64" target="_blank">
                        <i class="fa fa-twitter"></i></a></p>
            </div>
        </div>
        </section>

    <section class="row text-center button-engagement">
        <div class="col-sm-4 col-sm-offset-4">
            <p>Experte en diététique et nutrition, découvrez également mon</p>
            <div class="score-button">
                <a href="<?php echo bloginfo('url') . '/?page_id=71' ?>">
                    <p>Eco-engagement</p>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>