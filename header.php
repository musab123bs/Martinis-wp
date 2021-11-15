<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MARTINIS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
      
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Martinis Above Fourth Table + Stage</title>
        <meta property="og:image" content="og.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="600" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Martinis Above Fourth Table + Stage" />
        <meta name="author" content="Martinis Above Fourth Table + Stage" />
        <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/jplayer.blue.monday.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/swipebox.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/style.css?ver=1.35" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css?ver=1.21" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/custom.css?ver=2.6" />
        <!-- Style Css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/revolution/css/revolution.all.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/revolution/revolution3.css" />
        <!-- Modernizr -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/revolution/vendor/modernizr.js"></script>
        <style type="text/css">
            html {
                scroll-behavior: smooth;
            }
            body{
                    background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
            }
            @font-face {
                font-family: "Futura Light";
                src: url("<?php echo get_template_directory_uri();?>/assets/fonts/Futura Light.ttf");
                src: url("<?php echo get_template_directory_uri();?>/assets/fonts/Futura Light.eot") format("embedded-opentype"), url("<?php echo get_template_directory_uri();?>/assets/fonts/Futura Light.woff2") format("woff2");
            }
            @font-face {
                font-family: bobik-new;
                src: url(<?php echo get_template_directory_uri();?>/assets/new-font/Lewis-McGuffie-Type-Bobik-Sans.ttf);
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: bobik-new !important;
                letter-spacing: 1px;
            }
            .banner-vid {
                background-color: #000;
            }
            .header-text {
                position: absolute;
                top: 42%;
                right: 0;
                left: 0;
                /* text-align: center; */
                z-index: 10;
            }
            .h1ht {
                text-align: center;
                font-size: 65px;
                color: white;
                font-weight: bold;
                color: #fff;
                text-transform: uppercase;
				margin: 0;
            }
            .h1ht p {
                font-size: 18px;
                font-family: "Futura Light";
                margin-top: 20px;
                line-height: 1.5;
            }
            #read-more-1 {
                color: #000;
                background: #fff;
                padding: 10px 20px;
                display: inline-block;
                cursor: pointer;
            }
            #moretxt1 p {
                color: rgba(255, 255, 255, 0.8);
                margin-top: 20px;
            }
            .time-heading {
                margin: 50px auto;
                padding: 20px 6px;
                /*border-top: 1px solid #999;*/
                /*border-bottom: 1px solid #999;*/
                font-size: 44px;
                /*display: inline-block;*/
            }
            .ct-content {
                max-width: 100%;
            }
            .contact-content {
                padding: 50px;
            }
            .contact-section {
                padding: 100px 0 0 0;
            }
            
            header.header2  nav ul li a {
                color: #000000;
            }
            header.header2 {
                background-color: #fff;
                box-shadow: 0 0 10px rgb(0 0 0 / 10%);
            }
            .header2 .social-links li a {
                color: #000;
            }
            .menu-images{
                margin-top: 120px;
            }
            .menu-images .col-md-12 {
                box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                margin:30px 0;
            }
            .wd-content ul li a:hover {
                color: #9fd961;
            }
            .menu-btn > span {
                background-color: #0a0000;
            }
            header.sticky .menu-btn {}
header.sticky .menu-btn span {
    background-color: #000 !important;
}

.about-section{
    padding: 0;
}
            
            @media only screen and (min-width: 768px) {
                /*.bar-timing{*/
                /*    text-align:center;*/
                /*}*/
                .menu-images img {
                    max-width:70%;
                    /*border-radius: 15px;*/
                    clip-path: polygon(5% 0, 80% 0%, 100% 0, 100% 95%, 95% 100%, 14% 100%, 0 100%, 0 5%);
                }
            }
            @media only screen and (max-width: 767px) {
                .header-text {
                    position: absolute;
                    top: 36%;
                    right: 0;
                    left: 0;
                    /* text-align: center; */
                }
                .menu-images img {
                    max-width:100%;
                }
                .logo {
                    margin-bottom: 10px;
                }
                /*.dp-text > h3 {*/
                /*    max-width:100%;*/
                /*}*/
            }
            
        </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <body class="music-label-v">
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="jquery_jplayer_2" class="jp-jplayer"></div>
        <div class="wrapper">
            <header>
			<div class="container-fluid">
                    <div class="header-content">
                        <div class="logo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-black.png" alt="">
                        </div>
                        <!--logo end-->
                        <nav>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'        => 'nav-list',
										)
									);
							?>
                        </nav>
                        <!--navigation end-->
                        <ul class="social-links hd-v">
                            <li>
                                <a href="https://www.facebook.com/MA4SD/" title=""><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <!--<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>-->
                            <li>
                                <a href="https://www.instagram.com/ma4sd/" title=""><i class="fab fa-instagram"></i></a>
                            </li>
                            <!--<li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>-->
                        </ul>
                        <!--social-links end-->
                        <div class="menu-btn">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </div>
                    </div>
                    <!--header-content end-->
                </div>
            </header>
            <!--header end-->
            <div class="responsive-mobile-menu">
			<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'        => 'nav-list',
										)
									);
							?>
            </div>


