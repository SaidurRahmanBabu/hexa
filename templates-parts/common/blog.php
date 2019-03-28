<!-- Card Body -->
<div class="card-body p-0">
    <span class="posted-by">Posted By 
        <mark class="admin">
            <?php the_author() ?>
        </mark>
    </span>
    <p class="card-text">
        <?php the_excerpt(); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="read-more double-line">read more</a>
    <!-- Card Footer -->
</div>
<div class="card-footer border-0 p-0 bg-white">
    <div class="share-icons">
        <span>Share:</span>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
    </div>
</div>