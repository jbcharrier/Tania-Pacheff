<?php
/*
Template Name: Page question
*/
?>

<?php get_header(); ?>

<main id="main-quiz">

    <section class="row cercle-fond0">
        <div id="ecran-commencer" class="col-xs-12">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 text-center">
                    <p>Bienvenue sur mon Quiz Nutritionnel :
                        Testez vos connaissances en diététique
                        et débusquez les idées reçues !
                    </p>
                </div>
            </div>
            <div class="row">
                <div>
                    <button class="btn-start">Commencer le Quiz</button>
                </div>
            </div>
        </div>
    </section>

    <form method="post" action="<?php echo bloginfo('url') . '/?page_id=66' ?>">

        <section class="row cercle-fond">
            <div id="question1" class="col-xs-12">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 question text-center">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h3 class="text-left">Question 1</h3>
                                <p class="text-left">Quelle est la quantité de sel dont l’homme à besoin par jour ?</p>
                                <input type="radio" name="question1" id="question1_0" value="0" required> <label
                                    for="question1_0">0gr</label>
                                <input type="radio" name="question1" id="question1_2" value="2" required> <label
                                    for="question1_2">2gr</label>
                                <input type="radio" name="question1" id="question1_10" value="10" required> <label
                                    for="question1_10">10gr</label>
                                <h5 class="text-left">Le saviez-vous ?</h5>
                                <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important
                                    dans l’état
                                    d’hydratation de l’organisme.
                                    Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                                    dans la transmission des influx nerveux ainsi que la contraction musculaire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q" id="btn-q1">Passer à la question suivante</button>
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
                                <input type="radio" name="question2" id="question2_6" value="6" required> <label
                                    for="question2_6">6gr</label>
                                <input type="radio" name="question2" id="question2_10" value="10" required> <label
                                    for="question2_10">10gr</label>
                                <input type="radio" name="question2" id="question2_15" value="15" required> <label
                                    for="question2_15">15gr</label>
                                <h5 class="text-left">Le saviez-vous ?</h5>
                                <p class="saviez-vous2 text-left">Le sodium est un minéral qui joue un rôle important
                                    dans l’état d’hydratation de l’organisme.
                                    Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                                    dans la transmission des influx nerveux ainsi que la contraction musculaire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q2" id="btn-q2">Passer à la question suivante</button>
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
                                <input type="radio" name="question3" id="question3_2" value="2" required> <label
                                    for="question3_2">0gr</label>
                                <input type="radio" name="question3" id="question3_5" value="5" required> <label
                                    for="question3_5">2gr</label>
                                <input type="radio" name="question3" id="question3_10" value="10" required> <label
                                    for="question3_10">10gr</label>
                                <h5 class="text-left">Le saviez-vous ?</h5>
                                <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important
                                    dans l’état d’hydratation de l’organisme.
                                    Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                                    dans la transmission des influx nerveux ainsi que la contraction musculaire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q" id="btn-q3">Passer à la question suivante</button>
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
                                <input type="radio" name="question4" id="question4_5" value="5" required> <label
                                    for="question4_5">5gr</label>
                                <input type="radio" name="question4" id="question4_7" value="7" required> <label
                                    for="question4_7">7gr</label>
                                <input type="radio" name="question4" id="question4_9" value="9" required> <label
                                    for="question4_9">9gr</label>
                                <h5 class="text-left">Le saviez-vous ?</h5>
                                <p class="saviez-vous2 text-left">Le sodium est un minéral qui joue un rôle important
                                    dans l’état d’hydrataton de l’organisme.
                                    Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                                    dans la transmission des influx nerveux ainsi que la contraction musculaire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <button class="btn-q2" id="btn-q4">Passer à la question suivante</button>
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
                                <input type="radio" name="question5" id="question5_oui" value="oui" required> <label
                                    for="question5_oui">Oui</label>
                                <input type="radio" name="question5" id="question5_non" value="non" required> <label
                                    for="question5_non">Non</label>
                                <h5 class="text-left">Le saviez-vous ?</h5>
                                <p class="saviez-vous text-left">Le sodium est un minéral qui joue un rôle important
                                    dans l’état d’hydratation de l’organisme.
                                    Le sodium aide également à maintenir l’équilibre acido-basique et est essentiel
                                    dans la transmission des influx nerveux ainsi que la contraction musculaire.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <input class="btn-qder" id="btn-q5 "type="submit" value="Voir mon score" name="input-score">
                    </div>
                </div>
            </div>
        </section>

    </form>
</main>

<?php get_footer(); ?>

