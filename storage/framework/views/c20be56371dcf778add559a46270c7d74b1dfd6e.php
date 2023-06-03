	<!-- main footer -->

		<footer id="footer">

			<div class="container">

				<!-- newsletter form -->

				<form action="php/subscribe.html" id="signup" method="post" class="newsletter-form">

					<fieldset>

						<div class="input-holder">

							<input type="email" class="form-control" placeholder="Email Address" name="subscriber_email" id="subscriber_email">

							<input type="submit" value="GO">

						</div>

						<span class="info" id="subscribe_message">To receive news, updates and tour packages via email.</span>

					</fieldset>

				</form>

				<!-- footer links -->

				<div class="row footer-holder">

					<nav class="col-sm-4 col-lg-2 footer-nav active">

						<h3>About Entrada</h3>

						<ul class="slide">

							<li><a href="#">The Company</a></li>

							<li><a href="#">Our Values</a></li>

							<li><a href="#">Responsiblity</a></li>

							<li><a href="#">Our Mission</a></li>

							<li><a href="#">Opportunity</a></li>

							<li><a href="#">Safety Concerns</a></li>

						</ul>

					</nav>

					<nav class="col-sm-4 col-lg-2 footer-nav">

						<h3>Destinations</h3>

						<ul class="slide">	
							<li><a href="#">Nepal</a>

							<li><a href="#">Vietnam</a></li>

							<li><a href="#">Fiji Island</a></li>

							<li><a href="#">United States</a></li>

							<li><a href="#">Australia</a></li>

						</ul>

					</nav>

					<nav class="col-sm-4 col-lg-2 footer-nav">

						<h3>themes</h3>

						<ul class="slide">

							<li><a href="#">Hiking and Camping</a></li>

							<li><a href="#">Trekking Tours</a></li>

							<li><a href="#">Jungle Safaris</a></li>

							<li><a href="#">Bungee Jumping</a></li>

							<li><a href="#">Wildlife &amp; Polar</a></li>

							<li><a href="#">Peak Climbing</a></li>

						</ul>

					</nav>

					<nav class="col-sm-4 col-lg-2 footer-nav">

						<h3>reservation</h3>

						<ul class="slide">

							<li><a href="#">Booking Conditions</a></li>

							<li><a href="#">My Bookings</a></li>

							<li><a href="#">Refund Policy</a></li>

							<li><a href="#">Includes &amp; Excludes</a></li>

							<li><a href="#">Your Responsibilities</a></li>

							<li><a href="#">Order a Brochure</a></li>

						</ul>

					</nav>

					<nav class="col-sm-4 col-lg-2 footer-nav">

						<h3>ask Entrada</h3>

						<ul class="slide">

							<li><a href="#">Why Entrada?</a></li>

							<li><a href="#">Ask an Expert</a></li>

							<li><a href="#">Safety Updates</a></li>

							<li><a href="#">We Help When...</a></li>

							<li><a href="#">Personal Matters</a></li>

						</ul>

					</nav>

					<nav class="col-sm-4 col-lg-2 footer-nav last">

						<h3>contact Entrada</h3>

						<ul class="slide address-block">

							<li class="wrap-text"><span class="icon-tel"></span> <a href="tel:02072077878">(020) 72077878</a></li>

							<li class="wrap-text"><span class="icon-fax"></span> <a href="tel:02088828282">(020) 88828282</a></li>

							<li class="wrap-text"><span class="icon-email"></span> <a href="mailto:info@entrada.com">info@entrada.com</a></li>

							<li><span class="icon-home"></span> <address>707 London Road Isleworth, Middx TW7 7QD</address></li>

						</ul>

					</nav>

				</div>

				<!-- social wrap -->

                <?php

				   use App\Models\Socialmedia;

				   $Socialmedia_facebook = Socialmedia::where('platform_name','facebook')->first();

				   $Socialmedia_instagram = Socialmedia::where('platform_name','instagram')->first();

				   $Socialmedia_google = Socialmedia::where('platform_name','google')->first();



				?>



				<ul class="social-wrap">

					<li class="facebook"><a target="_blank" href="<?php echo e($Socialmedia_facebook->platform_url); ?>">

						<span class="icon-facebook"></span>

						<strong class="txt">Like Us</strong>

					</a></li>

					<li class="twitter"><a href="#">

						<span class="icon-twitter"></span>

						<strong class="txt">Follow On</strong>

					</a></li>

					<li class="google-plus"><a href="<?php echo e($Socialmedia_google->platform_url); ?>">

						<span class="icon-google-plus"></span>

						<strong class="txt">+1 On Google</strong>

					</a></li>

					<li class="instagram"><a target="_blank" href="<?php echo e($Socialmedia_instagram->platform_url); ?>">

						<span class="ins"></span>

						<strong class="txt">Instagram</strong>

					</a></li>

					<li class="pin"><a href="#">

						<span class="icon-pin"></span>

						<strong class="txt">Pin It</strong>

					</a></li>

					<li class="dribble"><a href="#">

						<span class="icon-dribble"></span>

						<strong class="txt">Dribbble</strong>

					</a></li>

				</ul>

			</div>

			<div class="footer-bottom">

				<div class="container">

					<div class="row">

						<div class="col-lg-6">

							<!-- copyright -->

							<strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2016 - Entrada - An Adventure Theme - by  <a href="#">Waituk</a></strong>

						</div>

						<div class="col-lg-6">

							<ul class="payment-option">

								<li>

									<img src="https://updateproject.com/gallivant-journeys/public/assets/user/img/footer/visa.png" alt="visa">

								</li>

								<li>

									<img src="https://updateproject.com/gallivant-journeys/public/assets/user/img/footer/mastercard.png" height="20" width="33" alt="master card">

								</li>

								<li>

									<img src="https://updateproject.com/gallivant-journeys/public/assets/user/img/footer/paypal.png" height="20" width="72" alt="paypal">

								</li>

								<li>

									<img src="https://updateproject.com/gallivant-journeys/public/assets/user/img/footer/maestro.png" height="20" width="33" alt="maestro">

								</li>

								<li>

									<img src="https://updateproject.com/gallivant-journeys/public/assets/user/img/footer/bank-transfer.png" height="20" width="55" alt="bank transfer">

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</footer>

	</div>

