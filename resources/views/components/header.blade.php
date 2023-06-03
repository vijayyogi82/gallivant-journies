<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallivant Journeys </title>
	<!-- favion -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/user/img/user/logo-2.png')}}">
	<!-- link to font awesome -->
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/vendors/font-awesome/css/font-awesome.css')}}">
	<!-- link to custom icomoon fonts -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/css/fonts/icomoon/icomoon.css')}}">
	<!-- link to wow js animation -->
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/vendors/animate/animate.css')}}">
	<!-- include bootstrap css -->
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css')}}">
	<!-- include owl css -->
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/vendors/owl-carousel/owl.carousel.css')}}">
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/vendors/owl-carousel/owl.theme.css')}}">
	<!-- link to revolution css  -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/user/vendors/revolution/css/settings.css')}}">
	<!-- include main css -->
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/css/main.css')}}">
	<link media="all" rel="stylesheet" href="{{ asset('assets/user/vendors/fancybox/jquery.fancybox.css')}}">
</head>
<style>
	li.extbut button {
		padding: 5px;
		border-radius: 2px;
		border: 0;
	}

	li.extbut {
		padding-top: 20px !important;
	}

	body:not(.modal-open) {
		padding-right: 0px !important;
	}

	.inp {
		color: white;
		border: none;
		border-bottom: 1px solid #ffffff;
		padding: 5px 10px;
		outline: none;
		background-color: transparent;
	}

	::placeholder {
		/* Most modern browsers support this now. */
		color: #ffffff;
	}

	.selecto {
		background: rgb(39 42 50);
		border-radius: 4px;
		font-size: 14px;
		line-height: 20px;
		padding: 5px 10px;
		min-width: 75px;
		color: #9d9d9d;
		width: 100%;
	}

	.text-color {
		color: white;
	}

	.phone-input {
		display: flex;
	}

	#country-code {
		width: 80px;
		/* Adjust the width as per your requirement */
	}

	#phone-number {
		flex: 1;
	}

	span.jcf-select.jcf-unselectable.jcf-select-selecto.jcf-select-trip.jcf-select-dark {
		background-color: #272a32;
		border-bottom: 1px solid white;
		color: white;
	}

	span.jcf-option-text-s {
		color: white;
	}
</style>

