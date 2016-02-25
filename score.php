<?php
/*
Template Name: Page score
*/
?>

<?php get_header(); ?>



    <?php

    /**** mise en base des résultats *****/

    global $wpdb;

    $sol1 = "oui";
    $sol2 = "kiwi";
    $sol3 = "36";

    $rep1 = $_POST['question1'];
    $wpdb->insert('tp_quiz', array(
        'num_question' => '1',
        'reponse_int' => $rep1,
        'reponse_quiz' => $sol1
    ));

    $rep2 = $_POST['question2'];
    $wpdb->insert('tp_quiz', array(
        'num_question' => '2',
        'reponse_int' => $rep2,
        'reponse_quiz' => $sol2
    ));

    $rep3 = $_POST['emission'];
    $wpdb->insert('tp_quiz', array(
        'num_question' => '3',
        'reponse_int' => $rep3,
        'reponse_quiz' => $sol3
    ));

    $score = 0;

    ($rep1 == $sol1) ?  $score++ : $score;
    ($rep2 == $sol2) ?  $score++ : $score;
    ($sol3 - 5 <= $rep3 && $rep3 <= $sol3 + 5) ?  $score++ : $score;


    if($score == 3){
        echo "Bravo, vous avec obtenu " . $score . " bonnes réponses sur les 3 questions";
    } else if($score == 0){
        echo "ouhh, vous n'avez aucune bonne réponse !";
    } else {
        echo "Pas mal, vous avec obtenu " . $score . " bonnes réponses sur les 3 questions";
    }

    ?>
<main>

<h2>Pour afficher les bonnes réponses et avoir quelques éclairages de Tania Pacheff sur ces sujets, passez à la page suivante</h2>
    <a href="http://localhost/tania_pacheff/?page_id=83&preview=true"><button>Afficher la page de résultats du quizz</button></a>

</main>

<?php get_footer(); ?>

