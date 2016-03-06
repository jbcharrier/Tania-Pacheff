<?php
/*
Template Name: Page reponsefull
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

$results1 = ceil(($count1 * 100)/$count_total1);



$total2 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '2'", ARRAY_A);
$count_total2 = count($total2);

$responses2 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '2' AND reponse_int = '10'", ARRAY_A);
$count2 = count($responses2);

$results2 = ceil(($count2 * 100)/$count_total2);



$total3 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '3'", ARRAY_A);
$count_total3 = count($total3);

$responses3 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '3' AND reponse_int = '5'", ARRAY_A);
$count3 = count($responses3);

$results3 = ceil(($count3 * 100)/$count_total3);



$total4 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '4'", ARRAY_A);
$count_total4 = count($total4);

$responses4 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '4' AND reponse_int = '9'", ARRAY_A);
$count4 = count($responses4);

$results4 = ceil(($count4 * 100)/$count_total4);



$total5 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '5'", ARRAY_A);
$count_total5 = count($total5);

$responses5 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '5' AND reponse_int = 'non'", ARRAY_A);
$count5 = count($responses5);

$results5 = ceil(($count5 * 100)/$count_total5);


?>



<?php get_header(); ?>

<main id="main-quiz">














    <section class="row cercle-fond0">
        <div id="ecran-commencer" class="col-xs-12">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <p>Découvrez les réponses du Quiz et perfectionnez vos connaissances en nutrition et diététique !</p>
                </div>
            </div>
            <div class="row">
                <div>
                    <button class="btn-start">Voir les réponses</button>
                </div>
            </div>
        </div>
    </section>

        <section class="row cercle-fond">
            <div id="question1" class="col-xs-12">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 question text-center">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h3 class="text-left">Question 1</h3>
                                <p class="text-left">Quelle est la quantité de sel dont l’homme à besoin par jour ?</p>
                                <p class="rep-questions1">2 grammes</p>
                                <h5 class="text-left stat-rep1"><?php echo($results1); ?>%</h5>
                                <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne réponse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q" id="btn-q1">Passer à la réponse suivante</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="row cercle-fond2">
            <div id="question2" class="col-xs-12">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 question2 text-center">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h3 class="text-left">Question 2</h3>
                                <p class="text-left">Quelle est la quantité de sel moyenne consommée par personne, par jour en France ?</p>
                                <p class="rep-questions1">10 grammes</p>
                                <h5 class="text-left stat-rep2"><?php echo($results2); ?>%</h5>
                                <p class="saviez-vous2 text-left">des personnes ayant répondu au quiz ont trouvé la bonne réponse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q2" id="btn-q2">Passer à la réponse suivante</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="row cercle-fond">
            <div id="question3" class="col-xs-12">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 question text-center">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h3 class="text-left">Question 3</h3>
                                <p class="text-left">Quelle est la consommation maximum de sel recommandée par jour ?</p>
                                <p class="rep-questions1">5 grammes</p>
                                <h5 class="text-left stat-rep1"><?php echo($results3); ?>%</h5>
                                <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne réponse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q" id="btn-q3">Passer à la réponse suivante</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="row cercle-fond2">
            <div id="question4" class="col-xs-12">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 question2 text-center">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h3 class="text-left">Question 4</h3>
                                <p class="text-left">Combien de morceaux de sucre sont contenus dans une cannette de 33cl de soda?</p>
                                <p class="rep-questions1">9</p>
                                <h5 class="text-left stat-rep2"><?php echo($results4); ?>%</h5>
                                <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne réponse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q2" id="btn-q4">Passer à la réponse suivante</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="row cercle-fond-der">
            <div id="question5" class="col-xs-12">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 question-der text-center">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h3 class="text-left">Question 5</h3>
                                <p class="text-left">Un jus de raisin de 33cl est-t-il moins sucré qu'un soda ?</p>
                                <p class="rep-questions1">Non</p>
                                <h5 class="text-left stat-rep1"><?php echo($results5); ?>%</h5>
                                <p class="saviez-vous text-left">des personnes ayant répondu au quiz ont trouvé la bonne réponse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <a href="<?php echo bloginfo('url') . '/?page_id=71' ?>"><button class="btn-qder" id="btn-q5">Eco-engagement</button></a>
                    </div>
                </div>
            </div>
        </section>

    </form>
</main>

<?php get_footer(); ?>