<body id="" style=" padding-right: 0px;">
	<div class="preloader" id="pageLoad">
		<div class="holder">
			<div class="coffee_cup"></div>
		</div>
	</div>
	<!-- main wrapper -->
	<div id="wrapper">
		<div class="page-wrapper">
			<!-- main header -->
			<header id="header">
				<div class="container-fluid">
					<!-- logo -->
					<div class="logo">
						<a href="{{Route('user.index')}}">
							<img class="normal" src="{{ asset('assets/user/img/user/logo-2.png')}}" alt="Entrada" style="position: relative;top: -36px;">
							<img class="gray-logo" src="{{ asset('assets/user/img/logos/logo.svg')}}" alt="Entrada">
						</a>
					</div>
					<!-- main navigation -->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- main menu items and drop for mobile -->
						<div class="collapse navbar-collapse" id="nav">
							<!-- main navbar -->
							<ul class="nav navbar-nav">
								<li><a href="{{Route('user.index')}}">Home</a></li>
								<li><a href="{{Route('tour_listing')}}">Tour Listing </a></li>
								<li class="dropdown has-mega-dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities <b class="icon-angle-down"></b></a>
									<div class="dropdown-menu">
										<div class="drop-wrap">
											<div class="drop-holder">
												<div class="row">
													<div class="col-sm-6 col-md-3">
														<div class="col">
															<div class="img-wrap">
																<a href="hiking-camping.html"><img src="{{ asset('assets/user/img/generic/img-01.jpg" height="228" width="350" alt="image description')}}"></a>
															</div>
															<div class="des">
																<strong class="title"><a href="hiking-camping.html">Hiking/Camping</a></strong>
																<p>A good backpacker minimizes their impact on the environment, including staying on established trails, not disturbing vegetation, and carrying garbage out.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="col">
															<div class="img-wrap">
																<a href="jungle-safari.html"><img src="{{ asset('assets/user/img/generic/img-02.jpg" height="215" width="370" alt="image description')}}"></a>
															</div>
															<div class="des">
																<strong class="title"><a href="jungle-safari.html">Jungle Safari</a></strong>
																<p>In the past, the trip was often a big-game hunt, but today, safari often refers to trips to observe and photograph wildlife—or hiking and sight-seeing as well.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="col">
															<div class="img-wrap">
																<a href="city-tour.html"><img src="{{ asset('assets/user/img/generic/img-03.jpg" height="215" width="370" alt="image description')}}"></a>
															</div>
															<div class="des">
																<strong class="title"><a href="city-tour.html">Urban City Tour</a></strong>
																<p>The type of urban city tour considered here is a full, partial-day, or longer tour of a historical, or cultural or artistic site in one or more tourist destinations.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="col">
															<div class="img-wrap">
																<a href="family-fun.html"><img src="{{ asset('assets/user/img/generic/img-04.jpg" height="215" width="370" alt="image description')}}"></a>
															</div>
															<div class="des">
																<strong class="title"><a href="family-fun.html">Family Fun</a></strong>
																<p>A community area is available on Trafalgar’s website offering members the opportunity to interact with fellow travelers by joining groups, contributing to forums.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="dropdown has-mega-dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="icon-angle-down"></b></a>
									<div class="dropdown-menu">
										<div class="drop-wrap">
											<div class="five-col">
												<div class="column">
													<strong class="title sub-link-opener">General</strong>
													<ul class="header-link">
														<li><a href="about.html">About Us</a></li>
														<li><a href="error.html">404 Error</a></li>
														<li><a href="tour-detail.html">Tour Detail</a></li>
														<li><a href="megamenu.html">Megamenu</a></li>
														<li><a href="contact.html">Contact</a></li>
													</ul>
												</div>
												<div class="column">
													<strong class="title sub-link-opener">Layout</strong>
													<ul class="header-link">
														<li><a href="layout-fullwidth.html">Full Width Page</a></li>
														<li><a href="layout-fullwidth-wide.html">Full Width Wide</a></li>
														<li><a href="layout-left-sidebar.html">Left Sidebar</a></li>
														<li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
														<li><a href="layout-both-sidebar.html">Both Sidebar</a></li>
													</ul>
												</div>
												<div class="column">
													<strong class="title sub-link-opener">Booking</strong>
													<ul class="header-link">
														<li><a href="{{Route('login')}}">Login/Register</a></li>
														<li><a href="my-wishlist.html">My Wishlist</a></li>
														<li><a href="my-cart.html">My Cart</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li><a href="confirmation.html">Confirmation</a></li>
													</ul>
												</div>
												<div class="column">
													<strong class="title sub-link-opener">Header Styles</strong>
													<ul class="header-link">
														<li><a href="header-top-bar.html">Header - Top Bar</a></li>
														<li><a href="header-centered.html">Header - Centered</a></li>
														<li><a href="header-default-white.html">Header - White</a></li>
														<li><a href="header-dark.html">Header - Dark</a></li>
														<li><a href="header-transparent.html">Header - Transparent</a></li>
													</ul>
												</div>
												<div class="column">
													<strong class="title sub-link-opener">Misc</strong>
													<ul class="header-link">
														<li><a href="icon-font.html">Icon Fonts</a></li>
														<li><a href="home-boxed.html">Boxed Layout</a></li>
														<li><a href="home-image-bg.html">Image BG</a></li>
														<li><a href="home-pattern-bg.html">Pattern BG</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="icon-angle-down"></b></a>
									<div class="dropdown-menu">
										<ul>
											<li><a href="blog-default.html">Blog Default</a></li>
											<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="blog-fullwidth.html">Full Width</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Select Your Tours
										<b class="icon-angle-down"></b></a>
									<div class="dropdown-menu">
										<ul>
											<li><a href="blog-default.html">Luxury </a></li>
											<li><a href="blog-left-sidebar.html">Wellness</a></li>
											<li><a href="blog-right-sidebar.html">Solo / Individual </a></li>
											<li><a href="blog-fullwidth.html">Ladies Only</a></li>
											<li><a href="blog-single.html">Romantic / Honeymoon</a></li>
											<li><a href="blog-fullwidth.html">Wildlife</a></li>
											<li><a href="blog-fullwidth.html">Family </a></li>
											<li><a href="blog-fullwidth.html">Slow Travel</a></li>
											<li><a href="blog-fullwidth.html">Island </a></li>
											<li><a href="blog-fullwidth.html">Small Groups</a></li>
										</ul>
									</div>
								</li>
								<li class="dropdown has-mega-dropdown mega-md">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements <b class="icon-angle-down"></b></a>
									<div class="dropdown-menu">
										<div class="drop-wrap">
											<div class="row">
												<div class="col-sm-4">
													<ul class="header-link">
														<li><a href="elements-animations.html">Animations</a></li>
														<li><a href="elements-blockquotes.html">Blockquotes</a></li>
														<li><a href="elements-buttons.html">Buttons</a></li>
														<li><a href="elements-carousel.html">Carousel</a></li>
														<li><a href="elements-counters.html">Counters</a></li>
														<li><a href="elements-modal-boxes.html">Modal Boxes</a></li>
														<li><a href="elements-paginations.html">Paginations</a></li>
													</ul>
												</div>
												<div class="col-sm-4">
													<ul class="header-link">
														<li><a href="elements-columns.html">Columns</a></li>
														<li><a href="elements-data-tables.html">Data Tables</a></li>
														<li><a href="elements-date-picker.html">Date Pickers</a></li>
														<li><a href="elements-dividers.html">Dividers</a></li>
														<li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
														<li><a href="icon-font.html">Icon Fonts</a></li>
														<li><a href="elements-accordions.html">Accordions</a></li>
													</ul>
												</div>
												<div class="col-sm-4">
													<ul class="header-link">
														<li><a href="elements-headings.html">Headings</a></li>
														<li><a href="elements-galleries.html">Galleries</a></li>
														<li><a href="elements-labels-badges.html">Labels/Badges</a></li>
														<li><a href="elements-media-option.html">Media Options</a></li>
														<li><a href="elements-search-options.html">Search Options</a></li>
														<li><a href="elements-social-icons.html">Social Icons</a></li>
														<li><a href="elements-responsive.html">Responsive/Visibility</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="extbut"><button href="#" data-toggle="modal" data-target="#exampleModal" id="tour-inquiry-btn" style="color: white; background-color: #b0a377; padding-left: 7px;">
										Tour Enquiry Form
									</button>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- search form -->
				<form class="search-form" action="#">
					<fieldset>
						<a href="#" class="search-opener hidden-md hidden-lg">
							<span class="icon-search"></span>
						</a>
						<div class="search-wrap">
							<a href="#" class="search-opener close">
								<span class="icon-cross"></span>
							</a>
							<div class="trip-form trip-form-v2 trip-search-main">
								<div class="trip-form-wrap">
									<div class="holder">
										<label>Departing</label>
										<div class='select-holder'>
											<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
												<input class="form-control" type="text" readonly />
												<span class="input-group-addon"><i class="icon-drop"></i></span>
											</div>
										</div>
									</div>
									<div class="holder">
										<label>Returning</label>
										<div class='select-holder'>
											<div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
												<input class="form-control" type="text" readonly />
												<span class="input-group-addon"><i class="icon-drop"></i></span>
											</div>
										</div>
									</div>
									<div class="holder">
										<label for="select-region">Select Region</label>
										<div class='select-holder'>
											<select class="trip-select trip-select-v2 region" name="region" id="select-region">
												<option value="select">Africa</option>
												<option value="select">Arctic</option>
												<option value="select">Asia</option>
												<option value="select">Europe</option>
												<option value="select">Oceanaia</option>
												<option value="select">Polar</option>
											</select>
										</div>
									</div>
									<div class="holder">
										<label for="select-activity">Select Activity</label>
										<div class='select-holder'>
											<select class="trip-select trip-select-v2 acitvity" name="activity" id="select-activity">
												<option value="Holiday Type">Holiday Type</option>
												<option value="Holiday Type">Beach Holidays</option>
												<option value="Holiday Type">Weekend Trips</option>
												<option value="Holiday Type">Summer and Sun</option>
												<option value="Holiday Type">Water Sports</option>
												<option value="Holiday Type">Scuba Diving</option>
											</select>
										</div>
									</div>
									<div class="holder">
										<label for="price-range">Price Range</label>
										<div class='select-holder'>
											<select class="trip-select trip-select-v2 price" name="activity" id="price-range">
												<option value="Price Range">Price Range</option>
												<option value="Price Range">$1 - $499</option>
												<option value="Price Range">$500 - $999</option>
												<option value="Price Range">$1000 - $1499</option>
												<option value="Price Range">$1500 - $2999</option>
												<option value="Price Range">$3000+</option>
											</select>
										</div>
									</div>
									<div class="holder">
										<button class="btn btn-trip btn-trip-v2" type="submit">Find Tours</button>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</header>
			<!-- main banner -->
			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
			<script>
				$(document).ready(function() {

					$("#show").click(function() {

						$(".textarea").show();

					});



					$("#hide").click(function() {

						$(".textarea").hide();

					});



				});





				function whatsappFunction() {

					var checkBox = document.getElementById("myCheck");

					var text = document.getElementById("whatsapp_input");

					if (checkBox.checked == true) {

						text.style.display = "block";

					} else {

						text.style.display = "none";

					}

				}





				function skyFunction() {

					var checkBox = document.getElementById("mysky");

					var text = document.getElementById("sky_input");

					if (checkBox.checked == true) {

						text.style.display = "block";

					} else {

						text.style.display = "none";

					}

				}
			</script>