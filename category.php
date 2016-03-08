<?php
/*
Template Name: Page atelier
*/
?>


<?php get_header(); ?>

<p>category.php</p>

    <main id="main-presta">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <section class="row">
                    <?php $query = get_('category=9');
                        if($query){
                            foreach($query as $post){
                                setup_postdata($post);

                    echo "<article class='col-xs-3 mosaique-prestas'>";
                        echo "<a href=\"";
                        the_permalink();
                        echo"\">";
                            if (has_post_thumbnail()){
                                echo "<div class='thumbnail-presta'>";
                                    echo "the_post_thumbnail('full');";
                                echo "</div>";
                            };
                            echo"<h2>";
                                the_title();
                        echo"</h2>";
                        echo "</a>";
                    echo "</article>";
                            }
                    wp_reset_postdata();
                   }; ?>
                </section>
            </div>
        </div>
    </main>

<?php get_footer(); ?>