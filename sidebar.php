<?php

if (is_active_sidebar('sidebar-blog')) : ?>
        <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

<?php endif; ?>