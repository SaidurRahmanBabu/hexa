
    <nav class="navbar main-nav navbar-expand-lg">
      <div class="container">
        <button class="navbar-toggler m-menu-btn" type="button" data-toggle="collapse" data-target="#mainNav">
            <span></span>
        </button>

        <?php
            $hexa_main_menu = wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_id' => 'mainNav',
                'menu_class' => 'navbar-nav'
            ));
        ?>
        <!--search form-->
        <form class="form-inline ml-auto" action="<?php bloginfo('home'); ?>" method="get">
            <input class="form-control border-0 " type="search" placeholder="write something" name="s">
        </form>
      </div>
    </nav>