</div>

	<!-- scroll to top -->

	<div class="scroll-holder text-center">

		<a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>

	</div>

	<!-- jquery library -->

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/jquery/jquery-2.1.4.min.js"></script>

	<!-- external scripts -->

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/bootstrap/javascripts/bootstrap.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/jquery-placeholder/jquery.placeholder.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/match-height/jquery.matchHeight.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/wow/wow.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/stellar/jquery.stellar.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/validate/jquery.validate.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/waypoint/waypoints.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/counter-up/jquery.counterup.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/jquery-ui/jquery-ui.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/fancybox/jquery.fancybox.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/owl-carousel/owl.carousel.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/jcf/js/jcf.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/jcf/js/jcf.select.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/js/mailchimp.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/retina/retina.min.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>

	<!-- custom jquery script -->

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/js/jquery.main.js"></script>

	<!-- revolution slider plugin -->

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>

	<!-- rs5.0 core files -->

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

	<script type="text/javascript" src="https://updateproject.com/gallivant-journeys/public/assets/user/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>

	<!-- revolutions slider script -->

<script src="https://updateproject.com/gallivant-journeys/public/assets/user/js/jquery.main.js"></script>

	<script src="https://updateproject.com/gallivant-journeys/public/assets/user/js/revolution.js"></script>

    <script src="https://updateproject.com/gallivant-journeys/public/assets/user/js/sticky-kit-init.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\gallivant-journeys\resources\views/components/footer.blade.php ENDPATH**/ ?>