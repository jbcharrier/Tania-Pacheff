<?php get_header(); ?>

    <main>
        <section class="row">
            <img src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/photo-home.jpg""
            alt="Photo de Tania Pacheff lors d'un atelier" class="img-responsive">
            <contact class="row">
                <div class="col-xs-4 center">
                    <p>Tania Pacheff</p>
                    <p>Consultante diététicienne nutritionniste</p>
                    <p>06.62.06.90.23</p>
                </div>
            </contact>
        </section>
        <section class="row">
            <div>
                <h2>Témoignages</h2>

                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img
                                src="http://localhost/tania_pacheff/wp-content/themes/tania_pacheff/assets/img/chat.png"
                                alt="test rotation" class="img-circle">
                        </div>
                        <a href="http://www.lemonde.fr/">
                            <div class="back">
                                    <p><span> Monsieur Chat,</span><br>dormeur professionnel</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>




        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>





    </main>

<?php get_footer(); ?>