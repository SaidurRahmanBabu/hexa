
<article class="card single-blog no-image-post text-center col-lg-6">
    <div class="inner-wrap">
        <mark class="catagory">
        	<?php the_category(", "); ?>
        </mark>
    <a href="<?php the_permalink(); ?>">
        <h2 class="card-title h1">
            <?php the_title(); ?>
        </h2>
    </a>
        <div class="blgo-content">
			    <span class="posted-date">
			        <?php echo esc_html(get_the_date('d M, Y')); ?>
			    </span>
				</div>
        <!-- Blog Content-->
        <?php get_template_part('templates-parts/common/blog'); ?>
    </div>
</article>