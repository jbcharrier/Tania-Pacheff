<?php
/*
Template Name: Page reponse
*/
?>

<?php get_header(); ?>

<?php

global $wpdb;

//
//$rep1 = $_POST['question1'];
//$wpdb->query($wpdb->prepare(
//    "INSERT INTO tp_quiz(num_question, reponse_int, reponse_quiz)
//    VALUES (%d, %s, %s)",
//    1, $rep1, $sol1));


$total1 = $wpdb->query($wpdb->prepare(
            "SELECT *
            FROM tp_quiz
            WHERE num_question =%d",
            1));
$count_total1 = count($total1);


//
//    $total1 = $wpdb->get_results("SELECT *
//                                FROM tp_quiz
//                                WHERE num_question = '1'", ARRAY_A);
//    $count_total1 = count($total1);

    $responses1 = $wpdb->get_results("SELECT *
                                FROM tp_quiz
                                WHERE num_question = '1' AND reponse_int = 'non'", ARRAY_A);
    $count1 = count($responses1);

    $results1 = ceil(($count1 * 100)/$count_total1);



?>
    <main>

        <section class="row">
            <div class="col-xs-12">
                <h2>Question n°1</h2>
                <p>Le réchauffement climatique s'accentue ?</p>
                <p>C'est vrai</p>
                <p> <?php echo($results1); ?>% des personnes qui ont répondu au jeu ont répondu juste</p>
                <h2>Un petit éclairage par Tania</h2>
            </div>
        </section>
        <section class="row">
            <div class="col-xs-12">
                <h2>Question n°2</h2>
                <p>Le réchauffement climatique s'accentue ?</p>
                <p>C'est vrai</p>
                <p>x% des personnes qui ont répondu au jeu n'ont pas répondu juste</p>
                <h2>Un petit éclairage par Tania</h2>
            </div>
        </section>
        <section class="row">
            <div class="col-xs-12">
                <h2>Question n°3</h2>
                <p>Le réchauffement climatique s'accentue ?</p>
                <p>C'est vrai</p>
                <p>x% des personnes qui ont répondu au jeu n'ont pas répondu juste</p>
                <h2>Un petit éclairage par Tania</h2>
            </div>
        </section>

    </main>

<?php get_footer(); ?>