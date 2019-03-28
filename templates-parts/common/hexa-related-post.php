

                <?php if(function_exists('the_field')): ?>
                    <div class="releted-post">

                        <?php
                            $hexa_related_post = get_field('related_post');
                            $related_post = new WP_Query(array(
                                'post__in'          => $hexa_related_post,
                                'posts_per_page'    => 3,
                                'orderby'           => 'post__in'
                            ));
                        ?>


                        <h2 class="widget-title">
                            <?php _e('Related Posts', 'hexa'); ?>
                        </h2>
                        <div class="row align-items-end">


                        <?php while($related_post->have_posts()) : $related_post->the_post(); ?>
                            <!-- Single Blog -->
                            <article class="card single-blog text-center border-0 mb-4 mb-lg-0 col-lg-4 col-sm-6">
                                <mark class="catagory">
                                    <?php the_category(', '); ?>
                                </mark>
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="card-title">
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                                <!-- Blog Content-->
                                <div class="blgo-content">  
                                    <a href="<?php the_permalink(); ?>">        
                                        <?php
                                            if(has_post_thumbnail()){
                                                the_post_thumbnail();
                                            }
                                        ?>
                                    </a>
                                    <span class="posted-date">
                                        <?php echo get_the_date('d M, Y'); ?>
                                    </span>
                                </div>
                            </article>
                            <!-- //Single Blog -->
                        <?php endwhile; ?>


                        </div>
                    </div>

                <?php endif; ?>