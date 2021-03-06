
<article class="card single-blog slider-blog text-center col-lg-6 ">
    <mark class="catagory">
        <?php the_category(", "); ?>
    </mark>
    <a href="<?php the_permalink(); ?>">
        <h2 class="card-title h1">
            <?php the_title(); ?>
        </h2>
    </a>
    <!-- Blog Content-->
    <div class="blgo-content">
        <div class="slider-blog-img owl-carousel">
           <?php
            if(has_post_thumbnail()){
                the_post_thumbnail();
            }
           ?>
        </div>
        <span class="posted-date">
            <?php the_date('d M, Y'); ?>
        </span>
    </div>
    <!-- Card Body -->
    <?php get_template_part('templates-parts/common/blog'); ?>
</article>