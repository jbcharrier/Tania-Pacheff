<?php
/*
Template Name: Page atelier
*/
?>


<?php get_header(); ?>

<p>category.php</p>

<!--    <section class="row" id="prestations-top">-->
<!--        <div class="col-xs-8 col-xs-offset-2">-->
<!--            <h2>Categories</h2>-->
<!--            --><?php //if (have_posts()) : ?>
<!--                --><?php //while (have_posts()) : the_post(); ?>
<!--                    <article class="post" id="post---><?php //the_ID(); ?><!--">-->
<!--                        --><?php //the_content(); ?>
<!--                    </article>-->
<!--                --><?php //endwhile; ?>
<!--            --><?php //else : ?>
<!--                <h2 class="center">Aucun article trouvé. Vous pouvez essayer une nouvelle recherche</h2>-->
<!--                --><?php //include(TEMPLATEPATH . '/searchform.php'); ?>
<!--            --><?php //endif; ?>
<!--            --><?php //wp_reset_postdata(); ?>
<!--            <div id="nav-cat">-->
<!--                --><?php
//                $param_menu = [
//                    'theme_location' => 'secondary',
//                    'container' => 'nav',
//                    'container_class' => 'nav-category'
//                ];
//                wp_nav_menu($param_menu); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

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