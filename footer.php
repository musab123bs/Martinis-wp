<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MARTINIS
 */

?>




<style>
    
    .subs-form input::placeholder {
    font-size: small;
}
</style>

            <section class="contact-section">
                <div class="fixed-bg ml-bg2"></div>
                <div class="container" style="background-color:#fff; border-top: 8px solid #9fd961; filter: invert(1);">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ct-content">
                                <div class="contact-content pt-4 pb-4" id="footer">
                                    <div class="ct-head mb-2">
                                    <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                            		</div>	
                                </div>
                                <!--contact-content end-->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ct-content">
                                <div class="contact-content pt-4 pb-4" id="footer">
                                        <?php dynamic_sidebar( 'footer-sidebar-2 ' ); ?>
                                    <div class="row bar-timing">
                                        <!-- <div class="col-md-12 text-left time-heading pl-3 pr-2 mb-1 mt-1 ct-head">
					        <h3>Hours of Operation</h3>
					    </div> -->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="wd-content mb-4">
                                            <?php dynamic_sidebar( 'footer-sidebar-3 ' ); ?>
                                            </div>
                                            <!--dp-text end-->
                                        </div>
                                    </div>
                                    <!--<ul class="lg-social wow slideInLeft" data-wow-duration="1000ms">-->
                                    <!--    <li>-->
                                    <!--        <a href="https://www.facebook.com/MA4SD/" title="" class="spotify-ic"><i class="fab fa-facebook-f"></i></a>-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <a href="https://www.instagram.com/ma4sd/" title="" class="music"><i class="fab fa-instagram"></i></a>-->
                                    <!--    </li>-->

                                    <!--</ul>-->
                                    <!--lg-social end-->
                                </div>
                                <!--contact-content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!--ct-content end-->
            </section>
            <!--contact-section end-->

            <footer>
                <div class="container">
                    <div class="row footer-content">
                        <div class="col-lg-4 col-md-4">
                            <div class="copyright">
                                <p>
                                    © Martinis
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    - Designed By <a href="https://sabaseo.com"> Saba SEO</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="ft-logo text-center">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/ft-logo.png" alt="" />
                            </div>
                            <!--ft-logo end-->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <ul class="social-links v2">
                                <!--<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>-->
                                <!--<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>-->
                                <li>
                                    <a href="https://www.facebook.com/MA4SD/" title=""><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ma4sd/" title=""><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                            <!--social-links end-->
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end-->
        </div>

        <script>
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length;
        for(i = 0; i < menuLength; i++){
            if(menuItem[i].href === currentLocation){
                menuItem[i].className = "active";
            }
        } 
    </script>
        <!--wrapper end-->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-migrate-1.4.1.min.js"></script>
        <!-- Vendor -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/revolution/vendor.js"></script>
        <!-- Revolution Slider -->
        <script src="<?php echo get_template_directory_uri();?>/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/revolution/js/extensions/revolution.extensions.all.js"></script>
        <!-- Custom scripts -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/revolution/main.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.jplayer.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jplayer_playlist.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/popper.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/plugin/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/plugin/jquery.swipebox.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/playlist.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js"></script>
        <script>
            $(document).ready(function () {
                $(".responsive-mobile-menu ul li a").click(function () {
                    $(".menu-btn").click();
                });
            });
        </script>
<?php wp_footer(); ?>

</body>
</html>
