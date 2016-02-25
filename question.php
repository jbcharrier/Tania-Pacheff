<?php
/*
Template Name: Page question
*/
?>

<?php get_header(); ?>



<main>

    <form method="post" action="http://localhost/tania_pacheff/?page_id=66">

        <section class="row">
            <div class="col-xs-12">
                <h2>Question n°1</h2>
                <p>Le réchauffement climatique s'accentue ?</p>
                <input type="radio" name="question1" id="question1_oui" value="oui"> <label
                    for="question1_oui">Oui</label>
                <input type="radio" name="question1" id="question1_non" value="non"> <label
                    for="question1_non">Non</label>
            </div>
        </section>

        <section class="row">
            <div class="col-xs-12">
                <h2>Question n°2</h2>
                <p>Quel est le fruit ayant le plus de vitamine C ?</p>
                <input id="fruit1" type="radio" name="question2" value="kiwi"> <label
                    for="fruit1">Kiwi</label>
                <input id="fruit2" type="radio" name="question2" value="pomme"> <label for="fruit2">Pomme</label>
                <input id="fruit3" type="radio" name="question2" value="tomate"> <label
                    for="fruit3">Tomate</label>
                <input id="fruit4" type="radio" name="question2" value="cerise"> <label
                    for="fruit4">Cerise</label>
            </div>
        </section>

        <section class="row">
            <div class="col-xs-12">
                <h2>Question n°3</h2>
                <label for="question3">Quel est le pourcentage d'émission de gaz à effet de serre de la Chine sur le
                    total des émission ?(à plus ou moins 5 points)</label>
                <input type="text" id="question3" name="emission" placeholder="Entrez un chiffre à un ou deux chiffres...">
            </div>
        </section>

        <input type="submit" value="Valider" name="reponse-question">
    </form>

</main>

<?php get_footer(); ?>

