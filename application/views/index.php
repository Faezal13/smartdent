<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" /> -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Home</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		<section id="slider" class="slider-parallax full-screen with-header swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/slider/PRM-slider.jpg');">
							<!-- <div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
								</div>
							</div> -->
						</div>
						<!-- <div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
									<source src='images/videos/explore.mp4' type='video/mp4' />
									<source src='images/videos/explore.webm' type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/slider/img1.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div> -->
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>

			</div>

		</section>

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?php echo base_url() ?>assets/frontend/images/logo/Logo-Smartdent.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?php echo base_url() ?>assets/frontend/images/logo/Logo-Smartdent.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li><a href="#" data-href="#home"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-products"><div>Products</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
							<li><a href="<?php echo site_url('shop') ?>" ><div>Shop</div></a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<section id="section-products" class="page-section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>Testimony Products</h2>
							<!-- <span>One of the most Versatile Theme on Themeforest</span> -->
						</div>

						<div class="container clearfix center">

							<!-- Portfolio Items
							============================================= -->
							<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="<?php echo base_url() ?>assets/products/Primadental/Primaclassic Diamond Burs.jpg" alt="PRIMA CLASSIC DIAMOND BURS ">
										</a>
										<div class="portfolio-overlay">
											<a href="portfolio-single.html" class="center-icon"><i class="icon-line-ellipsis"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Prima Classic Diamond Burs </a></h3>
										<span><a href="#">PRIMADENTAL</a></span>
									</div>
								</article>
								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="<?php echo base_url() ?>assets/products/Muller Omicron/Dental Rapid CD.jpg" alt="PRIMA CLASSIC DIAMOND BURS ">
										</a>
										<div class="portfolio-overlay">
											<a href="portfolio-single.html" class="center-icon"><i class="icon-line-ellipsis"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Dental Rapid CD</a></h3>
										<span><a href="#">BETASIL</a></span>
									</div>
								</article>
								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="<?php echo base_url() ?>assets/products/Kuraray/Clearfil Liner Bond F.jpg" alt="PRIMA CLASSIC DIAMOND BURS ">
										</a>
										<div class="portfolio-overlay">
											<a href="portfolio-single.html" class="center-icon"><i class="icon-line-ellipsis"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">CLEARFIL LINER BOND F</a></h3>
										<span><a href="#">KURARAY</a></span>
									</div>
								</article>
								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="<?php echo base_url() ?>assets/products/Noritake/CZR (Cerabien ZR).jpg" alt="PRIMA CLASSIC DIAMOND BURS ">
										</a>
										<div class="portfolio-overlay">
											<a href="portfolio-single.html" class="center-icon"><i class="icon-line-ellipsis"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">CZR (Cerabien ZR)</a></h3>
										<span><a href="#">NORITAKE</a></span>
									</div>
								</article>

							</div><!-- #portfolio end -->

						</div>

						<div class="clear"></div>

					</div>

					<div class="section dark parallax nobottommargin" style="padding: 80px 0;background-image: url('<?php echo base_url() ?>assets/frontend/images/parallax/1.jpg');" data-stellar-background-ratio="0.3">

						<div class="container clearfix">

							<!-- <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
								<i class="i-plain i-xlarge divcenter nobottommargin icon-code"></i>
								<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
								<h5>Lines of Codes</h5>
							</div>

							<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
								<i class="i-plain i-xlarge divcenter nobottommargin icon-magic"></i>
								<div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
								<h5>KBs of HTML Files</h5>
							</div>

							<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
								<i class="i-plain i-xlarge divcenter nobottommargin icon-file-text"></i>
								<div class="counter counter-lined"><span data-from="10" data-to="386" data-refresh-interval="25" data-speed="3500"></span>*</div>
								<h5>No. of Templates</h5>
							</div>

							<div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
								<i class="i-plain i-xlarge divcenter nobottommargin icon-time"></i>
								<div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
								<h5>Hours of Coding</h5>
							</div> -->

						</div>

					</div>

				</section>

				<section id="section-about" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2>About Us</h2>
						<span>Some of the Awesome Projects we've worked on.</span>
					</div>
					<div class="container clearfix center">
						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/1.jpg" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/2.jpg" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
									<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
								</div>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img src="images/services/3.jpg" alt="Why choose Us?">
								</div>
								<div class="fbox-desc">
									<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
									<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
								</div>
							</div>
						</div>
					</div>

				</section>

				<section id="section-contact" class="page-section topmargin-lg">

					<div class="heading-block center">
						<h2>Contact Us</h2>
						<span>People who have contributed enormously to our Company.</span>
					</div>

					<div class="container clearfix">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="<?php echo base_url() ?>assets/products/Primadental/PRIMADENTAL.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><span>SUTRISNO</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081387599338 - sutrisno@smartdent.co.id
									</div>
									<br />
									<div class="team-title"><span>YUDI REKO PURWANTO</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081387599338
									</div>
									<!-- <a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a> -->
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="<?php echo base_url() ?>assets/products/Kuraray/kuraray.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><span>SUTRISNO</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081387599338 - sutrisno@smartdent.co.id
									</div>
									<br />
									<div class="team-title"><span>YUDI REKO PURWANTO</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081387599338
									</div>
									<!-- <a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a> -->
								</div>
							</div>

						</div>

						<div class="clear"></div>

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="<?php echo base_url() ?>assets/products/Muller Omicron/MULLER OMICRON.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><span>EKO </span></div>
									<div class="team-content" style="margin-top: 5px !important">
										089635536301
									</div>
									<br />
									<div class="team-title"><span>SIDIK</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081219973601 / 089630820689
									</div>
									<!-- <a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a> -->
								</div>
							</div>

						</div>
						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="<?php echo base_url() ?>assets/products/Noritake/Noritake.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><span>SUTRISNO</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081387599338 - sutrisno@smartdent.co.id
									</div>
									<br />
									<div class="team-title"><span>YUDI REKO PURWANTO</span></div>
									<div class="team-content" style="margin-top: 5px !important">
										081387599338
									</div>
									<!-- <a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a> -->
								</div>
							</div>

						</div>

						<div class="clear"></div>

					</div>

					<div class="section parallax" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/parallax/3.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">
						<div class="heading-block center nobottomborder nobottommargin">
							<!-- <h2>"Everything is designed, but some things are designed well."</h2> -->
						</div>
					</div>

				</section>

				<section id="section-contact" class="page-section">

					<div class="heading-block title-center">
						<h2>Get in Touch with us</h2>
						<span>Still have Questions? Contact Us using the Form below.</span>
					</div>

					<div class="container clearfix">

						<!-- Contact Form
						============================================= -->
						<div class="col_half">

							<div class="fancy-title title-dotted-border">
								<h3>Send us an Email</h3>
							</div>

							<div class="contact-widget">

								<div class="contact-form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone *</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">Products *</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">PRIMADENTAL</option>
										<option value="Wordpress">KURARAY</option>
										<option value="Wordpress">NORITAKE</option>
										<option value="Wordpress">MULLER OMICRON</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

							</form>

						</div>


						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col_half col_last">

							<section id="google-map" class="gmap" style="height: 410px;"></section>


						</div><!-- Google Map End -->

						<!-- Contact Info
						============================================= -->
						<div class="col_full nobottommargin clearfix">

							<div class="col_one_fourth">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-map-marker2"></i></a>
									</div>
									<h3>Lokasi<span class="subtitle">DKI Jakarta</span></h3>
								</div>
							</div>

							<div class="col_one_fourth">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-phone3"></i></a>
									</div>
									<h3>Telephone<span class="subtitle">(021) 663 2522</span></h3>
								</div>
							</div>

							<div class="col_one_fourth">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-skype2"></i></a>
									</div>
									<h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
								</div>
							</div>

							<div class="col_one_fourth col_last">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="https://www.facebook.com/smartdentindonesia/"><i class="icon-facebook"></i></a>
									</div>
									<h3>Facebook<span class="subtitle">Smartdent</span></h3>
								</div>
							</div>

						</div><!-- Contact Info End -->

					</div>

				</section>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 All Rights Reserved by Smartdent<br>
						<!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
					</div>

					<!-- <div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>  -->

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/functions.js"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/jquery.gmap.js"></script>

	<script type="text/javascript">

		jQuery('#google-map').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "<?php echo base_url() ?>assets/frontend/images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>

</body>
</html>
