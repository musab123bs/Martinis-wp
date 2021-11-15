<?php
/*Template Name: Contact
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
<div class="row" style="background-color: #000">
	<div class="col-md-8 mx-auto">
		<div class="form-container container">
			<div class=main-heading>
				<h1 class="text-center">Contact Form</h1> </div>
			<form action="contact-form-process.php" method="post">
				<div class="row">
					<div class="col-md-6">
						<input type="text" id="fname" name="firstname" placeholder="Your name.."> </div>
					<div class="col-md-6">
						<input type="text" id="lname" name="lastname" placeholder="Your last name.."> </div>
					<div class="col-md-6">
						<input type="mail" id="email" name="Email" placeholder="Your Email"> </div>
					<div class="col-md-6">
						<input type="text" id="datepicker" name="date" placeholder="Book Your Table"> </div>
					<div class="col-md-6">
						<input type="hidden" value="1" name="contactForm"> </div>
				</div>
				<textarea id="subject" name="message" placeholder="Write message.." style="height:200px"></textarea>
				<input type="submit" value="Submit"> </form>
		</div>
	</div>
</div>
<style>
/* Style inputs with type="text", select elements and textareas */

input[type=text],
select,
textarea,
input[type=mail],
input[type=date] {
	width: 100%;
	/* Full width */
	padding: 12px;
	/* Some padding */
	border: 1px solid #ccc;
	/* Gray border */
	border-radius: 4px;
	/* Rounded borders */
	box-sizing: border-box;
	/* Make sure that padding and width stays in place */
	margin-top: 6px;
	/* Add a top margin */
	margin-bottom: 16px;
	/* Bottom margin */
	resize: vertical/* Allow the user to vertically resize the textarea (not horizontally) */
}
/* Style the submit button with a specific background color etc */

input[type=submit] {
	background-color: #261537;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	width: 30%;
	margin: 0 auto;
	display: block;
	transition: 0.5s;
}
/* When moving the mouse over the submit button, add a darker green color */

input[type=submit]:hover {
	background-color: #f7c56b;
	outline: 0px solid;
}

input,
textarea {
	color: #000;
	font-size: 23px;
	font-weight: 700;
}

textarea::placeholder,
input::placeholder {
	/*color: #f7c56b;*/
	color: #bbb;
	font-size: 23px;
	font-weight: 700;
}


/* Add a background color and some padding around the form */

.form-container {
	background-color: #983921;
	padding: 30px 20px;
	margin: 70px auto;
	color: #fff;
	outline-offset: 10px;
	width: 90%;
	background-image: linear-gradient(180deg, #60269ead, #6d38a6a1);
}
</style>
<!--Contact information-->
<section class="contact-info">
	<div class="container-fluid m-0">
		<div class="row main-info">
			<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 col-xl-6 inner-info">
				<div class="contact-content-inner">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65348956.946774736!2d165.0320272096054!3d1.4253507302144506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d954da787090ff%3A0x499f7c94762d91de!2sMartinis%20Above%20Fourth%20%7C%20Table%20%2B%20Stage!5e0!3m2!1sen!2s!4v1636564511365!5m2!1sen!2s" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 col-xl-6 inner-info">
				<div class="contact-content-inner">
					<div class="contact-details">
						<div class="contact-heading">
							<h2>Get In <span class="sp-h2">Touch</span></h2> </div>
						<div class="main-details">
							<div class="connection-details">
								<div class="contact-call"> <a href="tel:6195469986">(619) 546-9986</a> </div>
								<div class="contact-email"> <a href="mailto:dorutifuisd@gmail.com">dorutifuisd@gmail.com</a> </div>
								<div class="contact-location"> <a href="https://www.google.com/maps/place/Martinis+Above+Fourth+%7C+Table+%2B+Stage/@1.4253507,165.0320272,3z/data=!3m1!5s0x80d954d082cb866b:0xccff14e87a5743aa!4m19!1m13!4m12!1m4!2m2!1d67.064244!2d24.991427!4e1!1m6!1m2!1s0x80d954da787090ff:0x499f7c94762d91de!2smartinis+3940+Fourth+Ave,+San+Diego,+CA+92103,+United+States!2m2!1d-117.1617493!2d32.749107!3m4!1s0x80d954da787090ff:0x499f7c94762d91de!8m2!3d32.749107!4d-117.1617493" target="_blank">3940 Fourth Ave, San Diego, CA 92103, United States</a> </div>
							</div>
						</div>
						<div class="main-details">
							<div class="cont-sub-heading">
								<h4>Hours Of Operation</h4> </div>
							<div class="opening-details">
								<ul class="colmn-1">
									<!--<li><strong>Bar</strong></li>-->
									<li>Sun-Thur: 4pm - 12am</li>
									<li>Fri-Sat: 4pm - 2am</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
