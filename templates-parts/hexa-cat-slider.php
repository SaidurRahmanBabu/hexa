
    <div class="catagory-area">
        <div class="container">
            <div class="catagory-slider owl-carousel">
            <?php

                $args = array(
                  'post_type' => 'post' ,
                  'orderby' => 'date' ,
                  'order' => 'DESC',
                  'paged' => get_query_var('paged')
                ); 

                $cat_slider = new WP_Query($args);
                if ( $cat_slider->have_posts() ) { 
                  while ( $cat_slider->have_posts() ) {
                    $cat_slider->the_post(); 
                    ?>
                    <!-- Catagory -->
                <div class="catagory hvr-shutter-out-horizontal">
                    <?php the_post_thumbnail(); ?>
                    <div class="catagory-text">
                        <a href="<?php the_permalink(); ?>" class="read-more double-line">read more</a>
                    </div>
                </div>


                    <?php
                    // your loop
                  }
                }
            ?>

            </div>
        </div>
    </div>