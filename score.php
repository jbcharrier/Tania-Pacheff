<?php
/*
Template Name: Page score
*/
?>

<?php get_header(); ?>


<?php

/**** mise en base des résultats *****/

$sol1 = "2";
$sol2 = "10";
$sol3 = "5";
$sol4 = "9";
$sol5 = "non";

$rep1 = $_POST['question1'];
$wpdb->insert('tp_quiz', array(
    'num_question' => '1',
    'reponse_int' => $rep1,
    'reponse_quiz' => $sol1),
    array('%d', '%s', '%s'));

$rep2 = htmlentities($_POST['question2']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '2',
    'reponse_int' => $rep2,
    'reponse_quiz' => $sol2),
    array('%d', '%s', '%s'));

$rep3 = htmlentities($_POST['question3']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '3',
    'reponse_int' => $rep3,
    'reponse_quiz' => $sol3),
    array('%d', '%s', '%s'));


$rep4 = htmlentities($_POST['question4']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '4',
    'reponse_int' => $rep4,
    'reponse_quiz' => $sol4),
    array('%d', '%s', '%s'));

$rep5 = htmlentities($_POST['question5']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '5',
    'reponse_int' => $rep5,
    'reponse_quiz' => $sol5),
    array('%d', '%s', '%s'));

$score = 0;

($rep1 === $sol1) ? $score++ : $score;
($rep2 === $sol2) ? $score++ : $score;
($rep3 === $sol3) ? $score++ : $score;
($rep4 === $sol4) ? $score++ : $score;
($rep5 === $sol5) ? $score++ : $score;

?>
    <main>
        <section class="row text-center" id="score">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Merci d'avoir participé à mon quiz nutritionnel.</h2>
                <h3>Votre score est de <?php echo($score); ?> sur 5 !</h3>
            </div>
        </section>
        <section class="row text-center" id="score-comment">
            <div class="col-sm-6 col-sm-offset-3">
                <?php if ($score === 5 || $score === 4) {
                    echo "Bravo, vous savez déjà presque tout. Apprenez-en encore plus !";
                } else if ($score === 3 || $score === 2) {
                    echo "Bravo ! Vous avez su déjouer certains pièges de la diététique. Apprenez-en plus !";
                } else {
                    echo "Il semblerait que vous ayez encore des choses à découvrir sur la diététique !";
                } ?>
            </div>
        </section>
        <section class="row text-center" id="score-button">
            <div class="col-sm-6 col-sm-offset-3">
                <a href="<?php echo bloginfo('url') . '/?page_id=83' ?>">
                    <p>Découvrir les réponses</p>
                </a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>