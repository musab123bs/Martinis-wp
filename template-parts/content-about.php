<?php
/*Template Name: Inner page
 */

get_header();
?>
	
<!--inner banner-->
<div class="banner-vid banner-img">
<?php martinis_post_thumbnail(); ?>
        	<div class="header-text">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="h1ht">
							    <!--Banzai Bar-->
								<img src="<?php echo get_template_directory_uri();?>/assets/images/bannerlogo.png" style="max-width:100%;" alt="logo" />
								<br>
								<p>	<?php echo the_title(); ?></p>
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--about us-->


<?php
$post_21 = get_post( 7 );
$content = $post_21->post_content;
?>
		
<section class="block dark-background about-section" id="about">
                <div class="container-fluid p-0">
                    <div class="about-section row m-0 inner-about-text">
                        <div class="col-lg-6 p-0">
                            <div class="about-text wow slideInLeft" data-wow-duration="1000ms">
                                <h2 class="sm-title"><span class="sp-h3">ABOUT</span> MARTINIS BAR</h2>
                                <?php echo $content;?>
                            </div>
                            <!--about-text end-->
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="prz-thumb">
                                <div class="image-thumb">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/music-label/img1.jpg" alt="" />
                                </div>
                                <!--image-thumb end-->
                            </div>
                        </div>
                    </div>
                    <!--about-section end-->
                </div>
</section>
<?php
get_footer();
