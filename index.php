<?php get_header(); ?>

    
    <!-- ==================== Catagory Slider Area =================== -->
    <?php get_template_part('templates-parts/hexa-cat-slider'); ?>
    <!-- ================ //Catagory Slider Area ==================== -->

    <!-- ======================== Middle Content ======================== -->
    <div class="middle-content">
        <div class="container">
            <div class="row">
                <!-- =========== Main .blog-area =============== -->
                <main class="col-xl-8 col-lg-8 col-md-7 blog-area">

                    <!-- =============== Recent Blog =============== -->
                    <div class="recent-blogs blog-grid row">

                    <?php
                        if(have_posts()):
                            while (have_posts()) {
                               the_post();
                               get_template_part('templates-parts/format-post/post', get_post_format());
                            }
                        endif;
                    ?>

                    </div>

                    <!-- =============== //Recent Blog =============== -->


                    <!-- Blog Pagination -->
                    <nav class="blog-pagination pt-20 pb-20">
                        <ul class="justify-content-between pagination">

                        <?php if(get_previous_posts_link()): ?>
                            <li class="page-item newer-post pl-15">
                                <p class="page-link border-0 hvr-icon-back">
                                <?php previous_posts_link('Newer Post', 0); ?>
                                </p>
                            </li>
                        <?php endif; ?>
                        
                        <?php if(get_next_posts_link()): ?>
                            <li class="page-item newer-post pl-15">
                                <p class="page-link border-0 hvr-icon-forward">
                                <?php next_posts_link('Older Post', 0); ?>
                                </p>
                            </li>
                        <?php endif; ?>

                        </ul>
                    </nav>
                    <!-- //Pagination -->
                </main>
                <!-- ============ //Main .blog-area ================ -->

                <!-- ================ Aside .middle-sidebar =============== -->
                <?php get_sidebar(); ?>
                <!-- ============= //Aside .middle-sidebar ================ -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->
    <!-- =========================== //Footer =========================== -->
    <?php   get_footer(); ?>