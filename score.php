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
$sol4 = "oui";
$sol5 = "oui";


//$rep1 = htmlentities($_POST['question1']);
//$sql = "INSERT INTO $wpdb->'tp_quiz'(num_question, reponse_int, reponse_quiz) VALUES(?, ?, ?)";
//$stmt = $wpdb->query($wpdb->prepare($sql));
//$new = array('1', $rep1, $sol1);
//$stmt->execute($new);

//$rep1 = $_POST['question1'];
//$wpdb->query($wpdb->prepare(
//    "INSERT INTO tp_quiz(num_question, reponse_int, reponse_quiz)
//    VALUES (%d, %s, %s)",
//    1, $rep1, $sol1));


$rep1 = htmlentities($_POST['question1']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '1',
    'reponse_int' => $rep1,
    'reponse_quiz' => $sol1),
    array('%d','%s', '%s'));

$rep2 = htmlentities($_POST['question2']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '2',
    'reponse_int' => $rep2,
    'reponse_quiz' => $sol2
));

$rep3 = htmlentities($_POST['question3']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '3',
    'reponse_int' => $rep3,
    'reponse_quiz' => $sol3
));

$rep4 = htmlentities($_POST['question4']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '4',
    'reponse_int' => $rep4,
    'reponse_quiz' => $sol4
));

$rep5 = htmlentities($_POST['question5']);
$wpdb->insert('tp_quiz', array(
    'num_question' => '5',
    'reponse_int' => $rep5,
    'reponse_quiz' => $sol5
));

$score = 0;

($rep1 == $sol1) ? $score++ : $score;
($rep2 == $sol2) ? $score++ : $score;
($sol3 - 5 <= $rep3 && $rep3 <= $sol3 + 5) ? $score++ : $score;
($rep4 == $sol4) ? $score++ : $score;
($rep5 == $sol5) ? $score++ : $score;


if ($score == 5) {
    echo "Bravo, vous avec obtenu " . $score . " bonnes réponses sur les 5 questions";
} else if ($score == 0) {
    echo "ouhh, vous n'avez aucune bonne réponse !";
} else {
    echo "Pas mal, vous avec obtenu " . $score . " bonnes réponses sur les 5 questions";
}

?>
    <main>
        <h2>Pour afficher les bonnes réponses et avoir quelques éclairages de Tania Pacheff sur ces sujets, passez à la
            page suivante</h2>
        <a href="http://localhost/tania_pacheff/?page_id=83">
            <button>Afficher la page de résultats du quizz</button>
        </a>
    </main>
<?php get_footer(); ?>