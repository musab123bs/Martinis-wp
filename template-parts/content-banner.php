<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MARTINIS
 */

get_header();
?>
<style>
    .banner-vid.banner-img {
    height: 400px;
    position: relative;
    background-image: linear-gradient( 
180deg, #000000, #60269ede), url(<?php echo get_template_directory_uri();?>/assets/images/404banner.jpg);
    background-repeat: repeat;
    background-size: contain;
    background-position: center;
    background-attachment: fixed;
}
</style>


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

<?php get_footer();?>