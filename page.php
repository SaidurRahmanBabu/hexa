
<?php get_header(); ?>
    <!-- ====================== Middle Content ======================= -->
    <div class="middle-content">
        <div class="container">
            <div class="row">
                <!-- ============= Main .about-page-area ================= -->
                <main class="col-sm-12 contact-page-area">
                    <?php 
                        if(have_posts()): 
                        while(have_posts()) :the_post();
                    ?>
                    <?php the_content(); ?>

                    <?php endwhile; endif; ?>
                </main>
                <!-- ====================== //Main .about-page-area====================== -->
            </div>
        </div>
    </div>
    <!-- ============= //Middle Content ============ -->
        <!-- =========================== //Footer =========================== -->
<?php get_footer(); ?>