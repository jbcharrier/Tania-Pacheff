<?php
/*
Template Name: Page question
*/
?>

<?php get_header(); ?>

<section id="presentation">
    <div class="row">
        <div>
            <h2>TITRE : Quizz nutritionnel</h2>
            <p>PRESENTATION : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur condimentum massa sit
                amet
                felis varius egestas quis id sem. Suspendisse hendrerit purus non purus condimentum facilisis. Curabitur
                placerat ut ipsum vitae consequat. Cum sociis natoque penatibus et magnis dis parturient montes,
                nascetur
                ridiculus mus. Pellentesque sit amet commodo purus. Nam ut accumsan ipsum. Donec auctor vehicula eros,
                id
                placerat velit tincidunt quis. Fusce consequat tortor vitae odio euismod auctor. Nullam lobortis lectus
                sit amet
                mi tempus, vel maximus metus rutrum. Phasellus porttitor egestas ipsum vel pellentesque. Vestibulum
                ultrices
                vitae nibh at mattis. Suspendisse in mi eget elit tempor congue vel quis nisi. Maecenas pharetra
                pharetra
                sodales.</p>
            <button id="btn-start">Commencer le quizz</button>
        </div>
    </div>
</section>

<main>
    <form method="post" action="http://localhost/tania_pacheff/?page_id=66">

        <section id="question1">
            <div class="row">
              <div class="col-xs-12">
                <h3>Question n°1</h3>
                <p>Le réchauffement climatique s'accentue ?</p>
                <input type="radio" name="question1" id="question1_oui" value="oui"> <label
                    for="question1_oui">Oui</label>
                <input type="radio" name="question1" id="question1_non" value="non"> <label
                    for="question1_non">Non</label>
                  <button id="btn-q1">Passer à la 2e question</button>
              </div>
            </div>
        </section>


        <section id="question2">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Question n°2</h3>
                    <p>Quel est le fruit ayant le plus de vitamine C ?</p>
                    <input id="fruit1" type="radio" name="question2" value="kiwi"> <label
                        for="fruit1">Kiwi</label>
                    <input id="fruit2" type="radio" name="question2" value="pomme"> <label for="fruit2">Pomme</label>
                    <input id="fruit3" type="radio" name="question2" value="tomate"> <label
                        for="fruit3">Tomate</label>
                    <input id="fruit4" type="radio" name="question2" value="cerise"> <label
                        for="fruit4">Cerise</label>
                    <button id="btn-q2">Passer à la 3e question</button>
                </div>
            </div>
        </section>



        <section id="question3">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Question n°3</h3>
                    <label for="question3">Quel est le pourcentage d'émission de gaz à effet de serre de la Chine sur le
                        total des émission ?(à plus ou moins 5 points)</label>
                    <input type="text" id="question3" name="question3"
                           placeholder="Entrez un chiffre à un ou deux chiffres...">
                    <button id="btn-q3">Passer à la 4e question</button>
                </div>
            </div>
        </section>



        <section id="question4">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Question n°4</h3>
                    <p>Le réchauffement climatique s'accentue ?</p>
                    <input type="radio" name="question4" id="question4_oui" value="oui"> <label
                        for="question1_oui">Oui</label>
                    <input type="radio" name="question4" id="question4_non" value="non"> <label
                        for="question4_non">Non</label>
                    <button id="btn-q4">Passer à la dernière question du quizz</button>
                </div>
            </div>
        </section>



        <section id="question5">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Question n°5</h3>
                    <p>Le réchauffement climatique s'accentue ?</p>
                    <input type="radio" name="question5" id="question5_oui" value="oui"> <label
                        for="question5_oui">Oui</label>
                    <input type="radio" name="question5" id="question5_non" value="non"> <label
                        for="question5_non">Non</label>
                </div>
            </div>
        </section>

        <input type="submit" value="Valider et découvrez votre score" name="input-score">
    </form>

</main>

<?php get_footer(); ?>

