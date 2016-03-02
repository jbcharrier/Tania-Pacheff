<?php
/*
Template Name: Page contact
*/
?>

<?php get_header(); ?>

    <!--Fenêtre modale Bootstrap-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation de l'envoi de votre message</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non magna et libero semper
                        lobortis. Aliquam finibus quam a molestie volutpat. Nullam ac nisi leo. Nam fermentum libero
                        at massa dapibus, eget gravida nibh mattis. Aenean sapien purus, viverra vel rhoncus sit
                        amet, viverra at felis. Quisque semper mauris diam, eu dignissim sapien aliquam eget. Nullam
                        finibus pellentesque aliquet. Maecenas non lorem sed orci tincidunt dignissim. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

<!--    Main Contact Form-->
    <main id="page-form">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Formulaire pour me contacter</h3>
            </div>
        </div>
        <div class="row" id="form">
            <div class="col-md-8 col-md-offset-2">
                <form method="post" action="<?php bloginfo('url'); ?>">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="entreprise">Entreprise <br> ou organisme</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="entreprise" name="entreprise"
                                   placeholder="Nom de l'entreprise ou organisme">
                            <?php echo !empty($hasErrors['entreprise']) ? $hasErrors['entreprise'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="fonction">Fonction</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="fonction" name="fonction" placeholder="Fonction dans l'entreprise">
                            <?php echo !empty($hasErrors['fonction']) ? $hasErrors['fonction'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name">Nom*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="name" name="name" placeholder="Nom" required>
                            <?php echo !empty($hasErrors['name']) ? $hasErrors['name'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="prenom">Prénom*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                            <?php echo !empty($hasErrors['prenom']) ? $hasErrors['prenom'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="email">Email*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" id="email" name="email" placeholder="Email" required><br>
                            <?php echo !empty($hasErrors['email']) ? $hasErrors['email'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="tel">Téléphone*</label>
                        </div>
                        <div class="col-md-9">
                            <input type="tel" id="tel" name="tel" placeholder="Téléphone" required>
                            <?php echo !empty($hasErrors['tel']) ? $hasErrors['tel'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="message">Message</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="message" id="message" cols="30" width=""></textarea>
                            <?php echo !empty($hasErrors['message']) ? $hasErrors['message'] : ''; ?>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-9 col-md-offset-3" id="end-form">
                        <p>(*)Champs obligatoires</p>
                        <input type="submit" value="valider" id="message-contact">
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php get_footer(); ?>