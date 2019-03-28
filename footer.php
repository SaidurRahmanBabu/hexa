
    <footer class="footer">
        <!-- footer-top   -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget, Social Content-->
                    <div class="col-lg-3 col-sm-5 order-lg-1 order-md-1 order-sm-1 order-1  footer-widget footer-social-area">
                        <h2 class="widget-title">INSTAGRAM</h2>
                        <div class="social-content">
                            <div class="row pl-15 pr-15 social-popup-container">
                                <a href="assets/img/footer/1.jpg" data-fancybox="images" class="col-4 col-sm-4 p-0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/footer/1.jpg" alt="Image"></a>
                                
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <a href="#" class="col-sm-12 p-15 h2 follow-btn">Follow Me</a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget, Site Info-->
                    <div class="col-lg-4 col-md-8 col-sm-9 order-lg-2 order-md-3 order-sm-3 order-3 ml-lg-auto mx-md-auto mx-sm-auto mx-auto footer-widget footer-site-info">
                        <div class="site-info">
                            <a class="navbar-brand pb-15 mb-20 d-block" href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo.png" alt="Logo"></a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            <div class="icon-list">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget, POPULAR POST-->

                    <div class="col-lg-4 col-sm-7 order-lg-3 order-md-2 order-sm-2 order-2  pl-lg-0 middle-sidebar ml-xl-auto">
                        <div class="row">

                            <?php
                                if(is_active_sidebar('footer-widget')){
                                    dynamic_sidebar('footer-widget');
                                }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /footer-top  -->
        <!-- footer bottom -->
       <?php
        if(is_active_sidebar('footer-bottom')){
            dynamic_sidebar('footer-bottom');
        }
       ?>
    </footer>
    <!-- =========================== //Footer =========================== -->
    <!-- #preloader -->
   <!--  <div id="preloader"></div> -->
    <!-- ======================= Scripts ======================= -->
    


    <?php wp_footer(); ?>
</body>


<!-- Mirrored from theimran.com/hexa/hexa/home1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 17:23:41 GMT -->
</html>