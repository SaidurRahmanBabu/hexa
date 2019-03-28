<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>


<!-- Mirrored from theimran.com/hexa/hexa/home1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 17:23:19 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Title -->
    <!-- favicon Icon -->
    <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--[if lte IE 9]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
  <!-- site content here -->
  <!-- =========================== Main Header =========================== -->
  <header class="main-header">
      <!-- .header-top-->
    <div class="header-top">
      <div class="container h-100">
        <div class="row justify-content-between align-items-center h-100">

      <?php
        function theme_social_menu() {
          if (has_nav_menu('social')) {
            wp_nav_menu(
              array(
                'theme_location' => 'social',
                'container' => 'div',
                'container_class' => 'icons col col-sm-6 hexa-social',
                'depth' => 1,
                'menu_class' => 'social-menu',
                'fallback_cb' => false,
                'link_before' => '<i class="fa fa-',
                'link_after' => '"></i>'
              )
            );
          }
        }
      ?>
        <?php if (has_nav_menu('social')) : ?>
          <?php theme_social_menu(); ?>
        <?php endif; ?>

          <!-- .select-lang -->
          <form class="col col-sm-6 d-flex justify-content-md-end select-lang" action="<?php bloginfo('home'); ?>" method="get">
            <div class="form-item">
                <input class="country_selector" type="text">
            </div>
          </form>
          <!-- //.select-lang -->
        </div>
      </div>
    </div>
      <!-- //.header-top-->
      <!-- .site-logo -->
      <div class="site-branding">
        <nav class="h-100 navbar">
          <div class="container h-100">
            <div class="h-100 row w-100">
              <a class="align-items-center col-sm-12 d-flex justify-content-center navbar-brand w-100" href="<?php esc_url(bloginfo('home')); ?>">

                <?php
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              
                ?>
                <img src="<?php echo esc_url($image[0]); ?>" alt="">
              </a>
            </div>
          </div>
        </nav>
      </div>
      <!-- //.site-branding -->
      <!-- main-menu -->
    <?php 
        get_template_part('templates-parts/common/main-menu'); 
    ?>

  </header>
  <!-- =========================== //Main Header =========================== -->

<!-- =========================== Banner Post =========================== -->
  <?php 
    if(is_home()){ 
      get_template_part('templates-parts/featured'); 
    } 
  ?>