
<?php get_header(); ?>
<!-- =========================== Middle Content =========================== -->
    <div class="middle-content pt-50">
        <div class="container">
            <div class="row">
                <!-- ====================== Main .blog-area ====================== -->
                <main class="col-xl-8 col-lg-8 col-md-7 blog-details-area">
                    <!-- ============ Full Post ============ -->
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="card full-post border-0">
                        <mark class="catagory text-center">
                            <?php the_category(', '); ?>
                        </mark>
                        <h2 class="card-title text-center h1">
                            <?php the_title(); ?>
                        </h2>
                        <!-- Blog Content-->
                        <div class="blgo-content">
                            <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail();
                                }
                            ?>
                            <span class="posted-date">
                                <?php the_date('d M, Y'); ?>
                            </span>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body blog-texts p-0">
                            <span class="posted-by mt-20 mb-20 d-block">Posted By <mark class="admin">
                                <?php the_author(); ?>
                            </mark></span>
                            <?php the_content(); ?>
                            
                        </div>
                        <!-- Card List -->
                        <div class="card card-list border-0">
                            <div class="align-items-center bg-white border-0 card-footer d-flex flex-column flex-lg-row justify-content-md-between p-0">
                                <div class="share-icons w-50">
                                    <span>Share:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <div class="tags">
                                    <?php the_tags('', ', ', ''); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- =========== /Full Post ============= -->
                    <!-- =========== //Recent Blog =========== -->

                    <!-- ========= Blog Pagination =========== -->
                    <nav class="blog-pagination">
                        <ul class="justify-content-between pagination">

                        <?php if(get_previous_post_link()): ?>
                            <li class="page-item newer-post pl-15">
                                <p class="page-link border-0 hvr-icon-back">
                                <?php previous_post_link( '%link', 'Previous Post', false, '', 'category' ); ?>
                                </p>
                            </li>
                        <?php endif; ?>
                        
                        <?php if(get_next_post_link()): ?>
                            <li class="page-item newer-post pl-15">
                                <p class="page-link border-0 hvr-icon-forward">
                                <?php next_post_link( '%link', 'Next Post', false, '', 'category' ); ?>
                                </p>
                            </li>
                        <?php endif; ?>

                        </ul>
                    </nav>
                    <!-- //Pagination -->

                    <!-- Author Box -->
                    <div class="author-box row">
                        <div class="col-xl-2  col-lg-3 text-center">
                            <?php
                                echo get_avatar(get_the_author_meta('id'));
                            ?>
                        <!-- author social links -->
                  <?php
                    $hexa_fb = get_field('facebook', 'user_'. get_the_author_meta('ID'));

                    $hexa_twit = get_field('twitter', 'user_'. get_the_author_meta('ID'));

                    $hexa_gplus = get_field('google_plus', 'user_'. get_the_author_meta('ID'));

                    $hexa_pin = get_field('pinterest', 'user_'. get_the_author_meta('ID'));
                  ?>

                            <div class="icon-list">
                            <?php if($hexa_fb): ?>
                                <a href="<?php echo esc_url($hexa_fb); ?>">
                                  <i class="fa fa-facebook"></i>
                                </a>
                            <?php endif; ?>

                              <?php if($hexa_twit): ?>
                                <a href="<?php echo esc_url($hexa_twit); ?>">
                                  <i class="fa fa-twitter"></i>
                                </a>
                              <?php endif; ?>

                            <?php if($hexa_gplus): ?>
                                <a href="<?php echo esc_url($hexa_gplus); ?>">
                                  <i class="fa fa-google-plus"></i>
                                </a>
                            <?php endif; ?>

                            <?php if($hexa_pin): ?>
                                <a href="<?php echo esc_url($hexa_pin); ?>">
                                  <i class="fa fa-pinterest"></i>
                                </a>
                            <?php endif; ?>
                            </div>

                        </div>
                        <div class="col-xl-10 col-lg-9">
                            <div class="card author-info border-0">
                                <h2 class="card-title">
                                    <?php echo get_the_author_meta('display_name'); ?>
                                </h2>
                                <div class="card-body p-0">
                                    <p class="card-text">
                                        <?php echo get_the_author_meta('description'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Author Box -->
                    <!-- ================= Comment Area ================= -->

                    <div class="comments-area">
                        <div class="comments-title">
                            <h5 class="h1">
                                <?php _e('Comments', 'hexa'); ?>
                            </h5>
                        </div>

                        <?php comments_template(); ?>
                    </div>
                    <!-- ================= //Comment Area ================= -->
                    <!-- ================= Releted post ================= -->
                    <?php get_template_part('templates-parts/common/hexa-related-post'); ?>

                    <!-- ================= //Releted post ================= -->
                </main>

                    
            <?php endwhile; endif; ?>
                <!-- ================= //Main .blog-area ================== -->
                <!-- ============== Aside .middle-sidebar ================= -->
                <?php get_sidebar(); ?>
                <!-- ====================== //Aside .middle-sidebar ====================== -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->

    <?php get_footer(); ?>