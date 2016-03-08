<?php
/*
Template Name: Page qui-suis-je
*/
?>

<?php get_header(); ?>

<section id="qui-suis-je" class="no-marg no-padd">
    <main class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Qui suis-je ?</h2>
                <div id="parcours">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/photo-tania-qui.jpg' ?>"
                         alt="Photo profil Tania Pacheff">
                    <div id="mon-parcours">
                        <h4>Mon Parcours</h4>
                        <p>Après une formation en biochimie et management des entreprises, j’ai commencé ma carrière en
                            accompagnant
                            des entreprises agro-alimentaires et pharmaceutiques au sein d’un institut d’études
                            marketing.</p>

                        <p>En quête de sens et avec la volonté profonde d’aider les individus dans leur besoin de
                            mieux-être
                            grâce à l’alimentation,
                            je me suis réorientée vers un métier combinant ma passion pour la nutrition, la santé et la
                            cuisine.</p>

                        <p>En 10 ans de pratique de la diététique, j’ai pu aborder une grande partie des facettes de ce
                            métier :
                            consultation individuelle, développement de repas pour des collectivités, accompagnement de
                            réseaux de santé (diabétologie, néphrologie),
                            service hospitalier de cardiologie, animation d’ateliers culinaires, intervention en
                            entreprises.</p>

                        <p>Au cours de ces multiples expériences, j’ai pu mettre en œuvre une technique pédagogique
                            alliant
                            bienveillance, écoute et apprentissage sur soi. Je souhaite aujourd’hui l’ouvrir au plus
                            grand
                            nombre
                            en accompagnant salariés et dirigeants, dans une démarche entrant en résonnance avec les
                            préoccupations de responsabilité sociétale des entreprises.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-md-offset-1">
                <aside class="reseaux" id="reseaux-eco-engag">
                    <ul class="no-marg no-padd">
                        <li class="text-center"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="text-center"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="text-center"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="text-center"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </aside>
            </div>
    </main>
    <section class="row" id="blockquote-qui">
            <div class="col-md-10 col-md-offset-1 text-center">
                <blockquote class="no-marg no-padd">
                    <p>« Dis-moi et j'oublierai. Enseigne-moi et je me souviendrai. Implique-moi et j'apprendrai »</p>
                    <p><span>Benjamin Franklin</span></p>
                </blockquote>
            </div>
    </section>
    <adress>
        <div class="row contact-prestation">
            <div class="col-md-6 col-md-offset-3 text-center">
                <p>Pour en savoir plus sur cet atelier, pour un devis ou toute autre demande.
                    N’hésitez pas à me contacter au <span>06 62 06 90 23</span> ou via mon <a class="lien-formulaire-bottom" href="http://localhost/tania_pacheff/?page_id=242">formulaire de
                    contact.</a></p>
            </div>
        </div>
    </adress>
</section>

<?php get_footer(); ?>
