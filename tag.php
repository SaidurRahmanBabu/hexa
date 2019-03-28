
<?php get_header(); ?>
<!-- =========================== Middle Content =========================== -->
    <div class="middle-content pt-50">
        <div class="container">
            <div class="row">
                <!-- ============== Main .blog-area =============== -->
                <main class="col-xl-8 col-lg-8 col-md-7 blog-details-area">
                    <div class="text-center">
                        <h1>
                            <?php _e('Tag Name: ', 'masively');?>
                            <span style="color: #5cca8d;"><?php single_tag_title(); ?></span>
                        </h1>
                    </div> <br><br>
                    <!-- ================= Full Post ================= -->
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="card full-post border-0">
                        <div class="hexa-cat-tag">
                            <div>
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    }
                                ?>
                            </div>
                            <div class="masive-tag-content">
                                <h2>
                                    <a href="<?php the_permalink();?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php echo get_the_excerpt() . " ..."; ?>
                            </div>
                        </div>
                    </article>
                    <!-- ================= //Full Post ================= -->
            <?php endwhile; endif; ?>
            
                    <!-- ================= Releted post ================= -->
                    <?php get_template_part('templates-parts/common/hexa-related-post'); ?>

                    <!-- ================= //Releted post ================= -->
                    
                </main>
                    
                <!-- ================= //Main .blog-area ================== -->

                <!-- ============== Aside .middle-sidebar ================= -->
                <?php get_sidebar(); ?>
                <!-- ====================== //Aside .middle-sidebar ====================== -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->

    <?php get_footer(); ?>