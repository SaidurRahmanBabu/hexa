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

<?php
    $hexa_fb = get_field('facebook', 'user_'. get_the_author_meta('ID'));

    $hexa_twit = get_field('twitter', 'user_'. get_the_author_meta('ID'));

    $hexa_gplus = get_field('google_plus', 'user_'. get_the_author_meta('ID'));

    $hexa_pin = get_field('pinterest', 'user_'. get_the_author_meta('ID'));
?>

    <div class="share-icons">
        <span><?php _e('Share: ', 'hexa'); ?></span>
        <?php if($hexa_fb): ?>
            <a href="<?php echo esc_url($hexa_fb); ?>">
              <i class="fa fa-facebook"></i>
            </a>
        <?php endif; ?>

            <a href="<?php echo esc_url($hexa_twit); ?>">
              <i class="fa fa-twitter"></i>
            </a>

        <?php if($hexa_fb): ?>
            <a href="<?php echo esc_url($hexa_gplus); ?>">
              <i class="fa fa-google-plus"></i>
            </a>
        <?php endif; ?>

        <?php if($hexa_fb): ?>
            <a href="<?php echo esc_url($hexa_pin); ?>">
              <i class="fa fa-pinterest"></i>
            </a>
        <?php endif; ?>
    </div>
</div>