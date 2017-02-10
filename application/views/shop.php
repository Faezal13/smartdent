<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/style.css" type="text/css" />
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
	<title>Shop | Smartdent</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?php echo base_url() ?>" class="standard-logo" data-dark-logo="<?php echo base_url() ?>assets/frontend/images/logo/Logo-Smartdent.png"><img src="<?php echo base_url() ?>assets/frontend/images/logo/Logo-Smartdent.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="<?php echo base_url() ?>" data-href="#home"><div>Home</div></a></li>
							<li><a href="<?php echo base_url() ?>" data-href="#section-products"><div>Products</div></a></li>
							<li><a href="<?php echo base_url() ?>" data-href="#section-about"><div>About</div></a></li>
							<li><a href="<?php echo base_url() ?>" data-href="#section-contact"><div>Contact</div></a></li>
							<li><a href="#" ><div>Shop</div></a></li>
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

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Shop</h1>
				<span>Products with Filter Functionality</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shop</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last">

						<!-- Shop
						============================================= -->
						<div id="shop" class="shop product-3 grid-container clearfix">

							<div class="product Primadental clearfix">
								<div class="product-image">
									<a href="#"><img src="<?php echo base_url() ?>assets/products/Primadental/Primaclassic Diamond Burs.jpg" alt="Checked Short Dress"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-info"></i><span> Details</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc center">
									<div class="product-title"><h3><a href="<?php echo site_url('details') ?>">PRIMA CLASSIC DIAMOND BURS</a></h3></div>
									<div class="product-price">Rp. 30.000 / pcs</div>
									<!-- <div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div> -->
								</div>
							</div>

							<div class="product Primadental clearfix">
								<div class="product-image">
									<a href="#"><img src="<?php echo base_url() ?>assets/products/Primadental/PREDATOR ZIRCONIA.jpg" alt="Checked Short Dress"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-info"></i><span> Details</span></a>
										<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
									</div>
								</div>
								<div class="product-desc center">
									<div class="product-title"><h3><a href="<?php echo site_url('details') ?>">PREDATOR ZIRCONIA</a></h3></div>
									<div class="product-price">Rp. 144.000 / pcs</div>
									<!-- <div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div> -->
								</div>
							</div>

						</div><!-- #shop end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget-filter-links clearfix">

								<h4>Pilih Kategori</h4>
								<ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
									<li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Clear</a></li>
									<li><a href="#" data-filter=".Primadental">Primadental</a></li>
									<li><a href="#" data-filter=".Betasil">Betasil</a></li>
									<li><a href="#" data-filter=".Kuraray">Kuraray</a></li>
									<li><a href="#" data-filter=".Noritake">Noritake</a></li>
								</ul>

							</div>

							<div class="widget widget-filter-links clearfix">

								<h4>Cari Berdasarkan</h4>
								<ul class="shop-sorting">
									<li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Clear</a></li>
									<li><a href="#" data-sort-by="name">Name</a></li>
									<li><a href="#" data-sort-by="price_lh">Price: Low to High</a></li>
									<li><a href="#" data-sort-by="price_hl">Price: High to Low</a></li>
								</ul>

							</div>

						</div>
					</div><!-- .sidebar end -->

				</div>

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

	<script>
		jQuery(document).ready( function($){
			$('#shop').isotope({
				transitionDuration: '0.65s',
				getSortData: {
					name: '.product-title',
					price_lh: function( itemElem ) {
						if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
							var price = $(itemElem).find('.product-price ins').text();
						} else {
							var price = $(itemElem).find('.product-price').text();
						}

						priceNum = price.split("$");

						return parseFloat( priceNum[1] );
					},
					price_hl: function( itemElem ) {
						if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
							var price = $(itemElem).find('.product-price ins').text();
						} else {
							var price = $(itemElem).find('.product-price').text();
						}

						priceNum = price.split("$");

						return parseFloat( priceNum[1] );
					}
				},
				sortAscending: {
					name: true,
					price_lh: true,
					price_hl: false
				}
			});

			$('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
				var element = $(this),
					elementFilter = element.children('a').attr('data-filter'),
					elementFilterContainer = element.parents('.custom-filter').attr('data-container');

				elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

				element.append('<span>'+ elementFilterCount +'</span>');

			});

			$('.shop-sorting li').click( function() {
				$('.shop-sorting').find('li').removeClass( 'active-filter' );
				$(this).addClass( 'active-filter' );
				var sortByValue = $(this).find('a').attr('data-sort-by');
				$('#shop').isotope({ sortBy: sortByValue });
				return false;
			});
		});
	</script>

</body>
</html>